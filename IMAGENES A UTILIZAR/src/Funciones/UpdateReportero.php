<?php
// UpdateReportero.php

include('./conexion.php');

$conexion = new mysqli($host, $user, $password, $bd);

if (!$conexion) {
    die("Error en la conexión" . mysqli_connect_error());
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
    $imagen = $_POST['Imagen'];

    // Consulta SQL para verificar si el correo electrónico ya está registrado en la tabla reporter
    $sql_check_reporter = "SELECT COUNT(*) AS count FROM `reporter` WHERE Email='$email' AND Email != '$reportero_id'";
    $result_check_reporter = $conexion->query($sql_check_reporter);

    // Consulta SQL para verificar si el correo electrónico ya está registrado en la tabla user
    $sql_check_user = "SELECT COUNT(*) AS count FROM `user` WHERE Email='$email'";
    $result_check_user = $conexion->query($sql_check_user);

    if ($result_check_reporter && $result_check_user &&
        $result_check_reporter->num_rows > 0 && $result_check_user->num_rows > 0) {
        $row_reporter = $result_check_reporter->fetch_assoc();
        $row_user = $result_check_user->fetch_assoc();
        $count_reporter = $row_reporter['count'];
        $count_user = $row_user['count'];

        if ($count_reporter > 0 || $count_user > 0) {
            // El correo electrónico ya está registrado en otra tabla
            echo "El correo ya ha sido utilizado";
            header('Refresh: 2; URL=http://localhost/Astro-salesianum/src/tableusu.php');
        } else {
            // Consulta SQL para actualizar el registro del reportero
            $sql = "UPDATE `reporter` SET ProfileImage='$imagen', Email='$email', Password='$password', Name='$name', LastName='$lastName', PhoneNumber='$phoneNumber' WHERE Email='$reportero_id'";

            if ($conexion->query($sql) === TRUE) {
                echo "Datos registrados exitosamente";
                header('Refresh: 2; URL=http://localhost/Astro-salesianum/src/tableusu.php');
            } else {
                echo "Error al actualizar el registro: " . $conexion->error;
            }
        }
    }
}
?>
