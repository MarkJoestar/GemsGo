<?php
require_once 'MySQL.php';

class Modulo {
    private $_idModulo;
    private $_nombre;

    public function __construct($nombre) {
        $this->_nombre = $nombre;
    }

    public function getIdModulo()
    {
        return $this->_idModulo;
    }

    public function setIdModulo($_idModulo)
    {
        $this->_idModulo = $_idModulo;

        return $this;
    }

    public function getNombre ()
    {
        return $this->_nombre; 
    }

    public function setNombre($_nombre)
    {
        $this->_nombre = $_nombre;

        return $this;
    }

    public static function obtenerTodos() {
        $sql = "SELECT id_modulo, nombre "
             . "FROM Modulo";

        $mysql = new MySQL();
        $datos = $mysql->consultar($sql);
        $mysql->desconectar();

        $listado = self::_generarListadoModulos($datos);

        return $listado;
    }
        private function _generarModulo($datos) {
        $modulo = new Modulo($data['nombre']);
        $modulo->_idModulo = $data['id_modulo'] ;
        return $modulo;
    }
    public static function obtenerPorId($id) {

        $sql = "SELECT * FROM Modulo WHERE id_modulo =" . $id;


        $mysql = new MySQL();
        $datos = $mysql->consultar($sql);
        $mysql->desconectar();


        $registro = $datos->fetch_assoc();


        $modulo = new Modulo($registro['nombre']);
        $modulo->_idModulo = $registro['id_modulo'] ;
        return $modulo;
    }

    public static function obtenerModulosPorIdPerfil($idPerfil) {
        $sql = "SELECT modulo.id_modulo, modulo.nombre "
             . "FROM modulo "
             . "INNER JOIN perfil_modulo on perfil_modulo.id_modulo = modulo.id_modulo "
             . "INNER JOIN perfil on perfil.id_perfil = perfil_modulo.id_perfil "
             . "WHERE perfil.id_perfil = " . $idPerfil;

        $mysql = new MySQL();
        $datos = $mysql->consultar($sql);
        $mysql->desconectar();

        $listado = self::_generarListadoModulos($datos);
        return $listado;
    }


    private function _generarListadoModulos($datos) {
        $listado = array();
        while ($registro = $datos->fetch_assoc()) {
            $modulo = new Modulo($registro['nombre']);
            $modulo->_idModulo = $registro['id_modulo'];
            $listado[] = $modulo;
        }
        return $listado;
    }

     public function guardar() {

        $sql = "INSERT INTO Modulo (id_modulo, nombre) "
             . "VALUES (NULL, '$this->_nombre')";

        $mysql = new MySQL();
        $idInsertado = $mysql->insertar($sql);

        $this->_idModulo = $idInsertado;
        //echo $sql;
        //exit;
    }
    public function actualizar() {

        $sql = "UPDATE Modulo SET nombre = '$this->_nombre' WHERE id_modulo = $this->_idModulo";
        $mysql = new MySQL();
        $mysql->actualizar($sql);
        //echo $sql;
        //exit;
    }

    public function eliminar(){

        $sql = "DELETE FROM Modulo WHERE id_modulo = $this->_idModulo";
        $mysql = new MySQL();
        $mysql->eliminar($sql);
    }

    public function __ToString(){
        return $this->_nombre;
    }
}