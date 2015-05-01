<?php
/**
 * Objeto referente a la tabla de base de datos 'usuario'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto Usuario y el intercambio de información con el hydrator.
 */
class Usuario
{

    private $usu_id;

    private $usu_email;

    private $usu_nombre;

    private $usu_apellido;

    private $usu_clave;

    private $usu_estado;

    private $usu_ultima_fecha_conexion;

    private $aseguradora_ase_id;

    function __construct()
    {}

    /**
     *
     * @return the $usu_id
     */
    public function getUsu_id()
    {
        return $this->usu_id;
    }

    /**
     *
     * @return the $usu_email
     */
    public function getUsu_email()
    {
        return $this->usu_email;
    }

    /**
     *
     * @return the $usu_nombre
     */
    public function getUsu_nombre()
    {
        return $this->usu_nombre;
    }

    /**
     *
     * @return the $usu_apellido
     */
    public function getUsu_apellido()
    {
        return $this->usu_apellido;
    }

    /**
     *
     * @return the $usu_clave
     */
    public function getUsu_clave()
    {
        return $this->usu_clave;
    }

    /**
     *
     * @return the $usu_estado
     */
    public function getUsu_estado()
    {
        return $this->usu_estado;
    }

    /**
     *
     * @return the $usu_ultima_fecha_conexion
     */
    public function getUsu_ultima_fecha_conexion()
    {
        return $this->usu_ultima_fecha_conexion;
    }

    /**
     *
     * @return the $aseguradora_ase_id
     */
    public function getAseguradora_ase_id()
    {
        return $this->aseguradora_ase_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $usu_id
     */
    public function setUsu_id($usu_id)
    {
        $this->usu_id = $usu_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $usu_email
     */
    public function setUsu_email($usu_email)
    {
        $this->usu_email = $usu_email;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $usu_nombre
     */
    public function setUsu_nombre($usu_nombre)
    {
        $this->usu_nombre = $usu_nombre;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $usu_apellido
     */
    public function setUsu_apellido($usu_apellido)
    {
        $this->usu_apellido = $usu_apellido;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $usu_clave
     */
    public function setUsu_clave($usu_clave)
    {
        $this->usu_clave = $usu_clave;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $usu_estado
     */
    public function setUsu_estado($usu_estado)
    {
        $this->usu_estado = $usu_estado;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $usu_ultima_fecha_conexion
     */
    public function setUsu_ultima_fecha_conexion($usu_ultima_fecha_conexion)
    {
        $this->usu_ultima_fecha_conexion = $usu_ultima_fecha_conexion;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $aseguradora_ase_id
     */
    public function setAseguradora_ase_id($aseguradora_ase_id)
    {
        $this->aseguradora_ase_id = $aseguradora_ase_id;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->usu_id = (isset($data['usu_id'])) ? $data['usu_id'] : null;
        $this->usu_email = (isset($data['usu_email'])) ? $data['usu_email'] : null;
        $this->usu_nombre = (isset($data['usu_nombre'])) ? $data['usu_nombre'] : null;
        $this->usu_apellido = (isset($data['usu_apellido'])) ? $data['usu_apellido'] : null;
        $this->usu_clave = (isset($data['usu_clave'])) ? $data['usu_clave'] : null;
        $this->usu_estado = (isset($data['usu_estado'])) ? $data['usu_estado'] : null;
        $this->usu_ultima_fecha_conexion = (isset($data['usu_ultima_fecha_conexion'])) ? $data['usu_ultima_fecha_conexion'] : null;
        $this->aseguradora_ase_id = (isset($data['aseguradora_ase_id'])) ? $data['aseguradora_ase_id'] : null;
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