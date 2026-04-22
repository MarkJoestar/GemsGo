<?php  
require_once "../../../class/Modulo.php";

$nombre = $_POST['txtNombre'];

if (empty(trim($nombre))) {
	echo "ERROR NOMBRE VACIO";
	header("location: ../alta.php");
	exit;
}


$modulo = new Modulo($nombre);

$modulo->guardar();


highlight_string(var_export($modulo, true));
header('Location: ../listado.php?mensaje=1');