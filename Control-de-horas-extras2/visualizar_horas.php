<?php
session_start();
require_once "conexion.php";



$sql = "SELECT * FROM HorasExtras";
$resultado = $conexion->query($sql);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Horas Extras</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Horas Extras Registradas</h1>
        <table>
            <thead>
                <tr>
                    <th>Código Empleado</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Actividades Realizadas</th>
                    <th>Ticket</th>
                    <th>Fecha</th>
                    <th>Hora Inicio</th>
                    <th>Hora Fin</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($fila = $resultado->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $fila['codigoEmpleado']; ?></td>
                        <td><?php echo $fila['nombres']; ?></td>
                        <td><?php echo $fila['apellidos']; ?></td>
                        <td><?php echo $fila['actividades'];?></td>
                        <td><?php echo $fila['ticket'];?></td>
                        <td><?php echo $fila['fecha']; ?></td>
                        <td><?php echo $fila['horaInicio']; ?></td>
                        <td><?php echo $fila['horaFin']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <a href="index.php" class="btn-visualizar">Regresar</a>
    </div>
</body>
</html>
