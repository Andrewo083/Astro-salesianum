<?php 

$conexion = new mysqli("localhost", "root","","astrodb");


diference($conexion);

function diference($conexion){

    if(isset($_POST['Enviar'])){
        insertar($conexion);
    }
    if(isset($_POST['Edit'])){
        edit($conexion);
    }
    if(isset($_POST['Eliminar'])){
        delete($conexion);
    }

}

function insertar($conexion){
    if(!empty($_POST["btnregistrar"])){

       
        $Email=$_POST['Email'];
        $Password=$_POST['Password'];
        $Name= $_POST['Name'];
        $LastName=$_POST['LastName'];
        $PhoneNumber=$_POST['PhoneNumber'];
        $ROL= "2";
       
    
        $sql=$conexion->query(" insert into reporter(Email,Password,Name,LastName,PhoneNumber,ROL)values('$Email','$Password','$Name','$LastName','$PhoneNumber','$ROL') ");
        if ($sql ==1) {
            echo"bien";
        } else {
                        echo"<div class='alert alert-danger'>BIEN</div>";
    
        }
        
    }
}

function edit($conexion){

    if(!empty($_POST["Edit"])){
       
        $Email=$_POST['Email'];
        $Password=$_POST['Password'];
        $Name= $_POST['Name'];
        $LastName=$_POST['LastName'];
        $PhoneNumber=$_POST['PhoneNumber'];
        $ROL= "2";

            $sql=$conexion->query("update reporter set Email='$Email', Password='$Password', Name='$Name', LastName='$LastName', PhoneNumber='$PhoneNumber', ROL='$ROL'");
    
            if($sql==1){
    
                header("location:../HTML/Admin.php");
    
            }else{
                echo"<div class='alert alert-danger'>ERROR</div>";
            }
    
        
    }

}

function delete($conexion){
    
if(!empty($_GET["Email"])){

    $Email = $_GET["Email"];
    $sql = $conexion->query(" delete from reporter where Enail = $Email");
    if($sql==1){
            echo"<div class='alert alert-danger'>Eliminado</div>";

    }else{
        echo"<div class='alert alert-warning m-aut'>No se pudo eliminar</div>";
    }
}
}



?>