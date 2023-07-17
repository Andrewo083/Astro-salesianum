<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = "usuario";
$password = "contraseña";
$dbname = "astrodb";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

// Datos a insertar en la tabla
$nombre = "Ejemplo";
$edad = 25;
$email = "ejemplo@example.com";

// Consulta SQL de inserción
$sql = "INSERT INTO tabla (nombre, edad, email) VALUES ('$nombre', $edad, '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Registro insertado correctamente.";
} else {
    echo "Error al insertar el registro: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
