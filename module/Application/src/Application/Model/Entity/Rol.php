<?php
/**
 * Objeto referente a la tabla de base de datos 'rol'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto Rol y el intercambio de información con el hydrator.
 */
class Rol
{

    private $rol_id;

    private $rol_nombre;

    function __construct()
    {}

    /**
     *
     * @return the $rol_id
     */
    public function getRol_id()
    {
        return $this->rol_id;
    }

    /**
     *
     * @return the $rol_nombre
     */
    public function getRol_nombre()
    {
        return $this->rol_nombre;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $rol_id
     */
    public function setRol_id($rol_id)
    {
        $this->rol_id = $rol_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $rol_nombre
     */
    public function setRol_nombre($rol_nombre)
    {
        $this->rol_nombre = $rol_nombre;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->rol_id = (isset($data['rol_id'])) ? $data['rol_id'] : null;
        $this->rol_nombre = (isset($data['rol_nombre'])) ? $data['rol_nombre'] : null;
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