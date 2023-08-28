<?php 

$conexion = mysqli_connect('localhost', 'root', '','astrodb') ;
session_start();

if($_SESSION['ROL'] == 1){
    header("Location: ./Error.html");
}else{


$id_reporter = $_POST['id_reporter'];
$headline =$_POST['headline'];
$photographer = $_POST['photographer'];
$id_news = $_POST['id_news'];


$carpet_images = "C:/xampp/htdocs/Astro-salesianum/img/";

$imagen = $_FILES['imagen']['name'];
    $imagen_tmp = $_FILES['imagen']['tmp_name'];

        $imagen =  "$headline-$id_reporter-fotografo-$photographer.png";

    $urlPlusImage = $carpet_images.$imagen;
    move_uploaded_file($imagen_tmp, $urlPlusImage);

 
    $query = "UPDATE `news` SET `main_image`='$imagen' WHERE `id_news` = '$id_news'";

    include("./Wait.html");
    header('Refresh: 2; URL=http://localhost/Astro-salesianum/src/Profile_Journalist.php');
}
?>