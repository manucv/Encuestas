<?php
/**
 * Objeto referente a la tabla de base de datos 'fotos_detalle_historia'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto FotosDetalleHistoria y el intercambio de información con el hydrator.
 */
class FotosDetalleHistoria
{

    private $fot_det_his_id;

    private $fot_det_his_fecha;

    private $fot_det_his_path;

    private $detalle_historia_det_his_id;

    function __construct()
    {}

    /**
     *
     * @return the $fot_det_his_id
     */
    public function getFot_det_his_id()
    {
        return $this->fot_det_his_id;
    }

    /**
     *
     * @return the $fot_det_his_fecha
     */
    public function getFot_det_his_fecha()
    {
        return $this->fot_det_his_fecha;
    }

    /**
     *
     * @return the $fot_det_his_path
     */
    public function getFot_det_his_path()
    {
        return $this->fot_det_his_path;
    }

    /**
     *
     * @return the $detalle_historia_det_his_id
     */
    public function getDetalle_historia_det_his_id()
    {
        return $this->detalle_historia_det_his_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $fot_det_his_id
     */
    public function setFot_det_his_id($fot_det_his_id)
    {
        $this->fot_det_his_id = $fot_det_his_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $fot_det_his_fecha
     */
    public function setFot_det_his_fecha($fot_det_his_fecha)
    {
        $this->fot_det_his_fecha = $fot_det_his_fecha;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $fot_det_his_path
     */
    public function setFot_det_his_path($fot_det_his_path)
    {
        $this->fot_det_his_path = $fot_det_his_path;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $detalle_historia_det_his_id
     */
    public function setDetalle_historia_det_his_id($detalle_historia_det_his_id)
    {
        $this->detalle_historia_det_his_id = $detalle_historia_det_his_id;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->fot_det_his_id = (isset($data['fot_det_his_id'])) ? $data['fot_det_his_id'] : null;
        $this->fot_det_his_fecha = (isset($data['fot_det_his_fecha'])) ? $data['fot_det_his_fecha'] : null;
        $this->fot_det_his_path = (isset($data['fot_det_his_path'])) ? $data['fot_det_his_path'] : null;
        $this->detalle_historia_det_his_id = (isset($data['detalle_historia_det_his_id'])) ? $data['detalle_historia_det_his_id'] : null;
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