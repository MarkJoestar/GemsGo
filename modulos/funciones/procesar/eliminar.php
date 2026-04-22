<?php

require_once "../../../class/Funcion.php";


$id = $_GET['id'];

$funcion = Funcion::obtenerPorId($id);

$funcion->eliminar();

highlight_string(var_export($funcion, true));
header('Location: ../listado.php?mensaje=3');

?>