<?php
/**
 * Objeto referente a la tabla de base de datos 'aseguradora'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto Usuario y el intercambio de información con el hydrator.
 */
class Aseguradora
{

    private $ase_id;

    private $ase_nombre;

    private $ase_logo;
    
    private $ase_facebook;
    
    private $ase_twitter;
    
    private $ase_google;
    
    private $ase_email;
    
    private $ase_descripcion;
    
    private $ase_pagina_web;
    
    private $ase_telefono;
    
    private $ase_direccion;

    function __construct()
    {}

    /**
     * @return the $ase_id
     */
    public function getAse_id()
    {
        return $this->ase_id;
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
     * @return the $ase_facebook
     */
    public function getAse_facebook()
    {
        return $this->ase_facebook;
    }

 /**
     * @return the $ase_twitter
     */
    public function getAse_twitter()
    {
        return $this->ase_twitter;
    }

 /**
     * @return the $ase_google
     */
    public function getAse_google()
    {
        return $this->ase_google;
    }

 /**
     * @return the $ase_email
     */
    public function getAse_email()
    {
        return $this->ase_email;
    }

 /**
     * @return the $ase_descripcion
     */
    public function getAse_descripcion()
    {
        return $this->ase_descripcion;
    }

 /**
     * @return the $ase_pagina_web
     */
    public function getAse_pagina_web()
    {
        return $this->ase_pagina_web;
    }

 /**
     * @return the $ase_telefono
     */
    public function getAse_telefono()
    {
        return $this->ase_telefono;
    }

 /**
     * @return the $ase_direccion
     */
    public function getAse_direccion()
    {
        return $this->ase_direccion;
    }

 /**
     * @param Ambigous <NULL, array> $ase_id
     */
    public function setAse_id($ase_id)
    {
        $this->ase_id = $ase_id;
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
     * @param Ambigous <NULL, array> $ase_facebook
     */
    public function setAse_facebook($ase_facebook)
    {
        $this->ase_facebook = $ase_facebook;
    }

 /**
     * @param Ambigous <NULL, array> $ase_twitter
     */
    public function setAse_twitter($ase_twitter)
    {
        $this->ase_twitter = $ase_twitter;
    }

 /**
     * @param Ambigous <NULL, array> $ase_google
     */
    public function setAse_google($ase_google)
    {
        $this->ase_google = $ase_google;
    }

 /**
     * @param Ambigous <NULL, array> $ase_email
     */
    public function setAse_email($ase_email)
    {
        $this->ase_email = $ase_email;
    }

 /**
     * @param Ambigous <NULL, array> $ase_descripcion
     */
    public function setAse_descripcion($ase_descripcion)
    {
        $this->ase_descripcion = $ase_descripcion;
    }

 /**
     * @param Ambigous <NULL, array> $ase_pagina_web
     */
    public function setAse_pagina_web($ase_pagina_web)
    {
        $this->ase_pagina_web = $ase_pagina_web;
    }

 /**
     * @param Ambigous <NULL, array> $ase_telefono
     */
    public function setAse_telefono($ase_telefono)
    {
        $this->ase_telefono = $ase_telefono;
    }

 /**
     * @param Ambigous <NULL, array> $ase_direccion
     */
    public function setAse_direccion($ase_direccion)
    {
        $this->ase_direccion = $ase_direccion;
    }

 /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->ase_id = (isset($data['ase_id'])) ? $data['ase_id'] : null;
        $this->ase_nombre = (isset($data['ase_nombre'])) ? $data['ase_nombre'] : null;
        $this->ase_logo = (isset($data['ase_logo'])) ? $data['ase_logo'] : null;
        $this->ase_facebook = (isset($data['ase_facebook'])) ? $data['ase_facebook'] : null;
        $this->ase_twitter = (isset($data['ase_twitter'])) ? $data['ase_twitter'] : null;
        $this->ase_google = (isset($data['ase_google'])) ? $data['ase_google'] : null;
        $this->ase_email = (isset($data['ase_email'])) ? $data['ase_email'] : null;
        $this->ase_descripcion = (isset($data['ase_descripcion'])) ? $data['ase_descripcion'] : null;
        $this->ase_pagina_web = (isset($data['ase_pagina_web'])) ? $data['ase_pagina_web'] : null;
        $this->ase_telefono = (isset($data['ase_telefono'])) ? $data['ase_telefono'] : null;
        $this->ase_direccion = (isset($data['ase_direccion'])) ? $data['ase_direccion'] : null;
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