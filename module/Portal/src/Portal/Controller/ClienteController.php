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
use Zend\Db\ResultSet\ResultSet;

/**
 * Define el objeto que permite la interacción
 * entre el modelo y la vista asociadas.
 *
 * Contiene funciones específicas para el funcionamiento
 * adecuado de la clase controladora.
 */
class ClienteController extends AbstractActionController
{

    /**
     * Almacena la clase para referencia
     * de base de datos y sobrecarga el tableGateway
     *
     * @return object|bool $clienteDao
     */
    protected $clienteDao;

    /**
     * Almacena la clase para referencia
     * de base de datos y sobrecarga el tableGateway
     *
     * @return object|bool $aseguradoraClienteDao
     */
    protected $aseguradoraClienteDao;

    /**
     * Almacena la clase para referencia
     * de base de datos y sobrecarga el tableGateway
     *
     * @return object|bool $historialDao
     */
    protected $historialDao;

    /**
     * Almacena la clase para referencia
     * de base de datos y sobrecarga el tableGateway
     *
     * @return object|bool $detalleHistoriaDao
     */
    protected $detalleHistoriaDao;

    /**
     * Almacena la clase para referencia
     * de base de datos y sobrecarga el tableGateway
     *
     * @return object|bool $fotosDetalleHistoriaDao
     */
    protected $fotosDetalleHistoriaDao;

    /**
     * Action: Muestra el total de registros del objeto
     *
     * @return array
     */
    public function perfilAction()
    {
        $cli_id = (int) $this->params()->fromRoute('id', 0);
        $historial = array();
        $detalleHistorial = null;
        $detalleHistorialFotos = null;
        
        $cliente = $this->getClienteDao()->traer($cli_id);
        $aseguradora_cliente = $this->getAseguradoraClienteDao()->traerAseguradorasDelCliente($cli_id);
        
        foreach ($aseguradora_cliente as $aseguradora){
            $historial[] = $this->getHistorialDao()->traerHistorialPorAseguradoraPorCliente($aseguradora->getAseguradora_ase_id(), $aseguradora->getCliente_cli_id());
        }
        
        //Se elimina del arreglo la informacion que no tiene una historia
        foreach ($historial as $val => $row){
            if(count($row) == 0){
                unset($historial[$val]);
            }
            
        }
        
        /* echo '<pre>';
        print_r($historial);
        echo '</pre>';
        $cont = 0; */
        
        foreach ($historial as $val => $row){
           echo $id = $row[0]['his_id'];
           
           if(!empty($id) && !is_null($id)){
               $detalleHistorial[$id] = $this->getDetalleHistoriaDao()->traerDetallePorHistoria($row[0]['his_id']);
               $detalleHistorialFotos[$id] = $this->getFotosDetalleHistoriaDao()->traerFotosDetalleHistoria($detalleHistorial[$id][0]['det_his_id']);
           }
           
           //$cont++;
        }
        
       
       // die();
        /* echo '<pre>';
        print_r($historial);
        echo '</pre>';
        
        echo '<pre>';
        print_r($detalleHistorial);
        echo '</pre>';
        
        echo '<pre>';
        print_r($detalleHistorialFotos);
        echo '</pre>';
        
        die(); */
        
        
        
        return array(
            'cliente' => $cliente,
            'aseguradoraCliente' => $aseguradora_cliente,
            'historial' => $historial,
            'detalleHistorial' => $detalleHistorial,
            'detalleHistorialFotos' => $detalleHistorialFotos,
        );
    }

    /**
     * Obtiene el objeto registrado en el service manager
     * de la clase module (Application)
     *
     * @return object|bool
     */
    private function getHistorialDao()
    {
        if (! $this->historialDao) {
            $sm = $this->getServiceLocator();
            $this->historialDao = $sm->get('Application\Model\Dao\HistorialDao');
        }
        return $this->historialDao;
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

    /**
     * Obtiene el objeto registrado en el service manager
     * de la clase module (Application)
     *
     * @return object|bool
     */
    private function getDetalleHistoriaDao()
    {
        if (! $this->detalleHistoriaDao) {
            $sm = $this->getServiceLocator();
            $this->detalleHistoriaDao = $sm->get('Application\Model\Dao\DetalleHistoriaDao');
        }
        return $this->detalleHistoriaDao;
    }

    /**
     * Obtiene el objeto registrado en el service manager
     * de la clase module (Application)
     *
     * @return object|bool
     */
    private function getFotosDetalleHistoriaDao()
    {
        if (! $this->fotosDetalleHistoriaDao) {
            $sm = $this->getServiceLocator();
            $this->fotosDetalleHistoriaDao = $sm->get('Application\Model\Dao\FotosDetalleHistoriaDao');
        }
        return $this->fotosDetalleHistoriaDao;
    }
}