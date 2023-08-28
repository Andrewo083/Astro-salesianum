<?php 

$conexion = mysqli_connect('localhost', 'root', '','astrodb') ;
session_start();

if($_SESSION['ROL'] == 1){
    header("Location: ./Error.html");
}else{

$Email = $_SESSION['Email'];
$Name = $_SESSION['Name'];

$id_news = $_POST['id_news'];
$ROL = $_SESSION['ROL'];

$carpet_images = "C:/xampp/htdocs/Astro-salesianum/img/";

$imagen = $_FILES['imagen']['name'];
    $imagen_tmp = $_FILES['imagen']['tmp_name'];

    $imagen =  $Email."-".$Name."-".$ROL.".png";
    echo $imagen."<br>";

    $urlPlusImage = $carpet_images.$imagen;
    move_uploaded_file($imagen_tmp, $urlPlusImage);

    echo $imagen;
    $query = "UPDATE `news` SET `main_image`='$imagen' WHERE `id_news` = '$id_news'";
}
?>