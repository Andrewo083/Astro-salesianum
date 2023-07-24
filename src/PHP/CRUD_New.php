<?php
$conexion = mysqli_connect('localhost', 'root', '','astrodb')or die(mysqli_error($mysqli));

difference($conexion);

function difference($conexion){
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
    $carpet_images = "C:/xampp/htdocs/ASTRO SALES/img/";
    echo $carpet_images;
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
    $photographer = $_POST['photographer'];
    
    //nuevo nommbre
    $imagen =  "$headline-$id_reporter-fotografo-$photographer.png";
    echo $imagen;
    $url_main = $carpet_images.$imagen;
    move_uploaded_file($imagen_tmp, $url_main);

        $query = "INSERT INTO `news`( `id_reporter`, `main_image`, `headline`, `drophead`, `date`, `body`, `school`, `category`,`photographer`) VALUES ('$id_reporter','$imagen','$headline','$drophead','$date','$body','$school', '$category', '$photographer')";

    mysqli_query($conexion, $query);
    echo "Si se hixo";
    //header("Location: ./index.php");
   
}

function edit($conexion){
   
    //Carpeta   
    $carpet_images = "C:/xampp/htdocs/ASTRO SALES/img/";
    echo $carpet_images;
    $id_news = $_POST['id_news'];
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
    $photographer = $_POST['photographer'];
    
    //nuevo nommbre
    $imagen =  "$headline-$id_reporter-fotografo-$photographer.png";
    echo $imagen;
    $url_main = $carpet_images.$imagen;
    move_uploaded_file($imagen_tmp, $url_main);

    $query = "UPDATE `news` SET `id_reporter`='$id_reporter',`main_image`='$imagen',`headline`='$headline',`drophead`='$drophead',`date`='$date',`body`='$body',`school`='$school',`Category`='$category' WHERE `id_news`='$id_news'";

    mysqli_query($conexion, $query);
    //header('location: ../DonBoscoIndex.php');

}

function delete($conexion){
    $id_news = $_POST['id_news'];
    echo $id_news;
    $query = " DELETE FROM `news` WHERE `id_news` = '$id_news' ";

    mysqli_query($conexion, $query);
    header('location: ./index.php');


}


