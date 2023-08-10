<?php
session_start();

if(isset($_SESSION['Name']))


if(isset($_SESSION['Email'])){
    include('conexion.php');


    $conexion = new mysqli($host, $user, $password, $bd);

    if (!$conexion) {
        die("Error en la conexion" . mysqli_connect_errno());
    }

    $_SESSION['Name'];
    $Comment = $_POST['Comment'];
    $id_user = $_SESSION['Email'];  // Asegúrate de obtener el valor correcto del usuario
    $id_new = $_GET['new'];    // Asegúrate de obtener el valor correcto de la noticia
    $date = date('Y-m-d');         // Obtén la fecha actual

    // Realiza una consulta para verificar la existencia del valor en la tabla news
    $checkNewsQuery = "SELECT id_news FROM news WHERE id_news = $id_new";
    $result = $conexion->query($checkNewsQuery);

    if ($result->num_rows === 0) {
        echo "Error: Valor de id_new no válido.";
        // Puedes decidir si detener aquí la ejecución o manejar el error de otra manera.
    } else {
        // Continuar con la inserción del comentario
        $sql = "INSERT INTO `comments`(`id_user`, `id_new`, `comment`, `date`) VALUES ('$id_user','$id_new','$Comment','$date')";
        if ($conexion->query($sql)) {
            echo "Datos insertados correctamente";
            // header('Refresh: 2; URL=http://localhost/Astro-salesianum/src/tableusu.php');
        } else {
            echo "Error: " . $conexion->error;
        }
    }

    $conexion->close();
}
// ?>


