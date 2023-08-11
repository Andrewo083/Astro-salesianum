<?php



include('conexion.php');

$conexion = new mysqli($host,$user,$password,$bd);

if(!$conexion){
    die("Error en la conexion".mysqli_connect_error());
}

$ID=$_GET['ID'];

$sql="DELETE FROM `comments` WHERE id_comment = $ID";

if(mysqli_query($conexion,$sql)){
    echo "Registro eliminado exitosamente";
    header("Refresh:2; http://localhost/Astro-salesianum/src/TableComments.php");
}else{
    echo "Error al tratar de eliminar datos";
}



mysqli_close($conexion);

?>