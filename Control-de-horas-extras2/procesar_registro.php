<?php
session_start();
require_once "conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codigoEmpleado = $_POST["codigoEmpleado"];
    $contrasena = $_POST["contrasena"];

    $sql = "INSERT INTO Usuarios (codigoEmpleado, contrasena) VALUES ('$codigoEmpleado', '$contrasena')";

    if ($conexion->query($sql) === TRUE) {
        $mensaje = "Usuario registrado correctamente";
        header("location: login.php?mensaje=$mensaje");
    } else {
        $error = "Error al registrar usuario: " . $conexion->error;
        header("location: registro.php?error=$error");
    }
} else {
    header("location: registro.php");
}
?>
