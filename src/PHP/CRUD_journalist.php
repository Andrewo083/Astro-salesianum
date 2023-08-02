<?php 

$conexion = new mysqli("localhost", "root","","astrodb");


diference($conexion);

function diference($conexion){

    if(isset($_POST['Enviar'])){
        insertar($conexion);
    }
    if(isset($_POST['Editar'])){
        editar($conexion);
    }
    if(isset($_POST['Eliminar'])){
        delete($conexion);
    }

}

function insertar($conexion){
    if(!empty($_POST["btnregistrar"])){
        $carpet_images = "C:/xampp/htdocs/Astro-salesianum/img/";
    echo $carpet_images;


       
        $Email=$_POST['Email'];
        $Password=$_POST['Password'];
        $imagen = $_FILES['imagen']['name'];
        $imagen_tmp = $_FILES['imagen']['tmp_name'];

        $Name= $_POST['Name'];
        $LastName=$_POST['LastName'];
        $PhoneNumber=$_POST['PhoneNumber'];

        $ROL= "2";
        
    //nuevo nommbre
    $imagen =  "$Email.png";
    $url_main = $carpet_images.$imagen;
    move_uploaded_file($imagen_tmp, $url_main);
       
    
        $sql=$conexion->query(" insert into reporter(Email,ProfileImage,Password,Name,LastName,PhoneNumber,ROL)values('$Email', '$imagen','$Password','$Name','$LastName','$PhoneNumber','$ROL') ");
        if ($sql ==1) {
            //echo"bien";
        } else {
                        echo"<div class='alert alert-danger'>BIEN</div>";
    
        }
        
    }
}

function editar($conexion){

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
    
if(!empty($_POST["Email"])){

    $Email = $_POST["Email"];
    $sql = $conexion->query(" delete from reporter where Enail = $Email");
    if($sql==1){
            echo"<div class='alert alert-danger'>Eliminado</div>";

    }else{
        echo"<div class='alert alert-warning m-aut'>No se pudo eliminar</div>";
    }
}
}



?>