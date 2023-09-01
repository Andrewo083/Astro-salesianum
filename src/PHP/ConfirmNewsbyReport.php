<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <title>ConfirNewsByReport</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    
<?php
include('conexion.php');

$conexion = new mysqli($host, $user, $password, $bd);

if (!$conexion) {
    die("Error en la conexión" . mysqli_connect_error());
}

$new= $_GET['new']; //Variable a obtener

// Agregamos el código JavaScript con SweetAlert2 para la confirmación antes de eliminar
echo "<script>
    Swal.fire({
        title: '¿Estás seguro de que deseas eliminar el registro?',
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí, eliminar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = 'deletenews.php?new=$new';
        } else {
            window.location.href = 'http://localhost/Astro-salesianum/src/Profile_Journalist.php';
        }
    });
</script>";

mysqli_close($conexion);
?>

</body>
</html>
