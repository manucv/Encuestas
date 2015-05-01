<?php
namespace Application\Model\Dao;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\Sql\Sql;

class DetalleHistoriaDao implements SpecificFunctionsInterface
{

    protected $tableGateway;

    public function __construct(TableGateway $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }
    
    public function traerTodos(){}
    
    public function traer($id){}
    
    public function traerDetallePorHistoria($his_id){
        
        $id = (int)$his_id;
        $select = $this->tableGateway->select(array('historial_his_id' => $id));
        
        $resultset = $select->toArray();
        return $resultset;
        
    }
    
    public function eliminar($id){}

}