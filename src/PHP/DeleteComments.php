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
    include("./Wait.html");
    
    if($_SESSION['ROL']== 1){
        header('Refresh: 1; URL=http://localhost/Astro-salesianum/src/AdminComTable.php');
    }else{
        header('Refresh: 1; URL=http://localhost/Astro-salesianum/src/ProfileUser.php');
    }

    
} else {
    include("./Error.php");

    header('Refresh: 1; URL=http://localhost/Astro-salesianum/src/AdminComTable.php');
}

$conexion->close();
?>
