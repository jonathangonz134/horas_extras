<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuarios</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Registrar Nuevo Usuario</h1>
        <form action="procesar_registro.php" method="post">
            <label for="codigoEmpleado">Código de Empleado:</label>
            <input type="text" id="codigoEmpleado" name="codigoEmpleado" required>

            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" required>

            <input type="submit" value="Registrar Usuario">
            <a href="login.php"class="btn-registrar">Regresar</a>
        </form>
    </div>
</body>
</html>
