<?php

require_once "../../../class/Modulo.php";

$id = $_POST['txtId'];
$nombre = $_POST['txtNombre'];


if (empty(trim($nombre))) {
	echo "ERROR NOMBRE VACIO";
	header("location: ../modificar.php");
	exit;
}


$modulo = Modulo::obtenerPorId($id);
$modulo->setNombre($nombre);

$modulo->actualizar();

highlight_string(var_export($modulo, true));
header('Location: ../listado.php?mensaje=2');