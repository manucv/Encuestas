<?php
namespace Application\Model\Dao;

use Zend\Db\TableGateway\TableGateway;
use Application\Model\Entity\Aseguradora;
use Zend\Db\Sql\Sql;

class AseguradoraDao implements SpecificFunctionsInterface
{

    protected $tableGateway;

    public function __construct(TableGateway $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function traerTodos()
    {
        /*
         * $select = $this->tableGateway->getSql ()->select ();
         * $select->join ( 'ciudad', 'ciudad.ciu_id = usuario.ciu_id' );
         *
         * $resultSet = $this->tableGateway->selectWith ( $select );
         * return $resultSet;
         */
    }

    public function traer($ase_id)
    {
        $ase_id = (int) $ase_id;
        $resultSet = $this->tableGateway->select(array(
            'ase_id' => $ase_id
        ))->current();
        
        if (! $resultSet) {
            throw new \Exception('No se encontro el ID de la aseguradora');
        }
        return $resultSet;
    }

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