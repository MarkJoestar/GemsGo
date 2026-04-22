<?php

require_once "../../../class/Usuario.php";

$id = $_GET['id'];

$usuario = Usuario::obtenerPorId($id);

$usuario->eliminar();

header('Location: listado.php?mensaje=3');

?>