<?php
// Conectar a la base de datos
$conexion = new mysqli("localhost", "root", "", "controlhorasextras");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Recibir datos del formulario
$codigoEmpleado = $_POST['codigoEmpleado'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$actividades = $_POST['actividades'];
$ticket = $_POST['ticket'];
$fecha = $_POST['fecha'];
$horaInicio = $_POST['horaInicio'];
$horaFin = $_POST['horaFin'];


// Insertar datos en la base de datos
$sql = "INSERT INTO horasextras (codigoEmpleado, nombres, apellidos, actividades, ticket, fecha, horaInicio, horaFin)
        VALUES ('$codigoEmpleado', '$nombres', '$apellidos', '$actividades', '$ticket', '$fecha', '$horaInicio', '$horaFin')";

if ($conexion->query($sql) === TRUE) {
    echo '<script>alert("Registros de horas guardados correctamente"); window.location.href = "index.php";</script>';
    
} else {
    echo "Error al guardar las horas extras: " . $conexion->error;
}

$conexion->close();
?>
