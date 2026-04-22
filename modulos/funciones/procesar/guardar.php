<?php  
require_once "../../../class/Funcion.php";

$descripcion = $_POST['txtDescripcion'];

if (empty(trim($descripcion))) {
	echo "ERROR DESCRIPCION VACIO";
	header("location: ../alta.php");
	exit;
}


$funcion = new Funcion($descripcion);

$funcion->guardar();


highlight_string(var_export($funcion, true));
header('Location: ../listado.php?mensaje=1');