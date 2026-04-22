<?php

require_once "config.php";
require_once "class/MySQL.php";


$descipcion = $_POST['txtDescripcion'];
$imagen = $_FILES['fileImagen'];

//highlight_string(var_export($imagen, true));
//exit;


//$tmp = explode(".", $imagen['name']);
//$extension = array_pop($tmp);
//echo $extension;
//exit;

$extension = pathinfo($imagen['name'], PATHINFO_EXTENSION);

// sacamos los espacios en el nombre de la imagen
$nombreSinEspacios = str_replace(" ", "_", $imagen['name']);


$fechaHora = date("dmYHis");
$nombreImagen = $fechaHora . "_" . $nombreSinEspacios;

$rutaImagen = DIR_IMAGENES . $nombreImagen;

move_uploaded_file($imagen['tmp_name'], $rutaImagen);


$mysql = new MySQL();
$sql = "INSERT INTO imagenes (id_imagen, nombre, descripcion) "
     . "VALUES (NULL, '$nombreImagen', '$descipcion')";

$mysql->insertar($sql);




?>