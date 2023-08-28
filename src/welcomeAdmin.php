<?php

session_start();
if($_SESSION['ROL'] == 1){

if(isset($_SESSION['ROL'])){
    if($_SESSION['ROL'] == 2){
        header("Location: ./Profile_Journalist.php");
    } elseif($_SESSION['ROL'] == 3){
        header("Location: ./newindex.php");
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../img/AstroFavicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../Public/tailwind.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/boton.css">
    <title>Astro Administrador </title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
     <link rel="stylesheet" href="./css/Translate.css">
</head>
<body>
    <div>
        <section class="relative mx-auto">
            <!-- navbar -->
            <nav class="flex justify-between bg-black text-white ">
            <div class="px-5 xl:px-12 py-6 flex w-full items-center">
            <a href="./WelcomeAdmin.php">
            <img src="../img/AstroFavicon.png" alt="" width="45px"></a>
                <a class="text-3xl font-bold font-heading" href="./welcomeAdmin.php">
                    <!-- <img class="h-9" src="logo.png" alt="logo"> -->
                  Astro <b>Administrador</b> 
                    </a>
                   
                
                    <!-- Nav Links -->
                    <ul class="hidden md:flex px-4 mx-auto font-semibold font-heading space-x-12">
                    <li><a href="./newindex.php" class="hover:text-gray-200" href="#">Home</a></li>
            <li><a href="./welcomeAdmin.php" class="hover:text-gray-200">Administracion</a></li>
            <li><a href="./AdminJourTable.php" class="hover:text-gray-200" >Periodistas</a></li>
            <li><a href="./AdminNewsTable.php" class="hover:text-gray-200" href="#">Noticias</a></li>
            <li><a href="./" class="hover:text-gray-200" href="#">Comentarios</a></li>
                  
                    </ul>
                <!-- Header Icons -->
                <div class="hidden xl:flex items-center space-x-5 ">
            
                    
                    
                
                <!-- Sign In / Register      -->
                <a
                href="./PHP/Logout.php"
                class="bg-black text-white p-3 m-3 font-semibold  cursor-pointer rounded hover:bg-white hover:text-black ease-in duration-200 flex-col "
                >Cerrar Sesion</a
              >
                
                </div>
            </div>
            <!-- Responsive navbar -->
            
            
            </nav>
            
        </section>
        </div>
    
   
	<div class=" bg-red-200 h-96 bg-no-repeat"style="background-image: url(../img/bg.2.jpeg)">
	</div>

      <div class="-mt-64 ">
        <div class="w-full text-center">
            <h1 class="font-bold text-5xl text-black">
                Administrador
            </h1>
          <p class="text-sm tracking-widest  text-gray-700">¿Que desea hacer?</p>
        </div>
      </div>
              
      <div class="grid grid-cols-1 gap-4 sm:grid-cols-3 ">
  
        <a href="./AdminJourTable.php">
          <div class="p-2 sm:p-10 text-center cursor-pointer">
              <div class="py-16 max-w-sm rounded overflow-hidden shadow-lg bg-white hover:bg-gray-300 transition duration-500  ">
                  <div class="space-y-5">
                      <i class="fa fa-user-o" style="font-size:38px;"></i>
                      
                      <div class="px-6 py-4">
                          <div class="space-y-5">
                              <div class="font-bold text-xl mb-2">Periodistas</div>
                              <p class="text-gray-700 text-base">
                                  Aqui podra editar, eliminar o añadir periodistas 
                              </p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

        </a>
          
          <a href="./AdminNewsTable.php">
          <div class="p-2 sm:p-10 text-center cursor-pointer"> 
              <div class="py-16 max-w-sm rounded overflow-hidden shadow-lg bg-orange-300  hover:bg-orange-400 transition duration-500">
                  <div class="space-y-10">
                    <i class="fa fa-list-alt" style="font-size:48px;"></i>
                      <div class="px-6 py-4">
                          <div class="space-y-5">
                              <div class="font-bold text-xl mb-2">Publicaciones</div>
                              <p class="text-base">
                                 Aqui podra editar o eliminar publicaciones
                              </p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

        </a>
        <a href="AdminComTable.php">
  
          <div class="p-2 sm:p-10 text-center cursor-pointer ">
              <div class="py-16 max-w-sm rounded overflow-hidden shadow-lg hover:bg-gray-200 transition duration-500 bg-white ">
                  <div class="space-y-5">
                      <i class="fa fa-edit" style="font-size:38px;"></i>
                      
                      <div class="px-6 py-4">
                          <div class="space-y-5">
                              <div class="font-bold text-xl mb-2">Comentarios</div>
                              <p class="text-gray-700 text-base">
                                  Aqui podras editar los comentarios de los usuarios 
                              </p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </a>
  
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
              <a href="#" class="mx-2 text-sm text-gray-500 transition-colors duration-300 hover:text-gray-500 dark:hover:text-gray-300" aria-label="Reddit">  
                       <div class = "group fixed bottom-0 right-0 p-2  flex items-end justify-end w-24 h-24 " id="google_translate_element">
 </a>

              <a href="#" class="mx-2 text-sm text-gray-500 transition-colors duration-300 hover:text-gray-500 dark:hover:text-gray-300" aria-label="Reddit"> Privacy </a>

              <a href="#" class="mx-2 text-sm text-gray-500 transition-colors duration-300 hover:text-gray-500 dark:hover:text-gray-300" aria-label="Reddit"> Cookies </a>
         
          </div>
      </div>
  </div>
</footer>
  <script>
 <script> 
function googleTranslateElementInit() { new google.translate.TranslateElement({ pageLanguage: "es",includedLanguages: "en,es",}, "google_translate_element" ); } </script>


</body>
</html><?php }else{
    header("Location: ./Error.html");
} ?>