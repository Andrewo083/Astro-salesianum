<?php
include("./PHP/loginBack.php");
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"><link rel="shortcut icon" href="../img/AstroFavicon.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/boton.css">
    <link rel="stylesheet" href="../Public/menu.css">
    <title>Login</title>
    <script>
        function validarEmail() {
            var emailInput = document.getElementById("email");
            var email = emailInput.value;

            // Verificar si el correo electrónico contiene un punto en el dominio
            if (email.includes(".") && email.indexOf(".") < email.lastIndexOf("@")) {
                alert("Correo electrónico válido");
            } else {
                alert("Correo electrónico inválido");
            }
        }
    </script>
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
<style>
    div iframe {
      display: none !important;
    }

    body {
      top: 0 !important;
    }
    </style>

    <!-- component -->


    <nav class="flex items-center bg-black p-3 flex-wrap">
      <a href="./newindex.php" class="p-2 mr-4 inline-flex items-center">
    <img src="../img/AstroFavicon.png" alt="" class="h-8 w-8 mr-2">
        <span class="text-xl text-white font-bold uppercase tracking-wide"
          >Astro Salesianum</span
        >
      </a>
  
    </nav>

        <!-- component -->
        <div class=" p-4 sm:p-12  ">
            <div class="flex bg-white rounded-lg shadow-lg overflow-hidden mx-auto max-w-sm lg:max-w-4xl">
                <div class="hidden lg:block lg:w-1/2 bg-cover max-h-full" style=" background-image:url('../img/ricaldepo.jpeg') "><i class="text-white" class="text-xs">Fotografías son cortesía de: <a href="https://www.instagram.com/epicyears/"><b>@epicyears!✅</b></a></i> </div>
                <div class="w-full p-8 lg:w-1/2">
                    <h2 class="text-2xl font-semibold text-gray-700 text-center">Login</h2>
                    <p class="text-xl text-gray-600 text-center">Bienvenido de vuelta!</p>
                    <a href="./Registro.php" class="flex items-center justify-center mt-4 text-white rounded-lg shadow-md hover:bg-gray-100">
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
                            <input required value="<?php echo $defaultEmail?>" class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="email" name="Email" id="email">
                        </div>
                        <div class="mt-4 relative">
                            <div class="flex justify-between">
                                <label class="block text-gray-700 text-sm font-bold mb-2">Contraseña</label>

                            </div>
                            <p>
                                <input minlength="8" required class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 w-full relative appearance-none" id="contraseña" type="password" name="Password">
                                
                             
                            </p>
                            <div class=" flex justify-end relative">
                                <i class="fa fa-eye-slash absolute bottom-3 right-2 cursor-pointer" aria-hidden="true" onclick="mostrar()" class="icon" id="eye" class="translate-y-32"></i>
                            </div>
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
                            <button class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600">Login</button>
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

          <p class="max-w-md mx-auto mt-4 text-white">Astro Salesianum</p>

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

</body>

</html>
<script> 
    function googleTranslateElementInit() { new google.translate.TranslateElement({ pageLanguage: "es",includedLanguages: "en,es",}, "google_translate_element" ); } </script>
    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    
    