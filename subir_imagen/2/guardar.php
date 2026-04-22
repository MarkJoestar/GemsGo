<?php

require_once "config.php";
require_once "class/MySQL.php";


$descripcion = $_POST['txtDescripcion'];
$imagenes = $_FILES['fileImagen'];

//highlight_string(var_export($imagenes, true));
//exit;

$arrNames = $imagenes['name'];
$arrTmpNames = $imagenes['tmp_name'];

foreach ($arrNames as $key => $name) {
	//echo $key . ": " . $name . " --- " . $arrTmpNames[$key];
	//echo "<br><br>";

	if (empty($name)) {
		break;
	}

	$nombreImagen = subir($name, $arrTmpNames[$key]);
	guardar($nombreImagen, $descripcion);
}

//highlight_string(var_export($arrNames, true));
//echo "<br><br>";
//exit;


function subir($name, $tmpName) {
	$nombreSinEspacios = str_replace(" ", "_", $name);
	$fechaHora = date("dmYHis");
	$nombreImagen = $fechaHora . "_" . $nombreSinEspacios;
	$rutaImagen = DIR_IMAGENES . $nombreImagen;

	move_uploaded_file($tmpName, $rutaImagen);

	return $nombreImagen;
}

function guardar($nombreImagen, $descripcion) {
	$mysql = new MySQL();
	$sql = "INSERT INTO imagenes (id_imagen, nombre, descripcion) "
	     . "VALUES (NULL, '$nombreImagen', '$descripcion')";

	$mysql->insertar($sql);
}



?>