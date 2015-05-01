<?php
/**
 * Objeto referente a la tabla de base de datos 'detalle_historia'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto DetalleHistoria y el intercambio de información con el hydrator.
 */
class DetalleHistoria
{

    private $det_his_id;

    private $det_his_fecha;

    private $det_his_descripcion;

    private $historial_his_id;

    private $producto_pro_id;

    function __construct()
    {}

    /**
     *
     * @return the $det_his_id
     */
    public function getDet_his_id()
    {
        return $this->det_his_id;
    }

    /**
     *
     * @return the $det_his_fecha
     */
    public function getDet_his_fecha()
    {
        return $this->det_his_fecha;
    }

    /**
     *
     * @return the $det_his_descripcion
     */
    public function getDet_his_descripcion()
    {
        return $this->det_his_descripcion;
    }

    /**
     *
     * @return the $historial_his_id
     */
    public function getHistorial_his_id()
    {
        return $this->historial_his_id;
    }

    /**
     *
     * @return the $producto_pro_id
     */
    public function getProducto_pro_id()
    {
        return $this->producto_pro_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $det_his_id
     */
    public function setDet_his_id($det_his_id)
    {
        $this->det_his_id = $det_his_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $det_his_fecha
     */
    public function setDet_his_fecha($det_his_fecha)
    {
        $this->det_his_fecha = $det_his_fecha;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $det_his_descripcion
     */
    public function setDet_his_descripcion($det_his_descripcion)
    {
        $this->det_his_descripcion = $det_his_descripcion;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $historial_his_id
     */
    public function setHistorial_his_id($historial_his_id)
    {
        $this->historial_his_id = $historial_his_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $producto_pro_id
     */
    public function setProducto_pro_id($producto_pro_id)
    {
        $this->producto_pro_id = $producto_pro_id;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->det_his_id = (isset($data['det_his_id'])) ? $data['det_his_id'] : null;
        $this->det_his_fecha = (isset($data['det_his_fecha'])) ? $data['det_his_fecha'] : null;
        $this->det_his_descripcion = (isset($data['det_his_descripcion'])) ? $data['det_his_descripcion'] : null;
        $this->historial_his_id = (isset($data['historial_his_id'])) ? $data['historial_his_id'] : null;
        $this->producto_pro_id = (isset($data['producto_pro_id'])) ? $data['producto_pro_id'] : null;
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