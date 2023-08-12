<?php
    



    include('./funciones/conexion.php');

    $conexion = mysqli_connect('localhost', 'root', '', 'astrodb');

    if (!$conexion) {
        die("Error en la conexión: " . mysqli_connect_error());
    }

    $query = "SELECT * FROM `comments`";
    $result = mysqli_query($conexion, $query);

    if ($result) {
      if (mysqli_num_rows($result) > 0) {
          // Resto del código para mostrar los comentarios
      } else {
          echo "No hay comentarios.";
      }
  } else {
      echo "Error en la consulta: " . mysqli_error($conexion);
  }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../Public/tailwind.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body  class="w-full h-screen bg-no-repeat bg-cover"
style="background-image: url('../img/bg_4.jpg');">
<div>
        <section class="relative mx-auto">
            <!-- navbar -->
            <nav class="flex justify-between bg-black text-white ">
            <div class="px-5 xl:px-12 py-6 flex w-full items-center">
                <a class="text-3xl font-bold font-heading" href="../src/maindex.html">
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
                <a class="hover:text-gray-200" href="#">
                    
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
<a>
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

    <!-- tabla-->

     
        
    <div class=" pt-12 pr-0 pb-12 pl-0 mt-0 mr-auto mb-0 ml-auto sm:py-16 lg:py-20">
        <div class="pt-0 pr-4 pb-0 pl-4 mt-0 mr-auto mb-0 ml-auto max-w-7xl sm:px-6 lg:px-8">
          <div class="pt-0 pr-4 pb-0 pl-4 mt-0 mr-auto mb-0 ml-auto max-w-4xl sm:px-6 lg:px-8">
            <div class="pt-0 pr-4 pb-0 pl-4 mt-0 mr-auto mb-0 ml-auto sm:flex sm:items-center sm:justify-between">
              <div>
                <p class="text-xl font-bold text-gray-700">Aqui podras ver los comentarios</p>
                <p class="text-sm mt-1 mr-0 mb-0 ml-0 font-semi-bold text-gray-600">Aqui podras llevar un control de los comentarios</p>
              </div> 
            </div>
            <div class="shadow-xl mt-8 mr-0 mb-0 ml-0 pt-4 pr-10 pb-4 pl-10 flow-root rounded-lg sm:py-2">
                
               		<!-- Chat content -->
							<div class="flex-1 flex flex-col bg-gray-100 overflow-hidden container mx-auto px-6 shadow-xl  pl-10  rounded-lg sm:py-2">
								<!-- Top bar -->
                
					
								<!-- Chat messages -->
								<div class="px-6 py-4 flex-1">
									<!-- A message -->
									<div class="border-b border-gray-600 py-3 flex items-start mb-4 text-sm">
										<img src="../img/user.jpg" class="cursor-pointer w-10 h-10 rounded-3xl mr-3">
										<div class="flex-1 overflow-hidden">
											<div>
												<span class="font-bold text-red-300 cursor-pointer hover:underline">User</span>
												<span class="font-bold text-gray-400 text-xs">09:23</span>
											</div>
											<p class="text-black font-semibold  ">Me gustaria una  chonguenga</p>
                      
										</div>
                    <div class="mt-4 mr-0 mb-0 ml-0 pt-0 pr-0 pb-0 pl-14 flex items-center sm:space-x-6 sm:pl-0 sm:mt-0">
                   
                      <a href=" " class="bg-red-800 pt-2 pr-6 pb-2 pl-6 text-lg font-medium text-gray-100 transition-all
                          duration-200 hover:bg-red-700 rounded-lg">Delete</a>
                    </div>
									</div>
								</div>
                
                	<!-- message finish -->
							</div>
       
      </div>
</body>
</html>