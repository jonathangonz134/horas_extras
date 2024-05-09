<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Horas Extras</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container1">
        <h1>Control de Horas Extras</h1>
        <form action="guardar_horas.php" method="post">
            <label for="codigoEmpleado">Código de Empleado:</label>
            <input type="text" id="codigoEmpleado" name="codigoEmpleado" required>

            <label for="nombres">Nombres:</label>
            <input type="text" id="nombres" name="nombres" required>

            <label for="apellidos">Apellidos:</label>
            <input type="text" id="apellidos" name="apellidos" required>

            <label for="actividades">Actividades Realizadas:</label>
            <input type="text" id="actividades" name="actividades" require>

            <label for="ticket">Numero de Ticket:</label>
            <input type="text" id="ticket" name="ticket" require>

            <label for="fecha">Fecha de las Horas Extras:</label>
            <input type="date" id="fecha" name="fecha" required>

            <label for="horaInicio">Hora de Inicio:</label>
            <input type="time" id="horaInicio" name="horaInicio" required>

            <label for="horaFin">Hora que se Finaliza:</label>
            <input type="time" id="horaFin" name="horaFin" required>

            

            <!-- Aquí puedes agregar más campos según tus necesidades -->

            <input type="submit" value="Guardar Horas Extras">
        </form>
        <a href="visualizar_horas.php" class="btn-visualizar">Visualizar Horas Extras</a>
        <a href="login.php" class="btn-visualizar">SALIR</a>
        <!-- Resto del contenido -->
    </div>

</body>
</html>
