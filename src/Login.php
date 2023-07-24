<?php
// Verificamos si el formulario de inicio de sesión fue enviado
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtener el correo y la contraseña ingresados en el formulario
    $Email = $_POST["Email"];
    $Password = $_POST["Password"];

    // Conexión a la base de datos (debes reemplazar los valores por los de tu base de datos)
    $host = "localhost";
    $user = "root";
    $password_db = "";
    $bd = "astrodb";
    $conexion = new mysqli($host, $user, $password_db, $bd);

    if (!$conexion) {
        die("Error en la conexión" . mysqli_connect_error());
    }

    //Consulta para seleccionar el correo y contraseña que coincidan con los ingresados para el rol 1 (otra tabla)
     $consultaRol1 = "SELECT * FROM `Administrador` WHERE `Email` = '$Email' AND `Password` = '$Password'";
    $consultaRol2 = "SELECT * FROM `reporter` WHERE `Email` = '$Email' AND `Password` = '$Password'";
    $consultaRol3 = "SELECT * FROM `user` WHERE `Email` = '$Email' AND `Password` = '$Password'";

    // $resultadoRol1 = $conexion->query($consultaRol1);
    $resultadoRol2 = $conexion->query($consultaRol2);
    $resultadoRol3 = $conexion->query($consultaRol3);

    // Verificamos si se encontró una fila coincidente en alguna de las tablas
    if ($resultadoRol1->num_rows === 1) {
        // Inicio de sesión exitoso para el rol 1
        session_start();
        $_SESSION["Email"] = $Email;
        header("Location: ./Administrador.php");
        exit();
    } elseif ($resultadoRol2->num_rows === 1) {
        // Inicio de sesión exitoso para el rol 2
        session_start();
        $_SESSION["Email"] = $Email;
        header("Location: ./formsnews.html"); //Cambiarle a la parte de reportero
        exit();
    } elseif ($resultadoRol3->num_rows === 1) {
        // Inicio de sesión exitoso para el rol 3
        session_start();
        $_SESSION["Email"] = $Email;
        
        // Agregamos esta parte para verificar el rol del usuario en la tabla "user"
        $rolConsulta = "SELECT rol FROM `user` WHERE `Email` = '$Email' AND `Password` = '$Password'";
        $resultadoRol = $conexion->query($rolConsulta);
        if ($resultadoRol->num_rows === 1) {
            $row = $resultadoRol->fetch_assoc();
            $rolUsuario = $row['rol'];
            if ($rolUsuario == 1) {
                header("Location: ./Administrador.php"); // Redirección para el rol 1
            } elseif ($rolUsuario == 2) {
                header("Location: /formnews.html"); // Redirección para el rol 2
            } elseif ($rolUsuario == 3) {
                header("Location: ./newindex.html"); // Redirección para el rol 3
            } else {
                echo "Rol no válido.";
                exit();
            }
            exit();
        } else {
            echo "Error al obtener el rol del usuario.";
            exit();
        }
    } else {
        // Inicio de sesión fallido
        echo '<script>alert("Credenciales incorrectas");
         window.location.href = "./Login.php";</script>';
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../Public/tailwind.css">
</head>

<body>

    <!-- component -->


    <div>
        <section class="relative mx-auto">
            <!-- navbar -->
            <nav class="flex justify-between bg-gray-900 text-white w-screen">
                <div class="px-5 xl:px-12 py-6 flex w-full items-center">
                    <a class="text-3xl font-bold font-heading" href="#">
                        <!-- <img class="h-9" src="logo.png" alt="logo"> -->
                        Astro
                    </a>
                    <!-- Nav Links -->
                    <ul class="hidden md:flex px-4 mx-auto font-semibold font-heading space-x-12">
                        <li><a class="hover:text-gray-200" href="#">Home</a></li>
                        <li><a class="hover:text-gray-200" href="#">Casas</a></li>
                        <li><a class="hover:text-gray-200" href="#">Notroso</a></li>
                        <li><a class="hover:text-gray-200" href="#">Categorias</a></li>
                    </ul>
                    <!-- Header Icons -->
                    <div class="hidden xl:flex items-center space-x-5 items-center">
                        <a class="hover:text-gray-200" href="#">

                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </a>
                        <a class="flex items-center hover:text-gray-200" href="#">

                        </a>
                        <!-- Sign In / Register      -->
                        <a class="flex items-center hover:text-gray-200" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </a>

                    </div>
                </div>
                <!-- Responsive navbar -->
                <a class="xl:hidden flex mr-6 items-center" href="#">


                </a>
                <a class="navbar-burger self-center mr-12 xl:hidden" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">

                    </svg>
                </a>
            </nav>

        </section>

        <!-- component -->
        <div class="p-44">
            <div class="flex bg-white rounded-lg shadow-lg overflow-hidden mx-auto max-w-sm lg:max-w-4xl">
                <div class="hidden lg:block lg:w-1/2 bg-cover max-h-full" style=" background-image:url('../img/ricaldepo.jpeg') "></div>
                <div class="w-full p-8 lg:w-1/2">
                    <h2 class="text-2xl font-semibold text-gray-700 text-center">Login</h2>
                    <p class="text-xl text-gray-600 text-center">Bienvenido de vuelta!</p>
                    <a href="#" class="flex items-center justify-center mt-4 text-white rounded-lg shadow-md hover:bg-gray-100">
                        <div class="px-4 py-3">

                            <img src="../img/logis.png" class="h-10 w-10" viewBox="0 0 40 40">

                        </div>
                        <a href="./Registro.html">
                        <h1 class="px-4 py-3 w-5/6 text-center text-gray-600 font-bold">No tengo cuenta! </h1>
                        </a>
                    </a>
                    <div class="mt-4 flex items-center justify-between">
                        <span class="border-b w-1/5 lg:w-1/4"></span>
                        <a href="#" class="text-xs text-center text-gray-500 uppercase"> Ingresa tus datos</a>
                        <span class="border-b w-1/5 lg:w-1/4"></span>
                    </div>
                    <form action="./Login.php" method="post">

                        <div class="mt-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Correo</label>
                            <input class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="email" name="Email">
                        </div>
                        <div class="mt-4">
                            <div class="flex justify-between">
                                <label class="block text-gray-700 text-sm font-bold mb-2">Contraseña</label>
                                <a href="#" class="text-xs text-gray-500">Olvidaste tu contraseña?(ni modo)</a>
                            </div>
                            <input class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="password" name="Password">
                        </div>
                        <div class="mt-8">
                            <button class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600">Login</button>
                        </div>
                    </form>
                    <div class="mt-4 flex items-center justify-between">
                        <span class="border-b w-1/5 md:w-1/4"></span>
                        <a href="#" class="text-xs text-gray-500 uppercase">Volver</a>
                        <span class="border-b w-1/5 md:w-1/4"></span>
                    </div>
                </div>
            </div>
        </div>
        <footer class="bg-neutral-800 dark:bg-gray-900 flex pt-10">
            <div class="container p-6 mx-auto">
                <div class="lg:flex">
                    <div class="w-full -mx-6 lg:w-2/5">
                        <div class="flex mt-6 -mx-2">
                            <div class="px-6">
                                <a href="#">

                                    <h1 class="w-auto h-7 text-white font-semibold">Person Specter</h1>
                                </a>

                                <p class="max-w-sm mt-2 text-gray-500 dark:text-gray-400">Join 31,000+ other and never
                                    miss out on new tips, tutorials, and more.</p>



                            </div>
                        </div>
                    </div>

                    <div class="mt-6 lg:mt-0 lg:flex-1">
                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                            <div>
                                <h3 class="text-white uppercase dark:text-white">About</h3>
                                <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Company</a>
                                <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">community</a>
                                <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Careers</a>
                            </div>

                            <div>
                                <h3 class="text-white uppercase dark:text-white">Blog</h3>
                                <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Tec</a>
                                <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Music</a>
                                <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Videos</a>
                            </div>

                            <div>
                                <h3 class="text-white uppercase dark:text-white">Products</h3>
                                <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Mega
                                    cloud</a>
                                <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Aperion
                                    UI</a>
                                <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Meraki
                                    UI</a>
                            </div>

                            <div>
                                <h3 class="text-white uppercase dark:text-white">Contact</h3>
                                <span class="block mt-2 text-sm text-white dark:text-gray-400 hover:underline">+1 526
                                    654 8965</span>
                                <span class="block mt-2 text-sm text-white dark:text-gray-400 hover:underline">example@email.com</span>
                            </div>
                        </div>
                    </div>
                </div>


                <hr class="h-px my-6 bg-gray-200 border-none dark:bg-gray-700">

                <div>
                    <p class="text-center text-white dark:text-gray-400">© spectre 2023 - All rights reserved</p>
                </div>
            </div>
        </footer>
</body>

</html>