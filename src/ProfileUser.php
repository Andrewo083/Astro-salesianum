<?php 

session_start();

if (!isset($_SESSION['Email'])) {
    header("Location: ./Login.php");
    exit();
}

include('./funciones/conexion.php');

$conexion = new mysqli($host, $user, $password, $bd);

if (!$conexion) {
    die("Error en la conedxion" . mysqli_connect_error());
  }

  $email = $_SESSION['Email'];

    $conexion = mysqli_connect('localhost', 'root', '', 'astrodb');
    $carpet_images = "../img/";
    $query = "SELECT * FROM `user` WHERE `email` = '$email'";
    $result = mysqli_query($conexion, $query);

    while ($row = mysqli_fetch_array($result)) {


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="../Public/tailwind.css">
</head>
<body>
    <!-- navbar -->

      <!-- component -->
<div>
<section class="relative mx-auto">
    <!-- navbar -->
    <nav class="flex justify-between bg-gray-900 text-white w-screen">
    <div class="px-5 xl:px-12 py-6 flex w-full items-center">
        <a class="text-3xl font-bold font-heading" href="#">
        <!-- <img class="h-9" src="logo.png" alt="logo"> -->
        Astro Salesianum
        </a>
        <!-- Nav Links -->
         <ul class="hidden md:flex px-4 mx-auto font-semibold font-heading space-x-12">
                <li><a  href="./newindex.php" class="hover:text-gray-200" href="#">Home</a></li>
                <li><a href="./ChalecoIndex.php" class="hover:text-gray-200" >Santa Cecilia</a></li>
                <li><a href="./Ricalindex.php" class="hover:text-gray-200" href="#">Ricaldone</a></li>
                <li><a href="./DonBoscoIndex.php" class="hover:text-gray-200" href="#">Don Bosco</a></li>
                <li><a  href="./MariaIndex.php" class="hover:text-gray-200" href="#">Maria axuliadora</a></li>
                </ul>
                <!-- Header Icons -->
                <div class="hidden xl:flex items-center space-x-5 ">
                
                <!-- Sign In / Register      -->
                <a class="flex items-center hover:text-gray-200" href="./<?php include "./Funciones/RestrictAncleRol.php" ?>">
                  <div class="imagen-circular">
        <!-- Aquí colocas la URL de la imagen -->
                    <img src="../img/<?php echo $_SESSION['ProfileImage'] ?>" alt="Imagen Circular">
                  </div>
                
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
        </div>
    <!-- end navbar -->

<!-- component -->
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

<main class="profile-page">
  <section class="relative block h-500-px">
    <div class="absolute top-0 w-full h-full bg-center bg-cover" style="
            background-image: url('https://images.unsplash.com/photo-1499336315816-097655dcfbda?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2710&amp;q=80');
          ">
      <span id="blackOverlay" class="w-full h-full absolute opacity-50 bg-black"></span>
    </div>
    <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px" style="transform: translateZ(0px)">
      <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
        <polygon class="text-blueGray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
      </svg>
    </div>
  </section>
  <section class="relative py-16 bg-blueGray-200">
    <div class="container mx-auto px-4">
      <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64">
        <div class="px-6">
          <div class="flex flex-wrap justify-center">
            <div class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center">
              <div class="relative">
                <img alt="..." class=" rounded-full   h-32  w-32  p-4" src="../img/juca.jpeg
                ">
              </div>
            </div>
            <div class="w-full lg:w-4/12 px-4 lg:order-3 lg:text-right lg:self-center">
              <div class="py-6 px-3 mt-32 sm:mt-0">
                <button class="bg-blue-950 active:bg-blue-700 uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1 ease-linear transition-all duration-150" type="button">
                  Login out
                </button>
              </div>
            </div>
        </div>

        <div class="my-4 flex flex-col 2xl:flex-row space-y-4 2xl:space-y-0 2xl:space-x-4">
            <div class="w-full flex flex-col 2xl:w-1/3">
                <div class="flex-1 bg-white rounded-lg shadow-xl p-8">
                    <h4 class="text-xl text-gray-900 font-bold">Información personal</h4>
                    <ul class="mt-2 text-gray-700">
                        <li class="flex border-y py-2">
                            <span class="font-bold w-24">Nombre:</span>
                            <span class="text-gray-700">Amanda S. Ross</span>
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-24">Correo electronico:</span>
                            <span class="text-gray-700">@pepe.com</span>
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-24">Numero de telefono:</span>
                            <span class="text-gray-700">777 123 456(503)</span>
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-24">Mobile:</span>
                            <span class="text-gray-700">(123) 123-1234</span>
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-24">Email:</span>
                            <span class="text-gray-700">amandaross@example.com</span>
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-24">Location:</span>
                            <span class="text-gray-700">New York, US</span>
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-24">Languages:</span>
                            <span class="text-gray-700">English, Spanish</span>
                        </li>
                        <li class="flex items-center border-b py-2 space-x-2">
                            <span class="font-bold w-24">Redes sociales:</span>
                            <a href="#" title="Facebook">
                                <svg class="w-5 h-5" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 506.86 506.86"><defs><style>.cls-1{fill:#1877f2;}.cls-2{fill:#fff;}</style></defs><path class="cls-1" d="M506.86,253.43C506.86,113.46,393.39,0,253.43,0S0,113.46,0,253.43C0,379.92,92.68,484.77,213.83,503.78V326.69H149.48V253.43h64.35V197.6c0-63.52,37.84-98.6,95.72-98.6,27.73,0,56.73,5,56.73,5v62.36H334.33c-31.49,0-41.3,19.54-41.3,39.58v47.54h70.28l-11.23,73.26H293V503.78C414.18,484.77,506.86,379.92,506.86,253.43Z"></path><path class="cls-2" d="M352.08,326.69l11.23-73.26H293V205.89c0-20,9.81-39.58,41.3-39.58h31.95V104s-29-5-56.73-5c-57.88,0-95.72,35.08-95.72,98.6v55.83H149.48v73.26h64.35V503.78a256.11,256.11,0,0,0,79.2,0V326.69Z"></path></svg>
                            </a>
                            <a href="#" title="Twitter">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 333333 333333" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd"><path d="M166667 0c92048 0 166667 74619 166667 166667s-74619 166667-166667 166667S0 258715 0 166667 74619 0 166667 0zm90493 110539c-6654 2976-13822 4953-21307 5835 7669-4593 13533-11870 16333-20535-7168 4239-15133 7348-23574 9011-6787-7211-16426-11694-27105-11694-20504 0-37104 16610-37104 37101 0 2893 320 5722 949 8450-30852-1564-58204-16333-76513-38806-3285 5666-5022 12109-5022 18661v4c0 12866 6532 24246 16500 30882-6083-180-11804-1876-16828-4626v464c0 17993 12789 33007 29783 36400-3113 845-6400 1313-9786 1313-2398 0-4709-247-7007-665 4746 14736 18448 25478 34673 25791-12722 9967-28700 15902-46120 15902-3006 0-5935-184-8860-534 16466 10565 35972 16684 56928 16684 68271 0 105636-56577 105636-105632 0-1630-36-3209-104-4806 7251-5187 13538-11733 18514-19185l17-17-3 2z" fill="#1da1f2"></path></svg>
                            </a>
                          
                        </li>
                    </ul>
                </div>

            </div>
            <div class="flex flex-col w-full 2xl:w-2/3">
                <div class="flex-1 bg-white rounded-lg shadow-xl p-8">
                    <h4 class="text-xl text-gray-900 font-bold">Información general a saber: </h4>
                    <p class="mt-2 text-gray-700">En este apartado tu puedes ver toda tu información general que no has proporcionado, la puedes editar a tu placer si así lo deseas. <br>
Puedes ver todos tus comentarios, con ciertas cosas a tomar en cuentan, si en algún comentario publicado visualiza un icon en rojo significa que su mensaje ha sido reportado. En el caso tu comentario no aparezca en este apartado, es administracion a decidido eliminarlo de la web, por diversos motivos, posible atentado a nuestra misión y valores. Para leer más sobre los motivos de la eliminación de su comentario leer nuestras normas y condiciones. 
</p>
                </div>
                <div class="flex-1 bg-white rounded-lg shadow-xl mt-4 p-8">
                    <h4 class="text-xl text-gray-900 font-bold">Comentarios</h4>
                    
                  
<h1>aquí sampen los comentarios backend </h1>
                    
                </div>
            </div>
        </div>
  
    </div>

  

</body>
</html>
<?php

    }
    ?>