<?php 



$conexion = new mysqli("localhost", "root","","astrodb")or die(mysqli_error($mysqli));

$QueryNew ="SELECT * FROM `news` WHERE `id_news` = '$new'";
$ResultNew = mysqli_query($conexion, $QueryNew);
while ($RowNew = mysqli_fetch_array($ResultNew)){
    $NewIdNews = $RowNew['id_news'];
    $NewIdReporter = $RowNew['id_reporter'];
    $NewMainImage = $RowNew['main_image'];
    $NewPhotographer = $RowNew['photographer'];
    $NewHeadLine = $RowNew['headline'];
    $NewDropHead = $RowNew['drophead'];
    $NewDate = $RowNew['date'];
    $NewBodyOne = $RowNew['BodyOne'];
    $NewBodyTwo = $RowNew['BodyTwo'];
    $NewBodyThree = $RowNew['BodyThree'];
    $NewBodyFour = $RowNew['BodyFour'];
    $NewSchool = $RowNew['school'];
    $NewCategory = $RowNew['Category'];
}





?>