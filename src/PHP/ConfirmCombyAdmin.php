<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>ConfirmCombyAdmin</title>
</head>
<body>
    
<?php
include('conexion.php');

$conexion = new mysqli($host, $user, $password, $bd);

if (!$conexion) {
    die("Error en la conexión" . mysqli_connect_error());
}

$ID = $_GET['ID']; //Variable a obtener

// Agregamos el código JavaScript para la confirmación antes de eliminar
echo "<script>
    Swal.fire({
        title: '¿Estás seguro de que deseas eliminar el registro?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Sí, eliminar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = 'DeleteComments.php?ID=$ID';
        } else {
            window.location.href = 'http://localhost/Astro-salesianum/src/AdminComTable.php';
        }
    });
</script>";

mysqli_close($conexion);
?>

</body>
</html>
