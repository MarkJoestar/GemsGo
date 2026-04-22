<?php
require_once 'MySQL.php';
require_once 'Modulo.php';

class Perfil {
    private $_idPerfil;
    private $_nombre;
    private $_arrModulos;

    public function __construct($nombre) {
        $this->_nombre = $nombre;
    }

    public function getIdPerfil()
    {
        return $this->_idPerfil; 
    }

    public function setIdPerfil($_idPerfil)
    {
        $this->_idPerfil = $_idPerfil;

        return $this;
    }

    public function getNombre()
    {
        return $this->_nombre; 
    }

    public function setNombre($_nombre)
    {
        $this->_nombre = $_nombre;

        return $this;
    }
    public function getModulos() {
        return $this->_arrModulos;
    }

    public static function obtenerTodos() {
        $sql = "SELECT id_perfil, nombre "
             . "FROM Perfil";

        $mysql = new MySQL();
        $datos = $mysql->consultar($sql);
        $mysql->desconectar();

        $listado = self::_generarListadoPerfiles($datos);

        return $listado;
    }
        private function _generarPerfil($datos) {
        $perfil = new Perfil($data['nombre']);
        $perfil->_idPerfil = $data['id_perfil'];
        $perfil->setModulos();
        return $perfil;
    }
    public static function obtenerPorId($id) {

        $sql = "SELECT * FROM perfil WHERE id_perfil =" . $id;


        $mysql = new MySQL();
        $datos = $mysql->consultar($sql);
        $mysql->desconectar();


        $registro = $datos->fetch_assoc();


        $perfil = new Perfil($registro['nombre']);
        $perfil->_idPerfil = $registro['id_perfil'] ;
        $perfil->_arrModulos = Modulo::obtenerModulosPorIdPerfil($perfil->_idPerfil);
        return $perfil;
    }


    private function _generarListadoPerfiles($datos) {
        $listado = array();
        while ($registro = $datos->fetch_assoc()) {
            $perfil = new Perfil($registro['nombre']);
            $perfil->_idPerfil = $registro['id_perfil'];
            $listado[] = $perfil;
        }
        return $listado;
    }

     public function guardar() {

        $sql = "INSERT INTO Perfil (id_perfil, nombre) "
             . "VALUES (NULL, '$this->_nombre')";

        $mysql = new MySQL();
        $idInsertado = $mysql->insertar($sql);

        $this->_idPerfil = $idInsertado;
        //echo $sql;
        //exit;
    }
    public function tieneModulo($idModulo) {
        $sql = "SELECT * FROM perfil_modulo "
             . "WHERE id_modulo = $idModulo "
             . "AND id_perfil = $this->_idPerfil";

        $mysql = new MySQL();
        $result = $mysql->consultar($sql);
        $mysql->desconectar();

        return $result->num_rows > 0;
    }


    public function actualizar() {
        $sql = "UPDATE perfil SET nombre = '$this->_nombre' WHERE id_perfil = $this->_idPerfil";
        $mysql = new MySQL();
        $mysql->actualizar($sql);
    }

    public function eliminarModulos() {
        $sql = "DELETE FROM perfil_modulo WHERE id_perfil = $this->_idPerfil";
        $mysql = new MySQL();
        $mysql->actualizar($sql);
    }
    
    public function eliminar(){

        $sql = "DELETE FROM Perfil WHERE id_perfil = $this->_idPerfil";
        $mysql = new MySQL();
        $mysql->eliminar($sql);
    }

    public function __ToString(){
        return $this->_nombre;
    }

    public function setModulos() {
        $this->_arrModulos = Modulo::obtenerPorIdPerfil($this->_idPerfil);
    }
}