<?php

require_once "../../../class/Usuario.php";


$username = $_POST['txtUsername'];
$password = $_POST['txtPassword'];


$usuario = Usuario::login($username, $password);

//highlight_string(var_export($usuario, true));
//exit;

if ($usuario->estaLogueado()) {
	session_start();
	$_SESSION['usuario'] = $usuario;
	header("location: ../../../dashboard.php");
} else {
	header("location: ../../../formulario_login.php");
}
