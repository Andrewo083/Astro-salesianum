<?php
session_start();
$conexion = mysqli_connect('localhost', 'root', '', 'astrodb');

difference($conexion);

function difference($conexion)
{
    if (isset($_POST['submit'])) {
        submit($conexion);
    } else if (isset($_POST['edit'])) {
        edit($conexion);
    } else if (isset($_POST['delete'])) {
        delete($conexion);
    }
}

function submit($conexion)
{
    //Carpeta   
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

function edit($conexion)
{



    $id_news = $_POST['id_news'];
    $id_reporter = $_POST['id_reporter'];

    // ... otras variables ...

    $imagen = $_POST['imagen'];
    //$imagen = $_FILES['imagen']['name'];
    //$imagen_tmp = $_FILES['imagen']['tmp_name'];

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

    // Obtiene los datos actuales de la noticia de la base de datos
    $existingQuery = "SELECT * FROM `news` WHERE `id_news`='$id_news'";
    $existingResult = mysqli_query($conexion, $existingQuery);
    $existingData = mysqli_fetch_assoc($existingResult);



    // Compara los valores actuales con los nuevos
    if (
        $existingData['id_reporter'] == $id_reporter &&
        $existingData['main_image'] == $imagen &&
        $existingData['photographer'] == $photographer &&
        $existingData['headline'] == $headline &&
        $existingData['drophead'] == $drophead &&
        $existingData['date'] == $date &&
        $existingData['BodyOne'] == $BodyOne &&
        $existingData['BodyTwo'] == $BodyTwo &&
        $existingData['BodyThree'] == $BodyThree &&
        $existingData['BodyFour'] == $BodyFour &&
        $existingData['school'] == $school &&
        $existingData['Category'] == $category
    ) {
        if($_SESSION['ROL'] == 1){
            echo "<script>
            alert('No se realizaron cambios en los datos.');
            window.location.href = 'http://localhost/Astro-salesianum/src/AdminNewsTable.php';
          </script>";
        }else if($_SESSION['ROL'] == 2){
            echo "<script>
            alert('No se realizaron cambios en los datos.');
            window.location.href = 'http://localhost/Astro-salesianum/src/Profile_Journalist.php';
          </script>";
        }
        
    } else {
        // Hay cambios, realiza la actualización
        $query = "UPDATE `news` SET `main_image`='$imagen',`photographer`='$photographer',`headline`='$headline',`drophead`='$drophead',`date`='$date',`BodyOne`='$BodyOne',`BodyTwo`='$BodyTwo',`BodyThree`='$BodyThree',`BodyFour`='$BodyFour',`school`='$school',`Category`='$category',`State`='$State' WHERE `id_news`='$id_news'";

        if (mysqli_query($conexion, $query)) {
            
            if ($_SESSION['ROL'] == 1) {
                include("./Wait.html");
                header('Refresh: 2; URL=http://localhost/Astro-salesianum/src/AdminNewsTable.php');
            } else if ($_SESSION['ROL'] == 2) {
                include("./Wait.html");
                header('Refresh: 2; URL=http://localhost/Astro-salesianum/src/Profile_Journalist.php');
            } else {
                include("./Error.php");
             
            }
        } else {
            include("./Error.php");
        }
    }
}

function delete($conexion)
{
    $id_news = $_POST['id_news'];
    echo $id_news;
    $State = "Inactive";
    $query = " DELETE FROM `news` WHERE `id_news` = '$id_news' ";

    mysqli_query($conexion, $query);
    include("./Wait.html");
    header('location: ./index.php');
}
