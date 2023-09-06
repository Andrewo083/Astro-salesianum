<?php 
session_start();

if($_SESSION['ROL']==1){
    $conexion = mysqli_connect('localhost', 'root', '','astrodb')or die(mysqli_error($mysqli));

          $id_news = $_GET['new'];
    
    $query = " DELETE FROM `news` WHERE `id_news`= '$id_news' ";

    mysqli_query($conexion, $query);
    include("./Wait.html");
    header('Refresh: 1; URL=http://localhost/Astro-salesianum/src/AdminNewsTable.php');

}elseif($_SESSION['ROL']==2){
       $conexion = mysqli_connect('localhost', 'root', '','astrodb')or die(mysqli_error($mysqli));

          $id_news = $_GET['new'];
   
    $query = " DELETE FROM `news` WHERE `id_news`= '$id_news' ";

    mysqli_query($conexion, $query);
    include("./Wait.html");
    header('Refresh: 1; URL=http://localhost/Astro-salesianum/src/Profile_Journalist.php');
}








?>