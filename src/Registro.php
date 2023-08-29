<?php 
include("./PHP/InsertRegistro.php");?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"><link rel="shortcut icon" href="../img/AstroFavicon.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="../Public/tailwind.css">
    <link rel="stylesheet" href="../Public/boton.css">
 
    <script>
        function mostrar(){
    var tipo = document.getElementById("contraseña");

    if(tipo.type == 'password'){
      tipo.type = 'text';
    }else{
      tipo.type = 'password';
    }
  }
    </script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="./css/Translate.css">
</head>


<body>

    <!-- component -->


    <div>
        <section class="relative mx-auto">
            <!-- navbar -->
            <nav class="flex justify-between bg-gray-900 text-white ">
                <div class="px-5 xl:px-12 py-6 flex w-full items-center">   
                    <a href="./index.html">
                    <img src="../img/AstroFavicon.png" Alt="Imagen representativa de Noticias Astro Salesianum" width="45px"></a>
                    <a class="text-3xl font-bold font-heading" href="./index.html">
                        <!-- <img class="h-9" src="logo.png" alt="logo"> -->
                 Astro Salesianum
                </a>
                <!-- Nav Links -->
                 <ul class="hidden md:flex px-4 mx-auto font-semibold font-heading space-x-12">
       
                </ul>
                    <!-- Header Icons -->
                    <div class="hidden xl:flex items-center space-x-5 items-center">
                        <a class="hover:text-gray-200" href="#">

                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
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
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">

                    </svg>
                </a>
            </nav>

        </section>

        <!-- component -->
        <div class="sm:p-44">
            <div class="flex bg-white rounded-lg shadow-lg overflow-hidden mx-auto max-w-sm lg:max-w-4xl">
                <div class="hidden lg:block lg:w-1/2 bg-cover max-h-full"
                    style=" background-image:url('../img/ricaldepo.jpeg') "></div>
                <div class="w-full p-8 lg:w-1/2">
                    <h2 class="text-2xl font-semibold text-gray-700 text-center">Registrarse</h2>
                    <p class="text-xl text-gray-600 text-center">Bienvenido de vuelta!</p>
                    <a href="./Login.php"
                        class="flex items-center justify-center mt-4 text-white rounded-lg shadow-md hover:bg-gray-100">
                        <div class="px-4 py-3">

                            <img src="../img/AstroFavicon.png" class="h-10 w-10" viewBox="0 0 40 40">

                        </div>
                        <h1 class="px-4 py-3 w-5/6 text-center text-gray-600 font-bold">Ya tengo cuenta! </h1>
                    </a>
                    <div class="mt-4 flex items-center justify-between">
                        <span class="border-b w-1/5 lg:w-1/4"></span>
                        <a href="#" class="text-xs text-center text-gray-500 uppercase"> Ingresa tus datos</a>
                        <span class="border-b w-1/5 lg:w-1/4"></span>
                    </div>
                    <form action="./Registro.php" method="post">

                        <div class="mt-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Nombre</label>
                            <input required
                                class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"
                                type="text" name="Name">
                        </div>
                        <div class="mt-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Apellido</label>
                            <input required
                                class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"
                                type="text" name="LastName">
                        </div>
                        <div class="mt-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Correo</label>
                            <input required
                                class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"
                                type="email" id="email" name="Email">
                        </div>
                        <div class="mt-4">
                            <label for="PhoneNumber" class="block text-gray-700 text-sm font-bold mb-2">Numero Telefonico</label>
                            <input id="PhoneNumber" required maxlength="14" minlength="13"
                                class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"
                                type="tel" name="PhoneNumber" value="+503 ">
                        </div>
                        <div class="pb-10 mt-4 relative">
                            
                            <div class="flex justify-between">
                                <p><label class="block text-gray-700 text-sm font-bold mb-2">Contraseña</label></p>
                            <br> 
                            </div>
                            <i> <h6>Debe tener  8 caracteres, una  mayúscula y un carácter especial*</h6></i>
                            <input required id="contraseña"
                            
                                class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none absolute"
                                type="password" name="password" minlength="8"/>
                                
                        </div>
                    
                        <div class=" flex justify-end relative">
                            <i class="fa fa-eye-slash absolute bottom-3 right-2 cursor-pointer" aria-hidden="true"  onclick="mostrar()" class="icon" id="eye" class="translate-y-32"></i>    
                    </div>


                    <?php if (!empty($errorCorreo)) { ?>
        <span class="text-red-500"><?= $errorCorreo ?></span>
    <?php } ?>

    <!-- Mostrar mensajes de éxito o espera -->
    <?php if (!empty($exitoRegistro)) { ?>
        <span class="text-green-500"><?= $exitoRegistro ?></span>
    <?php } elseif (!empty($esperaRegistro)) { ?>
        <span class="text-blue-500"><?= $esperaRegistro ?></span>
    <?php } ?>


                        <div class="mt-8">
                            <button onclick="validarEmail()"
                                class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600">Registrarse</button>
                        </div>
                    </form>
                    <div class="mt-4 flex items-center justify-between">
                        <span class="border-b w-1/5 md:w-1/4"></span>
                        <a href="./index.html" class="text-xs text-gray-500 uppercase">Volver</a>
                        <span class="border-b w-1/5 md:w-1/4"></span>
                    </div>
                </div>
            </div>
        </div>
            <footer class="bg-gray-800">
<div class="container px-3 py-5 mx-auto">
    <div class="flex flex-col items-center text-center">
        <a href="#">
            <img class="w-auto h-14" src="../img/AstroFavicon.png" Alt="Imagen representativa de Noticias Astro Salesianum">
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
    function googleTranslateElementInit() { new google.translate.TranslateElement({ pageLanguage: "es",includedLanguages: "en,es",}, "google_translate_element" ); } </script>
    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    
    
</body>

</html>