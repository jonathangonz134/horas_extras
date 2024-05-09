<?php
session_start();
require_once "conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codigoEmpleado = $_POST["codigoEmpleado"];
    $contrasena = $_POST["contrasena"];

    $sql = "SELECT * FROM Usuarios WHERE codigoEmpleado = '$codigoEmpleado' AND contrasena = '$contrasena'";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows == 1) {
        $_SESSION["codigoEmpleado"] = $codigoEmpleado;
        header("location: index.php");
    } else {
        $error = "Código de empleado o contraseña incorrectos";
        header("location: login.php?error=$error");
    }
} else {
    header("location: login.php");
}
?>
