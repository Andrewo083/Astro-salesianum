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

    // Consultas para seleccionar el correo, contraseña y nombre que coincidan con los ingresados para cada rol
    // $consultaRol1 = "SELECT * FROM `Administrador` WHERE `Email` = '$Email' AND `Password` = '$Password'";
    $consultaRol2 = "SELECT * FROM `reporter` WHERE `Email` = '$Email' AND `Password` = '$Password'";
    $consultaRol3 = "SELECT * FROM `user` WHERE `Email` = '$Email' AND `Password` = '$Password'";

    //$resultadoRol1 = $conexion->query($consultaRol1);
    $resultadoRol2 = $conexion->query($consultaRol2);
    $resultadoRol3 = $conexion->query($consultaRol3);

    // Verificamos si se encontró una fila coincidente en alguna de las tablas
    if ($resultadoRol1->num_rows === 1) {
        // Inicio de sesión exitoso para el rol 1
        $row = $resultadoRol1->fetch_assoc();
        session_start();
        $_SESSION['Email'] = $Email;
        $_SESSION["Name"] = $row["Name"];
        $_SESSION['ROL'] = $row['ROL'];
        $_SESSION['ProfileImage'] = $row['ProfileImage'];
        echo $_SESSION['ProfileImage'];
        header("Location: ./WelcomeAdmin.php");
        exit();
    } elseif ($resultadoRol2->num_rows === 1) {
        // Inicio de sesión exitoso para el rol 2
        $row = $resultadoRol2->fetch_assoc();
        session_start();
        $_SESSION["Email"] = $Email;
        $_SESSION["Name"] = $row["Name"];
        $_SESSION['ROL'] = $row['ROL'];
        $_SESSION['ProfileImage'] = $row['ProfileImage'];
        echo $_SESSION['ProfileImage'];
        header("Location: ./Profile_Journalist.php"); // Cambiarle a la parte de reportero
        exit();
    } elseif ($resultadoRol3->num_rows === 1) {
        // Inicio de sesión exitoso para el rol 3
        $row = $resultadoRol3->fetch_assoc();
        session_start();
        $_SESSION["Email"] = $Email;
        $_SESSION["Name"] = $row["Name"];
        $_SESSION['ROL'] = $row['ROL'];
        $_SESSION['ProfileImage'] = $row['ProfileImage'];
        echo $_SESSION['ProfileImage'];

        // Agregamos esta parte para verificar el rol del usuario en la tabla "user"
        $rolConsulta = "SELECT rol FROM `user` WHERE `Email` = '$Email' AND `Password` = '$Password'";
        $resultadoRol = $conexion->query($rolConsulta);
        if ($resultadoRol->num_rows === 1) {
            $row = $resultadoRol->fetch_assoc();
            $rolUsuario = $row['rol'];
            if ($rolUsuario == 1) {
                header("Location: ./WelcomeAdmin.php"); // Redirección para el rol 1
            } elseif ($rolUsuario == 2) {
                header("Location: ./Profile_Journalist.php?jour=" . $Email); // Redirección para el rol 2
            } elseif ($rolUsuario == 3) {
                header("Location: ./newindex.php"); // Redirección para el rol 3
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
    <meta charset="UTF-8"><link rel="shortcut icon" href="../img/AstroFavicon.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Login</title>
    <script src="./ JS/LoginEye.js"></script>
    <link rel="stylesheet" href="../Public/tailwind.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="./css/Translate.css">
</head>
  <style>
    div iframe {
      display: none !important;
    }

    body {
      top: 0 !important;
    }
  </style>
<body>

    <!-- component -->


    <div>
        <section class="relative mx-auto">
            <!-- navbar -->
            <nav class="flex justify-between bg-gray-900 text-white ">
                <div class="px-5 xl:px-12 py-6 flex w-full items-center ">
                <a href="./start.html">
            <img src="../img/AstroFavicon.png" alt="" width="45px"></a>
                    <a class="text-3xl font-bold font-heading" href="./start.html">
                        <!-- <img class="h-9" src="logo.png" alt="logo"> -->
                        Astro Salesianum
                    </a>
                    <!-- Nav Links -->
                    <ul class="hidden md:flex px-4 mx-auto font-semibold font-heading space-x-12">

                    </ul>
                    <!-- Header Icons -->
                    <div class="hidden xl:flex items-center space-x-5 ">
                        <a class="hover:text-gray-200" href="#">

                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </a>
                        <a class="flex items-center hover:text-gray-200" href="#">

                        </a>
                        <!-- Sign In / Register      -->
                        <a class="flex items-center hover:text-gray-200" href="#">

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
        <div class="p-44  ">
            <div class="flex bg-white rounded-lg shadow-lg overflow-hidden mx-auto max-w-sm lg:max-w-4xl">
                <div class="hidden lg:block lg:w-1/2 bg-cover max-h-full" style=" background-image:url('../img/ricaldepo.jpeg') "></div>
                <div class="w-full p-8 lg:w-1/2">
                    <h2 class="text-2xl font-semibold text-gray-700 text-center">Login</h2>
                    <p class="text-xl text-gray-600 text-center">Bienvenido de vuelta!</p>
                    <a href="./Registro.html" class="flex items-center justify-center mt-4 text-white rounded-lg shadow-md hover:bg-gray-100">
                        <div class="px-4 py-3">

                            <img src="../img/AstroFavicon.png" class="h-10 w-10" viewBox="0 0 40 40">

                        </div>
                        <h1 class="px-4 py-3 w-5/6 text-center text-gray-600 font-bold">No tengo cuenta! </h1>
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
                        <div class="mt-4 relative">
                            <div class="flex justify-between">
                                <label class="block text-gray-700 text-sm font-bold mb-2">Contraseña</label>

                            </div>
                            <p>
                                <input class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 w-full relative appearance-none" id="contraseña" type="password" name="Password">
                                
                             
                            </p>
                            <div class=" flex justify-end relative">
                                <i class="fa fa-eye-slash absolute bottom-3 right-2 cursor-pointer" aria-hidden="true" onclick="mostrar()" class="icon" id="eye" class="translate-y-32"></i>
                            </div>
                        </div>
                        <div class="mt-8">
                            <button class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600">Login</button>
                        </div>
                    </form>
                    <div class="mt-4 flex items-center justify-between">
                        <span class="border-b w-1/5 md:w-1/4"></span>
                        <a href="./start.html" class="text-xs text-gray-500 uppercase">Volver</a>
                        <span class="border-b w-1/5 md:w-1/4"></span>
                    </div>
                </div>
            </div>
        </div>
             <footer class="bg-gray-800">
  <div class="container px-3 py-5 mx-auto">
      <div class="flex flex-col items-center text-center">
          <a href="#">
              <img class="w-auto h-14" src="../img/AstroFavicon.png" alt="">
          </a>

          <p class="max-w-md mx-auto mt-4 text-white">Astrum Salesianum</p>

          <div class="flex flex-col mt-4 sm:flex-row sm:items-center sm:justify-center">
             

              
          </div>
      </div>

      <hr class="my-10 border-gray-200" />

      <div class="flex flex-col items-center sm:flex-row sm:justify-between">
          <p class="text-sm text-gray-500">© Copyright 2023. Crea J Astro Salesianum.</p>

          <div class="flex mt-3 -mx-2 sm:mt-0">
              <a href="#" class="mx-2 text-sm text-gray-500 transition-colors duration-300 hover:text-gray-500 dark:hover:text-gray-300" aria-label="Reddit"> Teams </a>

              <a href="#" class="mx-2 text-sm text-gray-500 transition-colors duration-300 hover:text-gray-500 dark:hover:text-gray-300" aria-label="Reddit"> Privacy </a>

              <a href="#" class="mx-2 text-sm text-gray-500 transition-colors duration-300 hover:text-gray-500 dark:hover:text-gray-300" aria-label="Reddit"> Cookies </a>
          </div>
      </div>
  </div>

  <div class = "group fixed bottom-0 right-0 p-2  flex items-end justify-end w-24 h-24 " id="google_translate_element">

</footer>
<script>
  function googleTranslateElementInit() {
    new google.translate.TranslateElement({
      pageLanguage: 'es',
      includedLanguages: 'es,en',
      layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
    }, 'google_translate_element');
  }
</script>
<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>

</html>