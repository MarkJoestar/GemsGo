<?php

require_once "../../../class/Funcion.php";

$id = $_POST['txtId'];
$descripcion = $_POST['txtDescripcion'];


if (empty(trim($descripcion))) {
	echo "ERROR DESCRIPCION VACIO";
	header("location: ../alta.php");
	exit;
}


$funcion = Funcion::obtenerPorId($id);
$funcion->setDescripcion($descripcion);

$funcion->actualizar();

highlight_string(var_export($funcion, true));
header('Location: ../listado.php?mensaje=2');