<?php 

$conexion = mysqli_connect('localhost', 'root', '','astrodb') ;
session_start();

if($_SESSION['ROL'] == 1){
    header("Location: ./Error.html");
}else{

$Email = $_SESSION['Email'];
$Name = $_SESSION['Name'];
$id_new = $_POST['id_new'];
$headline =$_POST['headline'];

$id_news = $_POST['id_news'];
$ROL = $_SESSION['ROL'];

$carpet_images = "C:/xampp/htdocs/Astro-salesianum/img/";

$imagen = $_FILES['imagen']['name'];
    $imagen_tmp = $_FILES['imagen']['tmp_name'];

    $imagen =  $Email."-".$Name."-".$ROL.".png";


    $urlPlusImage = $carpet_images.$imagen;
    move_uploaded_file($imagen_tmp, $urlPlusImage);

 
    $query = "UPDATE `news` SET `main_image`='$imagen' WHERE `id_news` = '$id_news'";

    include("./Wait.html");
    header('Refresh: 2; URL=http://localhost/Astro-salesianum/src/Profile_Journalist.php');
}
?>