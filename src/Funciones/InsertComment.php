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
    echo $Comment;

    if($_SESSION['ROL']== 3){
        $id_user = $_SESSION['Email'];
        echo $id_user;
    }else if($_SESSION['ROL']== 2){
        $id_reporter = $_SESSION['Email'];
        echo $id_reporter;
    }


     // Asegúrate de obtener el valor correcto del usuario
    $id_new = $_GET['new']; 
    echo $id_new;   // Asegúrate de obtener el valor correcto de la noticia
    $date = date('Y-m-d'); 

    //HORA GTM-6
    date_default_timezone_set('America/Mexico_City');
    echo $date;
    $hour = date("H:i:");
    echo $hour;
    $state = "active";        // Obtén la fecha actual

    // Realiza una consulta para verificar la existencia del valor en la tabla news
    $checkNewsQuery = "SELECT id_news FROM news WHERE id_news = $id_new";
    $result = $conexion->query($checkNewsQuery);

    if ($result->num_rows === 0) {
        echo "Error: Valor de id_new no válido.";
        // Puedes decidir si detener aquí la ejecución o manejar el error de otra manera.
    } else {
        // Continuar con la inserción del comentario
        if(($_SESSION['ROL']== 3) || ($_SESSION['ROL']==1) ){
            $sql = "INSERT INTO `comments`(`id_user`, `id_new`, `comment`, `date`, `State`, `hour`) VALUES ('$id_user','$id_new','$Comment','$date', '$state', '$hour')";
        }else if($_SESSION['ROL']== 2){
            $sql = "INSERT INTO `comments`(`id_reporter`, `id_new`, `comment`, `date`, `State`, `hour`) VALUES ('$id_reporter','$id_new','$Comment','$date', '$state', '$hour')";
        }

       
        if ($conexion->query($sql)) {
            echo "Datos insertados correctamente";
         header('Refresh: 2; URL=http://localhost/Astro-salesianum/src/NewsMain.php?new='.urlencode($id_new));
        } else {
            echo "Error: " . $conexion->error;
        }
    }

    $conexion->close();
}
// ?>


