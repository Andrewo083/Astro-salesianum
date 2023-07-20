<?PHP

$conexion = mysqli_connect('localhost', 'root', '', 'astrodb');

$query = "SELECT * FROM `news` WHERE `school` = 'Colegio Don Bosco'";
$result = mysqli_query($conexion, $query);
while($row = mysqli_fetch_array($result)){

  $carpet_images = "../img/";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/tailwind.css" />
    <title>Document</title>
</head>
<body>
    <div>
        <section class="relative mx-auto">
            <!-- navbar -->
            <nav class="flex justify-between bg-gray-900 text-white w-screen">
            <div class="px-5 xl:px-12 py-6 flex w-full items-center">
                <a class="text-3xl font-bold font-heading" href="../src/maindex.html">
                <!-- <img class="h-9" src="logo.png" alt="logo"> -->
                Astro
                </a>
                <!-- Nav Links -->
                <ul class="hidden md:flex px-4 mx-auto font-semibold font-heading space-x-12">
                <li><a class="hover:text-gray-200" href="#">Home</a></li>
                <li><a class="hover:text-gray-200" href="#">Casas</a></li>
                <li><a class="hover:text-gray-200" href="#">Nosotros</a></li>
                <li><a class="hover:text-gray-200" href="#">Categorias</a></li>
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
<div class="text-gray-900 pt-12 pr-0 pb-14 pl-0 bg-white">
    <div class="w-full pt-4 pr-5 pb-6 pl-5 mt-0 mr-auto mb-0 ml-auto space-y-5 sm:py-8 md:py-12 sm:space-y-8 md:space-y-16
        max-w-7xl">
      <div class="flex flex-col items-center sm:px-5 md:flex-row">
        <div class="flex flex-col items-start justify-center w-full h-full pt-6 pr-0 pb-6 pl-0 mb-6 md:mb-0 md:w-1/2">
          <div class="flex flex-col items-start justify-center h-full space-y-3 transform md:pr-10 lg:pr-16
              md:space-y-5">
            <div class="bg-black flex items-center leading-none rounded-full text-gray-50 pt-1.5 pr-3 pb-1.5 pl-2
                uppercase inline-block">
              <p class="inline">
                <svg class="w-3.5 h-3.5 mr-1" fill="currentColor" viewbox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0
                    00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755
                    1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1
                    0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
              </p>
              <p class="inline text-xs font-medium">COLEGIO DON BOSCO</p>
            </div>
            <a class="text-4xl font-bold leading-none lg:text-5xl xl:text-6xl">Bienvenidos Don Bosco</a>
            <div class="pt-2 pr-0 pb-0 pl-0">
              <p class="text-sm font-medium inline">Ubicación: Km 1 1/2 Calle a Plan del Pino, Ciudadela Don Bosco, 884204 Soyapango</p>
              <a class="inline text-sm font-medium mt-0 mr-1 mb-0 ml-1">Derechos </a>
              <p class="inline text-sm font-medium mt-0 mr-1 mb-0 ml-1">reservados por</p>
              <p class="text-black text-sm font-medium inline mt-0 mr-1 mb-0 ml-1">Astro salesianum</p>
            </div>
          </div>
        </div>
        <div class="w-full md:w-1/2">
          <div class="block">
            <img
                src="../img/rical.jpeg" class="object-cover rounded-lg max-h-64 sm:max-h-96 btn- w-full h-full"/>
          </div>
        </div>
      </div>
      <div class="grid grid-cols-12 sm:px-5 gap-x-8 gap-y-16">



        <!--INCIO DE NOTICIA-->
        <div class="flex flex-col items-start col-span-12 space-y-3 sm:col-span-6 xl:col-span-4">
          <img
              src="../img/ricaldepo.jpeg" class="object-cover w-full mb-2 overflow-hidden rounded-lg shadow-sm max-h-56 btn-"/>
          <p class="bg-black flex items-center leading-none text-sm font-medium text-gray-50 pt-1.5 pr-3 pb-1.5 pl-3
              rounded-full uppercase inline-block"><?php echo $row['Category'];?></p>
          <a class="text-lg font-bold sm:text-xl md:text-2xl">Improving your day to the MAX</a>
          <p class="text-sm text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
          <div class="pt-2 pr-0 pb-0 pl-0">
            <a class="inline text-xs font-medium mt-0 mr-1 mb-0 ml-0 underline">Jack Sparrow</a>
            <p class="inline text-xs font-medium mt-0 mr-1 mb-0 ml-1">· 23rd, March 2021 ·</p>
            <p class="inline text-xs font-medium text-gray-300 mt-0 mr-1 mb-0 ml-1">1hr 20min. read</p>
          </div>
        </div>
         <!--FIN DE NOTICIA-->




        
       
      </div>
    </div>
  </div> 
  
</body>
</html>
<?php } ?>