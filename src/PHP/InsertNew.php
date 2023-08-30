<?php 
$conexion = mysqli_connect('localhost', 'root', '', 'astrodb');




if ($_SERVER["REQUEST_METHOD"] === "POST") {
$carpet_images = "C:/xampp/htdocs/Astro-salesianum/img/";
    $carpet_images;
    $id_reporter = $_POST['id_reporter'];

    //Nombre y propiedad de la imagen
    $imagen = $_FILES['imagen']['name'];
    $imagen_tmp = $_FILES['imagen']['tmp_name'];

    //Info de la noticia
    $headline = $_POST['headline'];
    $drophead = $_POST['drophead'];
    $date = $_POST['date'];
    $BodyOne = $_POST['BodyOne'];
    $BodyTwo = $_POST['BodyTwo'];
    $BodyThree = $_POST['BodyThree'];
    $BodyFour = $_POST['BodyFour'];
    $school = $_POST['school'];
    $category = $_POST['category'];
    $photographer = $_POST['photographer'];
    $State = "Active";

    //nuevo nommbre
    $imagen =  "$headline-$id_reporter-fotografo-$photographer.png";
    
    $url_main = $carpet_images . $imagen;
    move_uploaded_file($imagen_tmp, $url_main);

    $query = "INSERT INTO `news`( `id_reporter`, `main_image`, `photographer`, `headline`, `drophead`, `date`, `BodyOne`,`BodyTwo`, `BodyThree`, `BodyFour`,`school`, `Category`, `State`) VALUES ('$id_reporter','$imagen','$photographer','$headline','$drophead','$date','$BodyOne','$BodyTwo','$BodyThree','$BodyFour','$school','$category', '$State')";

    mysqli_query($conexion, $query);
   include("./Wait.html");
    header('Refresh: 2; URL=http://localhost/Astro-salesianum/src/Profile_Journalist.php');
}

?>