<?php
// UpdateReportero.php

include('./conexion.php');

$conexion = new mysqli($host, $user, $password, $bd);

if (!$conexion) {
    die("Error en la conexion" . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el ID del reportero desde el formulario
    $reportero_id = $_POST['ID'];

    // Obtener los otros datos del formulario
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    $name = $_POST['Name'];
    $lastName = $_POST['LastName'];
    $phoneNumber = $_POST['PhoneNumber'];

    // Consulta SQL para actualizar el registro del reportero
    $sql = "UPDATE `reporter` SET Email='$email', Password='$password', Name='$name', LastName='$lastName', PhoneNumber='$phoneNumber' WHERE Email='$reportero_id'";

    if ($conexion->query($sql) === TRUE) {
        echo "Registro actualizado correctamente";
        header('Refresh: 3; URL=http://localhost/Astro-salesianum/src/tableusu.php');
    } else {
        echo "Error al actualizar el registro: " . $conexion->error;
    }
}
?>
