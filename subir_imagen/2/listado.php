<?php

require_once "config.php";
require_once "class/MySQL.php";

$mysql = new MySQL();
$sql = "SELECT * FROM imagenes";

$datos = $mysql->consultar($sql);


?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div align="center">

		<table border="1">
			<tr>
				<th>ID</th>
				<th>Descripcion</th>
				<th>imagen</th>
			</tr>

			<?php while ($registro = $datos->fetch_assoc()): ?>
				
				<tr>
					<td><?php echo $registro['id_imagen'] ?></td>
					<td><?php echo $registro['descripcion'] ?></td>
					<td>

					   <img src="<?php echo DIR_IMAGENES ?>/<?php echo $registro['nombre'] ?>" width="150" height="100">

					</td>
				</tr>

			<?php endwhile ?>

		</table>

	</div>

</body>
</html>