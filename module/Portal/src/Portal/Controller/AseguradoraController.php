<?php
/**
 * Clase controladora del modelo y la vista asociada.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Portal\Controller;

/**
 * Importación de librerías
 */
use Zend\Mvc\Controller\AbstractActionController;

/**
 * Define el objeto que permite la interacción
 * entre el modelo y la vista asociadas.
 *
 * Contiene funciones específicas para el funcionamiento
 * adecuado de la clase controladora.
 */
class AseguradoraController extends AbstractActionController
{
    /**
     * Almacena la clase para referencia
     * de base de datos y sobrecarga el tableGateway
     *
     * @return object|bool $aseguradoraDao
     */
    protected $aseguradoraDao;
    
    /**
     * Almacena la clase para referencia
     * de base de datos y sobrecarga el tableGateway
     *
     * @return object|bool $clienteDao
     */
    protected $clienteDao;
    
    /**
     * Action: Muestra el total de registros del objeto
     *
     * @return array
     */
    public function perfilAction()
    {
        $aseguradora = (int) $_SESSION['Zend_Auth']['storage']->aseguradora_ase_id;
        // Registra la ruta de navegacion del usuario en el layout
        /* $this->layout()->setVariables(array(
            'ruta' => array(
                'modulo' => 'recursos',
                'padre' => 'cargos'
            )
        )); */
        
        /* echo '<pre>';
        print_r($this->getAseguradoraClienteDao()->traerClientesActivosAseguradora($aseguradora));
        echo '</pre>';
        
        die(); */
        
        return array(
            'aseguradora' => $this->getAseguradoraDao()->traer($aseguradora),
            'clientes' => $this->getAseguradoraClienteDao()->traerClientesActivosAseguradora($aseguradora)
        );
    }
    
    /**
     * Obtiene el objeto registrado en el service manager
     * de la clase module (Application)
     *
     * @return object|bool
     */
    private function getAseguradoraDao()
    {
        if (! $this->aseguradoraDao) {
            $sm = $this->getServiceLocator();
            $this->aseguradoraDao = $sm->get('Application\Model\Dao\AseguradoraDao');
        }
        return $this->aseguradoraDao;
    }
    
    /**
     * Obtiene el objeto registrado en el service manager
     * de la clase module (Application)
     *
     * @return object|bool
     */
    private function getClienteDao()
    {
        if (! $this->clienteDao) {
            $sm = $this->getServiceLocator();
            $this->clienteDao = $sm->get('Application\Model\Dao\ClienteDao');
        }
        return $this->clienteDao;
    }
    
    /**
     * Obtiene el objeto registrado en el service manager
     * de la clase module (Application)
     *
     * @return object|bool
     */
    private function getAseguradoraClienteDao()
    {
        if (! $this->aseguradoraClienteDao) {
            $sm = $this->getServiceLocator();
            $this->aseguradoraClienteDao = $sm->get('Application\Model\Dao\AseguradoraClienteDao');
        }
        return $this->aseguradoraClienteDao;
    }
    
}