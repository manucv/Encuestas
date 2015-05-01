<?php
/**
 * Objeto referente a la tabla de base de datos 'cliente'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto Usuario y el intercambio de información con el hydrator.
 */
class Cliente
{

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

    function __construct()
    {}

    /**
     *
     * @return the $cli_id
     */
    public function getCli_id()
    {
        return $this->cli_id;
    }

    /**
     *
     * @return the $cli_nombre
     */
    public function getCli_nombre()
    {
        return $this->cli_nombre;
    }

    /**
     *
     * @return the $cli_apellido
     */
    public function getCli_apellido()
    {
        return $this->cli_apellido;
    }

    /**
     *
     * @return the $cli_tipo_documento
     */
    public function getCli_tipo_documento()
    {
        return $this->cli_tipo_documento;
    }

    /**
     *
     * @return the $cli_cedula_pasaporte
     */
    public function getCli_cedula_pasaporte()
    {
        return $this->cli_cedula_pasaporte;
    }

    /**
     *
     * @return the $cli_email
     */
    public function getCli_email()
    {
        return $this->cli_email;
    }

    /**
     *
     * @return the $cli_direccion
     */
    public function getCli_direccion()
    {
        return $this->cli_direccion;
    }

    /**
     *
     * @return the $cli_telefono
     */
    public function getCli_telefono()
    {
        return $this->cli_telefono;
    }

    /**
     *
     * @return the $cli_sexo
     */
    public function getCli_sexo()
    {
        return $this->cli_sexo;
    }

    /**
     *
     * @return the $cli_critico
     */
    public function getCli_critico()
    {
        return $this->cli_critico;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $cli_id
     */
    public function setCli_id($cli_id)
    {
        $this->cli_id = $cli_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $cli_nombre
     */
    public function setCli_nombre($cli_nombre)
    {
        $this->cli_nombre = $cli_nombre;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $cli_apellido
     */
    public function setCli_apellido($cli_apellido)
    {
        $this->cli_apellido = $cli_apellido;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $cli_tipo_documento
     */
    public function setCli_tipo_documento($cli_tipo_documento)
    {
        $this->cli_tipo_documento = $cli_tipo_documento;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $cli_cedula_pasaporte
     */
    public function setCli_cedula_pasaporte($cli_cedula_pasaporte)
    {
        $this->cli_cedula_pasaporte = $cli_cedula_pasaporte;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $cli_email
     */
    public function setCli_email($cli_email)
    {
        $this->cli_email = $cli_email;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $cli_direccion
     */
    public function setCli_direccion($cli_direccion)
    {
        $this->cli_direccion = $cli_direccion;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $cli_telefono
     */
    public function setCli_telefono($cli_telefono)
    {
        $this->cli_telefono = $cli_telefono;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $cli_sexo
     */
    public function setCli_sexo($cli_sexo)
    {
        $this->cli_sexo = $cli_sexo;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $cli_critico
     */
    public function setCli_critico($cli_critico)
    {
        $this->cli_critico = $cli_critico;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
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