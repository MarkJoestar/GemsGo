<?php  
require_once "../../../class/Perfil.php";
require_once '../../../class/PerfilModulo.php';

$nombre = $_POST['txtNombre'];
$listadoModulos = $_POST['cboModulos'];

if (empty(trim($nombre))) {
	echo "ERROR NOMBRE VACIO";
	header("location: ../alta.php");
	exit;
}

$perfil = new Perfil($nombre);

$perfil->guardar();

foreach ($listadoModulos as $modulo_id) {
	$perfilModulo = new PerfilModulo();
	$perfilModulo->setIdPerfil($perfil->getIdPerfil());
	$perfilModulo->setIdModulo($modulo_id);
	$perfilModulo->guardar();
}


highlight_string(var_export($perfil, true));
header('Location: ../listado.php?mensaje=1');