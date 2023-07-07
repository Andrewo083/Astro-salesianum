<?php

include('conexion.php');

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Email = $_POST["Email"];
    $Name = $_POST["Name"];
    $LastName = $_POST["LastName"];
    $password = $_POST["password"];
    $phoneNumber = $_POST["PhoneNumber"];
    $Rol = 3;

    // Consulta para verificar si el correo electrónico ya existe
    $sqlCheckEmail = "SELECT COUNT(*) AS count FROM user WHERE Email = ?";
    $statementCheckEmail = $conexion->prepare($sqlCheckEmail);
    $statementCheckEmail->bind_param('s', $Email);
    $statementCheckEmail->execute();
    $resultCheckEmail = $statementCheckEmail->get_result()->fetch_assoc();

    if ($resultCheckEmail['count'] > 0) {
        // El correo electrónico ya existe en la tabla
        echo "Este correo ya ha sido utilizado.";
        header('Refresh:2;URL=http://localhost/Astro-salesianum/src/Registro.html');
    } else {
        // El correo electrónico no existe en la tabla, insertar los datos
        $sqlInsert = "INSERT INTO `user`(`Email`, `Name`, `LastName`, `Password`, `PhoneNumber`, `ROL`) VALUES (?, ?, ?, ?, ?, ?)";
        $statementInsert = $conexion->prepare($sqlInsert);
        $statementInsert->bind_param('sssssi', $Email, $Name, $LastName, $password, $phoneNumber, $Rol);

        if ($statementInsert->execute()) {
            echo "Datos insertados correctamente.";
            header('Refresh:3;URL=http://localhost/Astro-salesianum/src/Login.html');
        } else {
            echo "Error al insertar los datos.";
        }
    }

    // Cerrar la conexión
    $statementCheckEmail->close();
    if (isset($statementInsert)) {
        $statementInsert->close();
    }
    $conexion->close();
}
