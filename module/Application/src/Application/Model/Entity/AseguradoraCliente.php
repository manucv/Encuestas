<?php
/**
 * Objeto referente a la tabla de base de datos 'aseguradoracliente'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto AseguradoraCliente y el intercambio de información con el hydrator.
 */
class AseguradoraCliente
{

    private $aseguradora_ase_id;

    private $cliente_cli_id;

    private $ase_cli_estado;

    private $cli_id;

    private $cli_nombre;

    private $cli_apellido;

    private $cli_tipo_documento;

    private $cli_cedula_pasaporte;

    private $cli_email;

    private $cli_direccion;

    private $cli_telefono;

    private $cli_sexo;
    
    private $cli_critico;

    private $ase_nombre;

    private $ase_logo;

    function __construct()
    {}


    /**
     * @return the $aseguradora_ase_id
     */
    public function getAseguradora_ase_id()
    {
        return $this->aseguradora_ase_id;
    }

 /**
     * @return the $cliente_cli_id
     */
    public function getCliente_cli_id()
    {
        return $this->cliente_cli_id;
    }

 /**
     * @return the $ase_cli_estado
     */
    public function getAse_cli_estado()
    {
        return $this->ase_cli_estado;
    }

 /**
     * @return the $cli_id
     */
    public function getCli_id()
    {
        return $this->cli_id;
    }

 /**
     * @return the $cli_nombre
     */
    public function getCli_nombre()
    {
        return $this->cli_nombre;
    }

 /**
     * @return the $cli_apellido
     */
    public function getCli_apellido()
    {
        return $this->cli_apellido;
    }

 /**
     * @return the $cli_tipo_documento
     */
    public function getCli_tipo_documento()
    {
        return $this->cli_tipo_documento;
    }

 /**
     * @return the $cli_cedula_pasaporte
     */
    public function getCli_cedula_pasaporte()
    {
        return $this->cli_cedula_pasaporte;
    }

 /**
     * @return the $cli_email
     */
    public function getCli_email()
    {
        return $this->cli_email;
    }

 /**
     * @return the $cli_direccion
     */
    public function getCli_direccion()
    {
        return $this->cli_direccion;
    }

 /**
     * @return the $cli_telefono
     */
    public function getCli_telefono()
    {
        return $this->cli_telefono;
    }

 /**
     * @return the $cli_sexo
     */
    public function getCli_sexo()
    {
        return $this->cli_sexo;
    }

 /**
     * @return the $cli_critico
     */
    public function getCli_critico()
    {
        return $this->cli_critico;
    }

 /**
     * @return the $ase_nombre
     */
    public function getAse_nombre()
    {
        return $this->ase_nombre;
    }

 /**
     * @return the $ase_logo
     */
    public function getAse_logo()
    {
        return $this->ase_logo;
    }

 /**
     * @param Ambigous <NULL, array> $aseguradora_ase_id
     */
    public function setAseguradora_ase_id($aseguradora_ase_id)
    {
        $this->aseguradora_ase_id = $aseguradora_ase_id;
    }

 /**
     * @param Ambigous <NULL, array> $cliente_cli_id
     */
    public function setCliente_cli_id($cliente_cli_id)
    {
        $this->cliente_cli_id = $cliente_cli_id;
    }

 /**
     * @param Ambigous <NULL, array> $ase_cli_estado
     */
    public function setAse_cli_estado($ase_cli_estado)
    {
        $this->ase_cli_estado = $ase_cli_estado;
    }

 /**
     * @param Ambigous <NULL, array> $cli_id
     */
    public function setCli_id($cli_id)
    {
        $this->cli_id = $cli_id;
    }

 /**
     * @param Ambigous <NULL, array> $cli_nombre
     */
    public function setCli_nombre($cli_nombre)
    {
        $this->cli_nombre = $cli_nombre;
    }

 /**
     * @param Ambigous <NULL, array> $cli_apellido
     */
    public function setCli_apellido($cli_apellido)
    {
        $this->cli_apellido = $cli_apellido;
    }

 /**
     * @param Ambigous <NULL, array> $cli_tipo_documento
     */
    public function setCli_tipo_documento($cli_tipo_documento)
    {
        $this->cli_tipo_documento = $cli_tipo_documento;
    }

 /**
     * @param Ambigous <NULL, array> $cli_cedula_pasaporte
     */
    public function setCli_cedula_pasaporte($cli_cedula_pasaporte)
    {
        $this->cli_cedula_pasaporte = $cli_cedula_pasaporte;
    }

 /**
     * @param Ambigous <NULL, array> $cli_email
     */
    public function setCli_email($cli_email)
    {
        $this->cli_email = $cli_email;
    }

 /**
     * @param Ambigous <NULL, array> $cli_direccion
     */
    public function setCli_direccion($cli_direccion)
    {
        $this->cli_direccion = $cli_direccion;
    }

 /**
     * @param Ambigous <NULL, array> $cli_telefono
     */
    public function setCli_telefono($cli_telefono)
    {
        $this->cli_telefono = $cli_telefono;
    }

 /**
     * @param Ambigous <NULL, array> $cli_sexo
     */
    public function setCli_sexo($cli_sexo)
    {
        $this->cli_sexo = $cli_sexo;
    }

 /**
     * @param Ambigous <NULL, array> $cli_critico
     */
    public function setCli_critico($cli_critico)
    {
        $this->cli_critico = $cli_critico;
    }

 /**
     * @param Ambigous <NULL, array> $ase_nombre
     */
    public function setAse_nombre($ase_nombre)
    {
        $this->ase_nombre = $ase_nombre;
    }

 /**
     * @param Ambigous <NULL, array> $ase_logo
     */
    public function setAse_logo($ase_logo)
    {
        $this->ase_logo = $ase_logo;
    }

 /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->aseguradora_ase_id = (isset($data['aseguradora_ase_id'])) ? $data['aseguradora_ase_id'] : null;
        $this->cliente_cli_id = (isset($data['cliente_cli_id'])) ? $data['cliente_cli_id'] : null;
        $this->ase_cli_estado = (isset($data['ase_cli_estado'])) ? $data['ase_cli_estado'] : null;
        
        $this->cli_id = (isset($data['cli_id'])) ? $data['cli_id'] : null;
        $this->cli_nombre = (isset($data['cli_nombre'])) ? $data['cli_nombre'] : null;
        $this->cli_apellido = (isset($data['cli_apellido'])) ? $data['cli_apellido'] : null;
        $this->cli_tipo_documento = (isset($data['cli_tipo_documento'])) ? $data['cli_tipo_documento'] : null;
        $this->cli_cedula_pasaporte = (isset($data['cli_cedula_pasaporte'])) ? $data['cli_cedula_pasaporte'] : null;
        $this->cli_email = (isset($data['cli_email'])) ? $data['cli_email'] : null;
        $this->cli_direccion = (isset($data['cli_direccion'])) ? $data['cli_direccion'] : null;
        $this->cli_telefono = (isset($data['cli_telefono'])) ? $data['cli_telefono'] : null;
        $this->cli_sexo = (isset($data['cli_sexo'])) ? $data['cli_sexo'] : null;
        $this->cli_critico = (isset($data['cli_critico'])) ? $data['cli_critico'] : null;
        
        $this->ase_nombre = (isset($data['ase_nombre'])) ? $data['ase_nombre'] : null;
        $this->ase_logo = (isset($data['ase_logo'])) ? $data['ase_logo'] : null;
    }

    /**
     * Obtiene los valores de los atributos de clase para poblar el hydrator.
     *
     * @return array
     */
    public function getArrayCopy()
    {
        return get_object_vars($this);
    }
}