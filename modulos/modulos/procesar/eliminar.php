<?php

require_once "../../../class/Modulo.php";


$id = $_GET['id'];

$modulo = Modulo::obtenerPorId($id);

$modulo->eliminar();

highlight_string(var_export($modulo, true));
header('Location: ../listado.php?mensaje=3');

?>