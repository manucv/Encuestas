<?php
namespace Application\Model\Dao;

use Zend\Db\TableGateway\TableGateway;
use Application\Model\Entity\Aseguradora;
use Zend\Db\Sql\Sql;

class HistorialDao implements SpecificFunctionsInterface
{

    protected $tableGateway;

    public function __construct(TableGateway $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }
    
    public function traerTodos(){}
    
    public function traer($id){}
    
    public function traerHistorialPorAseguradoraPorCliente($ase_id, $cli_id){
        $select = $this->tableGateway->select(array('aseguradora_cliente_aseguradora_ase_id' => $ase_id, 'aseguradora_cliente_cliente_cli_id' => $cli_id));
        
        $resultset = $select->toArray();
        return $resultset;
        
    }

    /* public function traer($cli_id)
    {
        $cli_id = (int) $cli_id;
        $resultSet = $this->tableGateway->select(array(
            'cli_id' => $cli_id
        ))->current();
        
        if (! $resultSet) {
            throw new \Exception('No se encontro el ID del cliente');
        }
        return $resultSet;
    }
    
    public function traerPorAseguradora($aseguradora){
        $aseguradora = (int) $aseguradora;
        $resultSet = $this->tableGateway->select(array(
            'ase_id' => $aseguradora
        ))->current();
        
        if (! $resultSet) {
            throw new \Exception('No se encontro el ID del cliente');
        }
        return $resultSet;
    } */

    public function guardar(Aseguradora $usuario)
    {
        
        /*
         * $id = ( int ) $usuario->getUsu_id ();
         *
         * $data = array (
         * 'ciu_id' => $usuario->getCiu_id (),
         * 'usu_usuario' => $usuario->getUsu_usuario (),
         * 'usu_email' => $usuario->getUsu_email (),
         * 'usu_nombre' => $usuario->getUsu_nombre (),
         * 'usu_apellido' => $usuario->getUsu_apellido (),
         * 'usu_clave' => $usuario->getUsu_clave (),
         * 'usu_estado' => $usuario->getUsu_estado (),
         * 'usu_fecha_registro' => date('Y-m-d H:i:s'),
         * 'usu_codigo_recuperacion' => $usuario->getUsu_codigo_recuperacion()
         * );
         *
         * $data ['usu_id'] = $id;
         *
         * if (!empty ( $id ) && !is_null ( $id )) {
         * if ($this->traer ( $id )) {
         *
         * $data = array (
         * 'ciu_id' => $usuario->getCiu_id (),
         * 'usu_usuario' => $usuario->getUsu_usuario (),
         * 'usu_email' => $usuario->getUsu_email (),
         * 'usu_nombre' => $usuario->getUsu_nombre (),
         * 'usu_apellido' => $usuario->getUsu_apellido (),
         * 'usu_estado' => $usuario->getUsu_estado (),
         * 'usu_codigo_recuperacion' => $usuario->getUsu_codigo_recuperacion (),
         * );
         *
         * $this->tableGateway->update ( $data, array ( 'usu_id' => $id ) );
         *
         * } else {
         * throw new \Exception ( 'No se encontro el id para actualizar' );
         * }
         * }else{
         * $this->tableGateway->insert ( $data );
         * $id = $this->tableGateway->lastInsertValue;
         * }
         * return $id;
         */
    }

    public function eliminar($id)
    {
        /*
         * if ($this->traer ( $id )) {
         * return $this->tableGateway->delete ( array (
         * 'usu_id' => $id
         * ) );
         * } else {
         * throw new \Exception ( 'No se encontro el id para eliminar' );
         * }
         */
    }

}