<?php
include('conexion.php');

$conexion = new mysqli($host,$user,$password,$bd);

if(!$conexion){
    die("Error en la conexion" . mysqli_connect_error());
}

$Comentario=$_POST['Comentario'];

$sql="INSERT INTO `comentario`(`ID`, `Comentario`) VALUES ('[value-1]','$Comentario')";

if($conexion->query($sql)){
    echo "Datos insertados correctamente";
}else{
    echo "Error en la insercion de datos";
}


?>