<?php  
require_once "../../../config.php";
require_once "../../../class/Usuario.php";
//require_once "../../../class/FotoPerfil.php";


$username = $_POST['txtUsername'];
$password = $_POST['txtPassword'];
$nombre = $_POST['txtNombre'];
$apellido = $_POST['txtApellido'];
$fechaNacimiento = $_POST['txtFechaNacimiento'];
$tipoDocumento = $_POST['cboTipoDocumento'];
$numeroDocumento = $_POST['txtNumeroDocumento'];
$imagen = $_FILES['fileImagen'];


if (empty(trim($username))) {
	echo "ERROR USUARIO VACIO";
	header("location: ../alta.php");
	exit;
}
if (empty(trim($password))) {
	echo "ERROR PASSWORD VACIO";
	header("location: ../alta.php");
	exit;
}
if (empty(trim($nombre))) {
	echo "ERROR NOMBRE VACIO";
	header("location: ../alta.php");
	exit;
}

if (empty(trim($apellido))) {
	echo "ERROR APELLIDO VACIO";
	header("location: ../alta.php");
	exit;
}

if (strlen(trim($nombre)) < 3) {
	echo"El nombre debe contener al menos 3 caracteres";
	header("location: ../alta.php");
	exit;
}
if (empty(trim($fechaNacimiento))) {
	echo "ERROR FECHA DE NACIMIENO VACIO";
	header("location: ../alta.php");
	exit;
}
if (empty(trim($numeroDocumento))) {
	echo "ERROR NUMERO DE DOCUMENTO VACIO";
	header("location: ../alta.php");
	exit;
}

/*if ((int) $tipoDocumento == 0) {
	echo"Debe seleccionar el un tipo de documento";
	header("location: ../alta.php");
	exit;
}*/

$extension = pathinfo($imagen['name'], PATHINFO_EXTENSION);

$nombreSinEspacios = str_replace(" ", "_", $imagen['name']);

$fechaHora = date("dmYHis");

$nombreImagen = $fechaHora . "_" . $nombreSinEspacios;

$rutaImagen = "../../../imagenes/" . $nombreImagen;

move_uploaded_file($imagen['tmp_name'], $rutaImagen);

$usuario = new Usuario($nombre, $apellido);
$usuario->setUsername($username);
$usuario->setPassword($password);
$usuario->setFechaNacimiento($fechaNacimiento);
$usuario->setIdTipoDocumento($tipoDocumento);
$usuario->setNumeroDocumento($numeroDocumento);
$usuario->setImagenPerfil($nombreImagen);
$usuario->guardar();

//highlight_string(var_export($usuario, true));
header('Location: ../listado.php?mensaje=1');



?>