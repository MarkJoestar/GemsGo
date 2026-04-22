<?php

require_once "../../../class/Perfil.php";


$id = $_GET['id'];

$perfil = Perfil::obtenerPorId($id);

$perfil->eliminar();

highlight_string(var_export($perfil, true));
header('Location: ../listado.php?mensaje=3');

?>