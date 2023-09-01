<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConfirmDelJOurbyAdmin</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    
</body>
</html>

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
        title: '¿Estás seguro?',
        text: 'Esta acción eliminará el registro permanentemente.',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Sí, eliminar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = 'Delete.php?ID=$ID';
        } else {
            window.location.href = 'http://localhost/Astro-salesianum/src/AdminJourTable.php';
        }
    });
</script>";

mysqli_close($conexion);
?>
