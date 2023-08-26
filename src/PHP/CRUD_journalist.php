<?php 

$conexion = new mysqli("localhost", "root","","astrodb")or die(mysqli_error($mysqli));


diference($conexion);

function diference($conexion){

    if(isset($_POST['Enviar'])){
        insertar($conexion);
    }
    if(isset($_POST['editar'])){
        echo "EDIAT";
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

function editar($conexion) {
    // Recuperar datos del formulario usando filtrado para evitar SQL injection
    $ID = mysqli_real_escape_string($conexion, $_POST['ID']);
    echo $ID;
    $Email = mysqli_real_escape_string($conexion, $_POST['Email']);
    echo $Email;
    $Password = mysqli_real_escape_string($conexion, $_POST['Password']);
    echo $Password;
    $Name = mysqli_real_escape_string($conexion, $_POST['Name']);
    echo $Name;
    $LastName = mysqli_real_escape_string($conexion, $_POST['LastName']);
     echo $LastName;
    $PhoneNumber = mysqli_real_escape_string($conexion, $_POST['PhoneNumber']);
    echo $PhoneNumber;
    $ProfileImage = mysqli_real_escape_string($conexion, $_POST['Imagen']);
    echo $ProfileImage;
    $ROL = "2"; 

    $query = "UPDATE `reporter` SET `Email`='$Email',`ProfileImage`='$ProfileImage',`Password`='$Password',`Name`='$Name',`LastName`='$LastName',`PhoneNumber`='$PhoneNumber',`ROL`='$ROL' WHERE `Email` = '$ID'";

    mysqli_query($conexion, $query);
  

    // Verificar si la consulta se realizó correctamente
   
        // Redirigir después de 2 segundos
        header('Refresh: 2; URL=http://localhost/Astro-salesianum/src/AdminJourTable.php');
        echo "Usuario actualizado correctamente. Redireccionando...";
    
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