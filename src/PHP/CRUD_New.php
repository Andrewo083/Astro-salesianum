<?php
$conexion = mysqli_connect('localhost', 'root', '','astrodb')or die(mysqli_error($mysqli));

diference($conexion);

function diference($conexion){
    if(isset($_POST['submit'])){
        submit($conexion);
    }else if(isset($_POST['edit'])){
        edit($conexion);
    }else if(isset($_POST['delete'])){
        delete($conexion);
    }
}

function submit($conexion){
    //Carpeta   
    $carpet_images = "./IMG/";
    $id_reporter = $_POST['id_reporter'];

    //Nombre y propiedad de la imagen
    $imagen = $_FILES['imagen']['name'];
    $imagen_tmp = $_FILES['imagen']['tmp_name'];

    //Info de la noticia
    $headline = $_POST['headline'];
    $drophead = $_POST['drophead'];
    $date = $_POST['date'];
    $body = $_POST['body'];
    $school = $_POST['school'];
    $category = $_POST['category'];
    
    //nuevo nommbre
    $imagen =  "$headline-$id_reporter.png";
    echo $imagen;
    $url_main = $carpet_images.$imagen;
    move_uploaded_file($imagen_tmp, $url_main);

$query = "INSERT INTO `news`( `id_reporter`, `main_image`, `image_one`, `image_two`, `headline`, `drophead`, `date`, `body`, `school`, `category`) VALUES ('$id_reporter','$url_main','NULL','NULL','$headline','$drophead','$date','$body','$school', '$category')";

mysqli_query($conexion, $query);
echo "Si se hixo";
header("Location: ./index.php");
}

function edit($conexion){
   
    //Carpeta   
    $carpet_images = "./IMG/";
    $id_reporter = $_POST['id_reporter'];

    //Nombre y propiedad de la imagen
    $imagen = $_FILES['imagen']['name'];
    $imagen_tmp = $_FILES['imagen']['tmp_name'];

    //Info de la noticia
    $headline = $_POST['headline'];
    $drophead = $_POST['drophead'];
    $date = $_POST['date'];
    $body = $_POST['body'];
    $school = $_POST['school'];
    $category = $_POST['category'];
    
    //nuevo nommbre
    $imagen =  "$headline-$id_reporter.png";
    echo $imagen;
    $url_main = $carpet_images.$imagen;
    move_uploaded_file($imagen_tmp, $url_main);

$query = "UPDATE `news` SET `main_image`='$main_image',`image_one`='$image_one',`image_two`='$image_two',`headline`='$headline',`drophead`='$drophead',`date`='$date',`body`='$body',`school`='$school', `category` = '$category'  WHERE `id_news`= '$id_news' ";

mysqli_query($conexion, $query);
header('location: ./index.php');

}

function delete($conexion){
    $id_news = $_POST['id'];
    echo $id_news;
    $query = " DELETE FROM `news` WHERE `id_news` = '$id_news' ";

    mysqli_query($conexion, $query);
    header('location: ./index.php');


}


