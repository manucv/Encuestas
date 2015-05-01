<?php
namespace Application\Model\Dao;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\Sql\Sql;

class FotosDetalleHistoriaDao implements SpecificFunctionsInterface
{

    protected $tableGateway;

    public function __construct(TableGateway $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }
    
    public function traerTodos(){}
    
    public function traer($id){}
    
    public function traerFotosDetalleHistoria($det_his_id){
        
        $det_his_id = (int)$det_his_id;
        $select = $this->tableGateway->select(array('detalle_historia_det_his_id' => $det_his_id));
        
        $resultset = $select->toArray();
        return $resultset;
        
    }
    
    public function eliminar($id){}

}