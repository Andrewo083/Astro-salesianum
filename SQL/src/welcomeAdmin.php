<?php

session_start();

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
    <title>Astro Salesianum</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
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
                  Astro Administrador
                    </a>
                   
                
                    <!-- Nav Links -->
                    <ul class="hidden md:flex px-4 mx-auto font-semibold font-heading space-x-12">
                    <li><a   class="hover:text-gray-200" href="./newindex.php">Home</a></li>
                    <li><a href="./tableusu.php" class="hover:text-gray-200" >Periodistas</a></li>
                    <li><a href="./AdminNewsTable.php" class="hover:text-gray-200" href="#">Noticias</a></li>
                    <li><a href="./TableComments.php" class="hover:text-gray-200" href="#">Comentarios</a></li>
                  
                    </ul>
                <!-- Header Icons -->
                <div class="hidden xl:flex items-center space-x-5 ">
            
                    
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
  
                
                <!-- Sign In / Register      -->
                <a
                href="./funciones/Logout.php"
                class="bg-black text-white p-3 m-3 font-semibold  cursor-pointer rounded hover:bg-white hover:text-black ease-in duration-200 flex-col "
                >Cerrar Sesion</a
              >
                
                </div>
            </div>
            <!-- Responsive navbar -->
            
            <a class="navbar-burger self-center mr-12 xl:hidden" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    
                </svg>
            </a>
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
  
        <a href="./tableusu.php">
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
        <a href="TableComments.php">
  
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
  

</body>
</html>