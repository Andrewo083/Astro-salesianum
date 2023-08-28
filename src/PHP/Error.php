<?php 
session_start();
echo $_SESSION['ROL'];

?>

<!DOCTYPE html>
<html lang="en">
<head><link rel="shortcut icon" href="../img/AstroFavicon.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/boton.css">
    <title>Error</title>
</head>
<link rel="stylesheet" href="../Public/tailwind.css">
<body>
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
</div>

    <!-- component -->
    <div
      id="button"
      class="hidden container mx-auto flex justify-center items-center px-4 md:px-10 py-20"
    >
      <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
      <button
        onclick="openModal()"
        class="bg-white text-gray-800 py-5 px-10 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white rounded"
      >
        sdsd
      </button>
    </div>
    <div style=" background-image: url(../IMAGENES\ A\ UTILIZAR/IMG_20230812_211351.jpg);"
      id="modal"
      class="container mx-auto flex justify-center items-center px-4 md:px-10 py-20"
    >
      <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
      <div
        class="bg-white dark:bg-gray-800 px-3 md:px-4 py-12 flex flex-col justify-center items-center"
      >
     
        <h1
          class="mt-8 md:mt-12 text-3xl lg:text-4xl font-semibold leading-10 text-center text-gray-800 text-center md:w-9/12 lg:w-7/12 dark:text-white"
        >
          Error 403
        </h1>
        <p
          class="mt-10 text-base leading-normal text-center text-gray-600 md:w-9/12 lg:w-7/12 dark:text-white"
        >
          Lo sentimos falta algun dato, hay un dato incorrecto o no se puede realizar esta accion.
        </p>
        <div class="mt-12 md:mt-14 w-full flex justify-center">
          <a href="./newindex.php"
            onclick="closeModal()"
            class="dark:text-white dark:border-white w-full sm:w-auto border border-gray-800 text-base font-medium text-gray-800 py-5 px-14 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 hover:bg-gray-800 hover:text-white dark:hover:text-white dark:hover:bg-gray-700"
          >
            Regresar
          </a>
        </div>
      </div>
    </div>

    <script>
      const openModal = () => {
        document.getElementById("button").classList.add("hidden");
        document.getElementById("modal").classList.remove("hidden");
      };
      const closeModal = () => {
        document.getElementById("button").classList.remove("hidden");
        document.getElementById("modal").classList.add("hidden");
      };
    </script>
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
</footer>
</body>
</html>
<script> 
    function googleTranslateElementInit() { new google.translate.TranslateElement({ pageLanguage: "es",includedLanguages: "en,es",}, "google_translate_element" ); } </script>
    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    
    
    