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
        <link rel="stylesheet" href="./css/ProfileImage.css">
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>
    <!-- navbar -->

         <div>
        <section class="relative mx-auto">
            <!-- navbar -->
            <nav class="flex justify-between bg-gray-900 text-white ">
            <div class="px-5 xl:px-12 py-6 flex w-full items-center">
            <a href="./newindex.php">
            <img src="../img/AstroFavicon.png" alt="" width="45px"></a>
                <a class="text-3xl font-bold font-heading" href="./newindex.php">
               
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

    <div class="h-full bg-gray-200 p-8">
        <div class="bg-white rounded-lg shadow-xl pb-8">
         
            <div class="w-full h-[250px]">
                <img src="../img/FireRical.jpg" class="w-full h-full rounded-tl-lg rounded-tr-lg  bg-">
            </div>

            <!-- modal/edicion -->

            <div class="flex flex-col items-center -mt-20"  x-data="{ open: false }">
            <button @click="open = true">
        <img src="../img/<?php echo $_SESSION['ProfileImage'] ?>" class="w-40 border-4 border-white rounded-full">
        </button>
        <div
        x-show="open"
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        x-description="Background backdrop, show/hide based on modal state."
        class="fixed inset-0 flex justify-center item  bg-gray-600 bg-opacity-75 transition-opacity"
      >

      <div class="fixed overflow-y-auto">
        <div
          class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0"
        >
          <div
            x-show="open"
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            x-description="Modal panel, show/hide based on modal state."
            class="relative transform  overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg"
            @click.away="open = true"
          >
            <div
              class="relative  flex items-center justify-center py-2 px-4 sm:px-6 lg:px-8"
            >
              <div class="absolute opacity-60 inset-0 z-0"></div>
              <div class="sm:max-w-lg w-full p-10 bg-white rounded-xl z-10">
                <div class="text-center">
                  <h2 class="mt-5 text-3xl font-bold text-gray-900">
                    Edición de perfil
                  </h2>
                  <p class="mt-2 text-sm text-gray-400">
                    ¿Que te gustaria cambiar?
                  </p>
                </div>
                <form class="mt-8 space-y-3" action="#" method="POST">
                  <div class="grid grid-cols-1 space-y-2">
                    <label class="text-sm font-bold text-gray-500 tracking-wide"
                      >Nombre de usuario</label
                    >
                    <input
                      class="text-base p-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500"
                      type="name"
                      placeholder="Juancito"
                    />
                  </div>
                  <div class="md:space-y-2 mb-3">
                    <label class="text-xs font-semibold text-gray-600 py-2">Elegir foto del
                        periodista<abbr class="hidden" title="required"></abbr></label>
                    <div class="flex items-center py-6">
                        <div class=" mr-4 flex-none rounded-xl border overflow-hidden">
                             <img class=" object-cover rounded-3xl" src="../img/subir.jpg" alt="Current profile photo" id="preview1" height="100px" width="100px"/>
                        </div>
                        <label class="cursor-pointer ">
                            <span
                                class="focus:outline-none text-white text-sm py-2 px-4 rounded-full bg-blue-900  hover:bg-blue-950 hover:shadow-lg">Browse</span>
                            <input required type="file" class="hidden" id="imagde1" accept="image/*" name="imagen">
                        </label>
                    </div>
                </div>
                
                  <div>
                    <button
                      type="submit"
                      class="my-4 w-full flex justify-center bg-blue-500 text-gray-100 p-3 rounded-full tracking-wide font-semibold focus:outline-none focus:shadow-outline hover:bg-blue-600 shadow-lg cursor-pointer transition ease-in duration-300"
                    >
                      Upload
                    </button>
                    <button @click="open = false" type="button" class="py-2.5 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm">
                        Cancel
                    </button>
                    
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    
            <!--Fin modal/edicion -->      
            
                
                <div class="flex items-center space-x-2 mt-2">
                    <p class="text-2xl"><?php  echo $_SESSION['Name'];?></p>
                    
                </div>
                <p class="text-gray-700">Correo: <?php echo $row['Email']; ?> </p>
                <p class="text-sm text-gray-500">Numero telefonico: <?php echo $row['PhoneNumber']?></p>
            </div>
            <div class="flex-1 flex flex-col items-center lg:items-end justify-end px-8 mt-2">
                <div class="flex items-center space-x-4 mt-2">
                    <button class="flex items-center bg-gray-900 hover:bg-gray-800 text-gray-100 px-4 py-2 rounded text-sm space-x-2 transition duration-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"></path>
                        </svg>
                        <span title="Verified >Login out</span>
                    </button>
                    <button class="flex items-center bg-gray-900 hover:bg-gray-800 text-gray-100 px-4 py-2 rounded text-sm space-x-2 transition duration-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Comentarios</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="my-4 flex flex-col 2xl:flex-row space-y-4 2xl:space-y-0 2xl:space-x-4">
            <div class="w-full flex flex-col 2xl:w-1/3">
                <div class="flex-1 bg-white rounded-lg shadow-xl p-8">
                    <h4 class="text-xl text-gray-900 font-bold">¡Edita tu Información personal!</h4>
                    <ul class="mt-2 text-gray-700">
                        <li class="flex border-y py-2">
                            <span class="font-bold w-24">Nombre:</span>
                            <span class="text-gray-700">Amanda S. Ross</span>
                            <input type="text" class="text-gray-700" value>
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