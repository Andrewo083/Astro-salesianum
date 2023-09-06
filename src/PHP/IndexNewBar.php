<?php


$State = "Active";

if($sql_all == true){
 $query = "SELECT * FROM `news` WHERE `State` = '$State' ORDER BY `date` DESC";
}else{
 //estoy seleccionando las noticias por Categoría y ordeno por la fecha.
 $query = "SELECT * FROM `news` WHERE `Category` = '$category' AND `State` = '$State' ORDER BY `date` DESC";
}

$result = mysqli_query($conexion, $query);
?>