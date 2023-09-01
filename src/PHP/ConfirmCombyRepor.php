<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Confirmación </title>
</head>
<body>
    <?php
    include('conexion.php');

    $conexion = new mysqli($host, $user, $password, $bd);

    if (!$conexion) {
        die("Error en la conexión" . mysqli_connect_error());
    }

    $ID = $_GET['ID']; //Variable a obtener

    // Agregamos el código JavaScript para mostrar una alerta personalizada antes de eliminar
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
                // Cambiar esta línea para redirigir después de la confirmación
                Swal.fire(
                    'Eliminado',
                    'El registro ha sido eliminado exitosamente.',
                    'success'
                ).then(() => {
                    window.location.href = 'DeleteComments.php?ID=$ID';
                });
            } else {
                Swal.fire(
                    'Cancelado',
                    'La eliminación ha sido cancelada.',
                    'error'
                ).then(() => {
                    window.location.href = 'http://localhost/Astro-salesianum/src/ProfileUser.php';
                });
            }
        });
    </script>";

    mysqli_close($conexion);
    ?>
</body>
</html>
