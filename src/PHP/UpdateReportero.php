<?php
// UpdateReportero.php

include('./conexion.php');

$conexion = new mysqli($host, $user, $password, $bd);

if (!$conexion) {
    die("Error en la conexión" . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el ID del reportero desde el formulario
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    $name = $_POST['Name'];
    $lastname = $_POST['LastName'];
    $phonenumber = $_POST['PhoneNumber'];
    
    $queryVerif = "SELECT * FROM `reporter` WHERE `Email`  = '$email'";
    $resultVerif = mysqli_query($conexion, $queryVerif);
    $row = mysqli_fetch_assoc($resultVerif);
    
    $updateNeeded = false;
    if (
        $email != $row['Email'] ||
        $password != $row['Password'] ||
        $name != $row['Name'] ||
        $lastname != $row['LastName'] ||
        $phonenumber != $row['PhoneNumber'] 
    ) {
        $updateNeeded = true;
    } else {
        $updateNeeded = false;
    }
    
    if ($updateNeeded == false) {
        echo "sin cambios";
    } else {
        $reportero_id = $_POST['ID'];

        // Obtener los otros datos del formulario
        $email = $_POST['Email'];
        $password = $_POST['Password'];
        $name = $_POST['Name'];
        $lastName = $_POST['LastName'];
        $phoneNumber = $_POST['PhoneNumber'];
        $imagen = $_POST['Imagen'];

        // Verificar si el correo electrónico contiene un punto en el dominio
        if (strpos($email, ".") !== false && strrpos($email, ".") > strpos($email, "@")) {
            // Verificar si la contraseña cumple con los requisitos
            if (strlen($password) >= 8 && preg_match("/[A-Z]/", $password) && preg_match("/[!@#$%^&*()\-_=+{};:,<.>]/", $password)) {
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
                        header('Refresh: 1; URL=http://localhost/Astro-salesianum/src/AdminJourTable.php');
                    } else {
                        // Consulta SQL para actualizar el registro del reportero
                        $sql = "UPDATE `reporter` SET ProfileImage='$imagen', Email='$email', Password='$password', Name='$name', LastName='$lastName', PhoneNumber='$phoneNumber' WHERE Email='$reportero_id'";

                        if ($conexion->query($sql) === TRUE) {
                            include("./Wait.html");
                            header('Refresh: 1; URL=http://localhost/Astro-salesianum/src/AdminJourTable.php');
                        } else {
                            include("./Error.php");
                            header('Refresh: 1; URL=http://localhost/Astro-salesianum/src/AdminJourTable.php');
                        }
                    }
                }
            } else {
                header("Location: ../Error.php");
            }
        } else {
            header("Location: ../Error.php");
        }
    }
}
?>
