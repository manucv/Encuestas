<?php
/**
 * Objeto referente a la tabla de base de datos 'historial'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto historial y el intercambio de información con el hydrator.
 */
class Historial
{

    private $his_id;

    private $his_fecha;

    private $aseguradora_cliente_aseguradora_ase_id;

    private $aseguradora_cliente_cliente_cli_id;

    private $his_estado;

    function __construct()
    {}

    /**
     *
     * @return the $his_id
     */
    public function getHis_id()
    {
        return $this->his_id;
    }

    /**
     *
     * @return the $his_fecha
     */
    public function getHis_fecha()
    {
        return $this->his_fecha;
    }

    /**
     *
     * @return the $aseguradora_cliente_aseguradora_ase_id
     */
    public function getAseguradora_cliente_aseguradora_ase_id()
    {
        return $this->aseguradora_cliente_aseguradora_ase_id;
    }

    /**
     *
     * @return the $aseguradora_cliente_cliente_cli_id
     */
    public function getAseguradora_cliente_cliente_cli_id()
    {
        return $this->aseguradora_cliente_cliente_cli_id;
    }

    /**
     *
     * @return the $his_estado
     */
    public function getHis_estado()
    {
        return $this->his_estado;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $his_id
     */
    public function setHis_id($his_id)
    {
        $this->his_id = $his_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $his_fecha
     */
    public function setHis_fecha($his_fecha)
    {
        $this->his_fecha = $his_fecha;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $aseguradora_cliente_aseguradora_ase_id
     */
    public function setAseguradora_cliente_aseguradora_ase_id($aseguradora_cliente_aseguradora_ase_id)
    {
        $this->aseguradora_cliente_aseguradora_ase_id = $aseguradora_cliente_aseguradora_ase_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $aseguradora_cliente_cliente_cli_id
     */
    public function setAseguradora_cliente_cliente_cli_id($aseguradora_cliente_cliente_cli_id)
    {
        $this->aseguradora_cliente_cliente_cli_id = $aseguradora_cliente_cliente_cli_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $his_estado
     */
    public function setHis_estado($his_estado)
    {
        $this->his_estado = $his_estado;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->his_id = (isset($data['his_id'])) ? $data['his_id'] : null;
        $this->his_fecha = (isset($data['his_fecha'])) ? $data['his_fecha'] : null;
        $this->aseguradora_cliente_aseguradora_ase_id = (isset($data['aseguradora_cliente_aseguradora_ase_id'])) ? $data['aseguradora_cliente_aseguradora_ase_id'] : null;
        $this->aseguradora_cliente_cliente_cli_id = (isset($data['aseguradora_cliente_cliente_cli_id'])) ? $data['aseguradora_cliente_cliente_cli_id'] : null;
        $this->his_estado = (isset($data['his_estado'])) ? $data['his_estado'] : null;
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