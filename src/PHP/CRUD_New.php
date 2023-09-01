<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Crud_New</title>
</head>
<body>

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

    if (mysqli_query($conexion, $query)) {
        echo '<script>
        Swal.fire({
            icon: "success",
            title: "Registro exitoso",
            text: "El registro se ha completado exitosamente."
        }).then(() => {
            window.location.href = "./Wait.html";
        });
        </script>';
    } else {
        echo '<script>
        Swal.fire({
            icon: "error",
            title: "Error",
            text: "Hubo un error al registrar."
        }).then(() => {
            window.location.href = "./Wait.html";
        });
        </script>';
    }
}

function edit($conexion)
{
    $id_news = $_POST['id_news'];
    $id_reporter = $_POST['id_reporter'];

    // ... otras variables ...

    $imagen = $_POST['imagen'];

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
        if ($_SESSION['ROL'] == 1) {
            echo '<script>
            Swal.fire({
                icon: "info",
                title: "No se realizaron cambios",
                text: "No se realizaron cambios en los datos."
            }).then(() => {
                window.location.href = "http://localhost/Astro-salesianum/src/AdminNewsTable.php";
            });
            </script>';
        } else if ($_SESSION['ROL'] == 2) {
            echo '<script>
            Swal.fire({
                icon: "info",
                title: "No se realizaron cambios",
                text: "No se realizaron cambios en los datos."
            }).then(() => {
                window.location.href = "http://localhost/Astro-salesianum/src/Profile_Journalist.php";
            });
            </script>';
        }
    } else {
        // Hay cambios, realiza la actualización
        $query = "UPDATE `news` SET `main_image`='$imagen',`photographer`='$photographer',`headline`='$headline',`drophead`='$drophead',`date`='$date',`BodyOne`='$BodyOne',`BodyTwo`='$BodyTwo',`BodyThree`='$BodyThree',`BodyFour`='$BodyFour',`school`='$school',`Category`='$category',`State`='$State' WHERE `id_news`='$id_news'";

        if (mysqli_query($conexion, $query)) {
            if ($_SESSION['ROL'] == 1) {
                echo '<script>
                Swal.fire({
                    icon: "success",
                    title: "Actualización exitosa",
                    text: "La actualización se ha completado exitosamente."
                }).then(() => {
                    window.location.href = "http://localhost/Astro-salesianum/src/AdminNewsTable.php";
                });
                </script>';
            } else if ($_SESSION['ROL'] == 2) {
                echo '<script>
                Swal.fire({
                    icon: "success",
                    title: "Actualización exitosa",
                    text: "La actualización se ha completado exitosamente."
                }).then(() => {
                    window.location.href = "http://localhost/Astro-salesianum/src/Profile_Journalist.php";
                });
                </script>';
            }
        } else {
            echo '<script>
            Swal.fire({
                icon: "error",
                title: "Error en la actualización",
                text: "Hubo un error en la actualización."
            }).then(() => {
                window.location.href = "http://localhost/Astro-salesianum/src/Error.php";
            });
            </script>';
        }
    }
}

function delete($conexion)
{
    $id_news = $_POST['id_news'];
    $State = "Inactive";
    $query = " DELETE FROM `news` WHERE `id_news` = '$id_news' ";

    if (mysqli_query($conexion, $query)) {
        echo '<script>
        Swal.fire({
            icon: "success",
            title: "Eliminación exitosa",
            text: "La eliminación se ha completado exitosamente."
        }).then(() => {
            window.location.href = "http://localhost/Astro-salesianum/src/index.html";
        });
        </script>';
    } else {
        echo '<script>
        Swal.fire({
            icon: "error",
            title: "Error al eliminar",
            text: "Hubo un error al eliminar."
        }).then(() => {
            window.location.href = "http://localhost/Astro-salesianum/src/Error.php";
        });
        </script>';
    }
}
?>
</body>
</html>
