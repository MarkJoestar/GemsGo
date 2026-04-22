<div align='center'>
        <form method='GET'>
            Desde: <input type='date' name='txtFechaDesde'>
            &nbsp;&nbsp;
            Hasta: <input type='date' name='txtFechaHasta'>
            <br><br>
            Empleado: <select name='cboEmpleados'>
                <option value="0">Seleccionar</option>
                <?php foreach ($listadoEmpleado as $empleado): ?>
				    <option value="<?php echo $empleado->getIdEmpleado(); ?>">
                        <?php echo $empleado; ?>
                    </option>
                    <?php endforeach ?>
                </select>
            <input type='submit' value='Consultar'>
        </form>

        <?php if (!is_null($datos)): ?>
            <table border=1 width="80%">
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Hora de Entrada</th>
                    <th>Hora de Salida</th>
                    <th>Horas Trabajadas<th>
                </tr>
                <?php while($row = $datos->fetch_assoc()): ?>
                    <tr>
                    <td><?php echo $row['nombre'] ?></td>
                    <td><?php echo $row['apellido'] ?></td>
                    <td><?php echo $row['fecha_hora_ingreso'] ?></td>
                    <td><?php echo $row['fecha_hora_salida'] ?></td>
                    <td><?php echo $row['timediff'] ?></td>
                </tr>
                <?php endwhile ?>
            </table>
        <?php endif ?>
    </div>