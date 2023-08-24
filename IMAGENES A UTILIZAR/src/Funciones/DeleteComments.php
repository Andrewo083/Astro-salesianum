<?php

session_start();

include('conexion.php');

$conexion = new mysqli($host, $user, $password, $bd);

if (!$conexion) {
    die("Error en la conexion" . mysqli_connect_errno());
}

$ID = $_GET['ID'];

$SQL = "DELETE FROM `comments` WHERE id_comment = $ID";

if ($conexion->query($SQL)) {
    echo "Comentario Eliminado Exitosamente";
    
    if($_SESSION['ROL']== 1){
        header('Refresh: 2; URL=http://localhost/Astro-salesianum/src/TableComments.php');
    }else{
        header('Refresh: 2; URL=http://localhost/Astro-salesianum/src/ProfileUser.php');
    }

    
} else {
    echo "Ha ocurrido un error al eliminar el comentario: " . $conexion->error;
    header('Refresh: 2; URL=http://localhost/Astro-salesianum/src/TableComments.php');
}

$conexion->close();
?>
