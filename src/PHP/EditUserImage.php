<?php 

$conexion = mysqli_connect('localhost', 'root', '','astrodb') ;
session_start();

$Email = $_SESSION['Email'];
$Name = $_SESSION['Name'];
$ROL = $_SESSION['ROL'];

//caarpeta donde se va guardar
$carpet_images = "C:/xampp/htdocs/Astro-salesianum/img/";

//input del nombre y archivo de la imagen
$imagen = $_FILES['imagen']['name'];
    $imagen_tmp = $_FILES['imagen']['tmp_name'];

    //cmabio de nombre
    $imagen =  $Email."-".$Name."-".$ROL.".png";
    echo $imagen."<br>";

    //url ocmpleta con la imagen y el traslado
    $urlPlusImage = $carpet_images.$imagen;
    move_uploaded_file($imagen_tmp, $urlPlusImage);

    //INsert del nombre de la imagen
    echo $imagen;
    $query = "UPDATE `user` SET `ProfileImage`='$imagen' WHERE `Email` = '$Email'";

    mysqli_query($conexion, $query);
    echo "Si se hixo";

    header('Refresh: 5; URL=http://localhost/Astro-salesianum/src/ProfileUser.php');
   




?>