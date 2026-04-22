<?php
require_once 'MySQL.php';


class Usuario {

	protected $_idUsuario;
	protected $_username;
	protected $_password;
	protected $_nombre;
	protected $_apellido;
    protected $_email;
    protected $_celNumero;
    protected $_documento;
	protected $_estado;

	const ACTIVO = 1;

	public function __construct($nombre, $apellido) {
		$this->_nombre = $nombre;
		$this->_apellido = $apellido;
		$this->_estado = self::ACTIVO;
	}


    public function getIdUsuario()
    {
        return $this->_idUsuario;
    }

    public function getUsername()
    {
        return $this->_username;
    }


    public function setUsername($_username)
    {
        $this->_username = $_username;

        return $this;
    }

    public function getPassword()
    {
        return $this->_password;
    }


    public function setPassword($_password)
    {
        $this->_password = $_password;

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


    public function getApellido()
    {
        return $this->_apellido;
    }


    public function setApellido($_apellido)
    {
        $this->_apellido = $_apellido;

        return $this;
    }


    public function getEmail()
    {
        return $this->_email;
    }


    public function setEmail($_email)
    {
        $this->_email = $_email;

        return $this;
    }


    public function getCelNumero()
    {
        return $this->_celNumero;
    }


    public function setCelNumero($_celNumero)
    {
        $this->_celNumero = $_celNumero;

        return $this;
    }

    public function getDocumento()
    {
        return $this->_documento;
    }

    public function setDocumento($_documento)
    {
        $this->_documento = $_documento;

        return $this;
    }


    public function getEstado()
    {
        return $this->_estado;
    }

 
    public function setEstado($_estado)
    {
        $this->_estado = $_estado;

        return $this;
    }

    public function guardar() {
        $sql = "INSERT INTO usuario (id_usuario, username, password, nombre, apellido, cel_numero, documento, id_tipoUsuario) VALUES (NULL, '$this->_username', '$this->_password', '$this->_nombre', '$this->_apellido', '$this->_email', '$this->_celNumero', '$this->_celNumero', 2)";

        //echo $sql;
        $mysql = new MySQL();
        $idInsertado = $mysql->insertar($sql);

        $this->_idUsuario = $idInsertado;

    }

    public function actualizar() {
        $sql = "UPDATE usuarios SET username = '$this->_username', password = '$this->_password', nombre = '$this->_nombre', apellido = '$this->_apellido', cel_numero = '$this->_celNumero', documento = '$this->_documento' id_tipoUsuario = 2"
             . "WHERE id_usuario = $this->_idUsuario";
        $mysql = new MySQL();
        $mysql->actualizar($sql);
        //echo $sql;
        //exit;
    }

    public function eliminar() {
        $sql = "DELETE * FROM Persona WHERE id_persona = $this->_idPersona";

        $mysql = new MySQL();
        $mysql->eliminar($sql);
        echo $sql;
        exit;
    }

    public function __toString() {
    	return $this->_nombre . ", " . $this->_apellido;
    }    
}


?>