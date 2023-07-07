<?php

session_start();
$Email = $_POST['Email'];
$Contraseña = $_POST['password'];


$conexion = mysqli_connect("localhost", 'root', "", "user");

$Email = mysqli_real_escape_string($conexion, $Email); // Escapar caracteres especiales en el Email
$Contraseña = mysqli_real_escape_string($conexion, $Contraseña); // Escapar caracteres especiales en la contraseña

$sqlUsuario = "SELECT * FROM user WHERE Email = '$Email' AND Password = '$Contraseña'";
$resultadoUsuario = mysqli_query($conexion, $sqlUsuario);

$sqlReportero = "SELECT * FROM reporteroprueba WHERE Email = '$Email' AND Password = '$Contraseña'";
$resultadoReportero = mysqli_query($conexion, $sqlReportero);

if (mysqli_num_rows($resultadoUsuario) > 0) {
    // Usuario encontrado en la tabla "usuario"
    $rowUsuario = mysqli_fetch_assoc($resultadoUsuario);
    $rol = $rowUsuario['Rol'];

    // Redirigir según el rol del usuario
    if ($rol == 3) {
        $_SESSION['Email'] = $Email;
        header("Location: ../index.html");
        exit();
    }
} elseif (mysqli_num_rows($resultadoReportero) > 0) {
    // Reportero encontrado en la tabla "reporteros"
    $rowReportero = mysqli_fetch_assoc($resultadoReportero);
    $rol = $rowReportero['Rol'];

    // Redirigir según el rol del reportero
    if ($rol == 2) {
        $_SESSION['Email'] = $Email;
        header("Location: ../SeccionReportero.html");
        exit();
    }
}

echo "Error: Rol desconocido";


?>
