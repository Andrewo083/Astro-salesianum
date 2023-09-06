<?php 

if($_SESSION['ROL'] != 1){ 
    header("Location: ./Error.php"); 
     
    }
   
   include('./PHP/conexion.php');
   
   $conexion = new mysqli($host, $user, $password, $bd);
   
   if (!$conexion) {
     die("Error en la conexion" . mysqli_connect_error());
   }
   
   $sql = "SELECT * FROM `reporter`";
   
   $query = mysqli_query($conexion, $sql);
   
?>