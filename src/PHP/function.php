<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = "usuario";
$password = "contraseña";
$dbname = "nombre_base_datos";

// Función para establecer la conexión a la base de datos
function conectarBD() {
    global $servername, $username, $password, $dbname;
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Error en la conexión: " . $conn->connect_error);
    }
    return $conn;
}

// Función para cerrar la conexión a la base de datos
function cerrarBD($conn) {
    $conn->close();
}

// Función para eliminar un registro
function eliminarRegistro($id) {
    $conn = conectarBD();
    $sql = "DELETE FROM tabla WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        cerrarBD($conn);
        return true;
    } else {
        cerrarBD($conn);
        return false;
    }
}

// Función para insertar un registro
function insertarRegistro($nombre, $edad, $email) {
    $conn = conectarBD();
    $sql = "INSERT INTO tabla (nombre, edad, email) VALUES ('$nombre', $edad, '$email')";
    if ($conn->query($sql) === TRUE) {
        cerrarBD($conn);
        return true;
    } else {
        cerrarBD($conn);
        return false;
    }
}

// Función para obtener todos los registros
function obtenerRegistros() {
    $conn = conectarBD();
    $sql = "SELECT * FROM tabla";
    $result = $conn->query($sql);
    $registros = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $registros[] = $row;
        }
    }
    cerrarBD($conn);
    return $registros;
}
?>
