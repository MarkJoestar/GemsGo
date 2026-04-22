<!DOCTYPE html>
<html>
<head>
	<title>Alta de Im&aacute;genes</title>
</head>
<body>

	<br><br>

	<div align="center">

		<form method="POST" action="guardar.php" enctype="multipart/form-data">
			Descripci&oacute;n: <input type="text" name="txtDescripcion">
			<br><br>

			Imagen: <input type="file" name="fileImagen[]" multiple>
			
			<br><br>
			<input type="submit" value="Guardar">
		</form>

	</div>

</body>
</html>