<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesion</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Bienvenidos al Control de Horas Extras</h1>
        <form action="procesar_login.php" method="post">
            <label for="codigoEmpleado">Código de Empleado:</label>
            <input type="text" id="codigoEmpleado" name="codigoEmpleado" required>

            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" required>

            <input type="submit" value="Iniciar Sesión">
        </form>
        <a href="registro.php" class="btn-registrar">Registrar Usuario</a>
    </div>
</body>
</html>
