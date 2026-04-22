<?php

require_once 'MySQL.php';

class FotoPerfil {
	
	private $_idFotoPerfil;
	private $_foto;
	private $_idUsuario;

    /**
     * @return mixed
     */
    public function getIdFotoPerfil()
    {
        return $this->_idFotoPerfil;
    }

    /**
     * @param mixed $_idFotoPerfil
     *
     * @return self
     */
    public function setIdFotoPerfil($_idFotoPerfil)
    {
        $this->_idFotoPerfil = $_idFotoPerfil;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFoto()
    {
        return $this->_foto;
    }

    /**
     * @param mixed $_foto
     *
     * @return self
     */
    public function setFoto($_foto)
    {
        $this->_foto = $_foto;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdUsuario()
    {
        return $this->_idUsuario;
    }

    /**
     * @param mixed $_idUsuario
     *
     * @return self
     */
    public function setIdUsuario($_idUsuario)
    {
        $this->_idUsuario = $_idUsuario;

        return $this;
    }

    public function guardar() {
        $sql = "INSERT INTO FotoUsuario (id_foto_usuario, foto, id_usuario) VALUES (NULL, '$this->_foto', '$this->_idUsuario')";

        $mysql = new MySQL();
        $idInsertado = $mysql->insertar($sql);
        $mysql->desconectar();

        $this->_idFotoPerfil = $idInsertado;
    }

    public function actualizar() {
        $sql = "UPDATE FotoUsuario SET foto = '$this->_foto', foto = '$this->_foto' WHERE id_foto_usuario = '$this->_idFotoPerfil'";

        $mysql = new MySQL();
        $mysql->actualizar($sql);
        $mysql->desconectar();
    }

    public function obtenerPorIdUsuario($idUsuario) {
    	$sql = "SELECT * FROM FotoUsuario WHERE id_usuario = " . $idUsuario;

        $mysql = new MySQL();
        $datos = $mysql->consultar($sql);
        $mysql->desconectar();

        $registro = $datos->fetch_assoc();

        $fotoPerfil = self::_generarFotoPerfil($registro);
        return $fotoPerfil;
    }

    private function _generarFotoPerfil($registro) {

        $fotoPerfil = new FotoPerfil($registro['foto']);
        $fotoPerfil->_idUsuario = $registro['id_usuario'];
        $fotoPerfil->_idFotoPerfil = $registro['id_foto_usuario'];

        return $fotoPerfil;
    }
}

?>