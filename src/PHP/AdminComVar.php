<?php 

if($_SESSION['ROL'] != 1){
    header("Location: ./Error.php");
    
    }
    
    include('./PHP/conexion.php');
    
    $conexion = mysqli_connect('localhost', 'root', '', 'astrodb');
    
    if (!$conexion) {
      die("Error en la conexión: " . mysqli_connect_error());
    }
    
    
    
    $query = "SELECT * FROM `comments`";
    $result = mysqli_query($conexion, $query);
    
    if ($result) {
      if (mysqli_num_rows($result) > 0) {
        $stateTable ="";
        // Resto del código para mostrar los comentarios
      } else {
       $stateTable = "No hay comentarios aún.";
      }
    } else {
      echo "Error en la consulta: " . mysqli_error($conexion);
    }
    
    
    

?>