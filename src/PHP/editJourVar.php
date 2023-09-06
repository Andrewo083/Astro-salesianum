<?php 

if($_SESSION['ROL'] != 1){  
    header("Location: ./Error.php");  
    
    }
  
  
  $conexion = mysqli_connect('localhost', 'root', '', 'astrodb');
  
  $email_reporter = $_GET['reporter'];
  $QueryReporter = "SELECT * FROM reporter WHERE Email = '$email_reporter'";
  $ResultReporter = mysqli_query($conexion, $QueryReporter);

?>