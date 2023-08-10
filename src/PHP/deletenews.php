<?php 

$conexion = mysqli_connect('localhost', 'root', '','astrodb')or die(mysqli_error($mysqli));

          $id_news = $_GET['new'];
    echo $id_news;
    $query = " DELETE FROM `news` WHERE `id_news`= '$id_news' ";

    mysqli_query($conexion, $query);
    header('Refresh: 3; URL=http://localhost/Astro-salesianum/src/newindex.php');
    //echo "Se hizo";



?>