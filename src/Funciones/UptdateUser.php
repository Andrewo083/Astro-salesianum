<?php
include('conexion.php');

$conexion = new mysqli($host,$user,$password,$bd);

if(!$conexion){
    die("Error en la conexion".mysqli_connect_error());
} 

$ID=$_GET['ID'];
$Name=$_POST['Name'];
$LastName=$_POST['LastName'];
$Email=$_POST['Email'];
$PhoneNumber=$_POST['PhoneNumber'];
$Password=$_POST['Password'];


 $SQL="UPDATE `user` SET `Email`='$Email',`Name`='$Name',`LastName`='$LastName',`Password`='$Password',`PhoneNumber`='$PhoneNumber',`ROL`='[value-6]',`ProfileImage`='[value-7]' WHERE 1";

//Ejecucion de la consulta
if(mysqli_query($conexion,$SQL)){
    echo "Datos actualizados exitosamente";
}else{
    echo "Error al actualizar el registro";
}


mysqli_close($conexion);

?>