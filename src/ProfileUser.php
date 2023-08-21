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
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

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
                <div class=" xl:flex items-center space-x-3 ">
           
              <!-- Sign In / Register      -->
              <a
                href="./funciones/Logout.php"
                class="bg-black text-white p-3 font-semibold  cursor-pointer rounded hover:bg-white hover:text-black ease-in duration-200 flex-col "
                >Cerrar Sesion</a
              >

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
                   ¡Edita tu Foto!
                  </h2>
                  <p class="mt-2 text-sm text-gray-400">
                    Selecciona una imagen para cambiar tu foto de perfil
                  </p>
                </div>
                <form class="mt-8 space-y-3" action="#" method="POST">
                  
                  <div class="md:space-y-2 mb-3">
                    
                    <div class="flex items-center py-6">
                        <div class=" mr-4 flex-none rounded-xl border overflow-hidden">
                             <img class=" object-cover rounded-3xl" src="../img/subir.jpg" alt="Current profile photo" id="preview1" height="300px" width="300px"/>
                        </div>
                        <label class="cursor-pointer ">
                       
                            <span
                                class="focus:outline-none text-white text-sm py-2 px-4 rounded-full bg-blue-900  hover:bg-blue-950 hover:shadow-lg">Seleccionar</span>
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
                    </button> <center><p @click="open = false" type="button" class="hover:p-2.5 hover:px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold hover:text-red-500   focus:outline-none focus:ring-2 cursor-pointer focus:ring-red-500 focus:ring-offset-2 transition-all text-sm">
                        Cancel
    </p></center>
                    
                    
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
                    <form action="./Funciones/" method="post">
                    <ul class="mt-2 text-gray-700">
                        <li class="flex border-y py-2">
                            <span class="font-bold w-24">Nombre:</span>
                           
                           <input  class="text-gray-700 appearance-none " id="name" name="Name" type="text" value="<?php echo $row['Name']?>"
                           ><label for="name">
                              <span class="material-symbols-outlined">
                                edit
                              </span>
                            </label>
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-24">Apellido</span>
                            <input  class="text-gray-700" name="LastName" id="LastName" value="<?php echo $row['LastName']?>" 
                           ><label for="LastName">
                              <span class="material-symbols-outlined">
                                edit
                              </span>
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-24">Correo electronico:</span>
                            <input name="PhoneNumber" class="text-gray-700" id="email" value="<?php echo $row['Email']?>" 
                           ><label for="email">
                              <span class="material-symbols-outlined">
                                edit
                              </span>
                            </label>
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-24">Numero de telefono:</span>
                            <input  class="text-gray-700" name="PhoneNumber" id="PhoneNumber" value="<?php echo $row['PhoneNumber']?>" 
                           ><label for="PhoneNumber">
                              <span class="material-symbols-outlined">
                                edit
                              </span>
                        </li>
                        
                        <li class="flex border-b py-2">
                            <span class="font-bold w-24">Contraseña</span>
                           
                            <input  class="text-gray-700" name="Password" id="Password" type="password" value="<?php echo $row['Password']?>" 
                           ><label for="Password">
                              <span class="material-symbols-outlined">
                                edit
                              </span>
                        </li>
                        <li class="flex border-b py-2">
                          <button  type="submit" class="py-2.5 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm">
                           Editar
                            </button>
                        </li>
                    
                        
                        
                    </ul>
                    </form>
                </div>

            </div>
            
                <div class="flex-1 bg-white rounded-lg shadow-xl mt-4 p-8">
                    <h4 class="text-xl text-gray-900 font-bold">Comentarios</h4>
                    
                  
<h1>¡Tus Comentarios en Nuestras Noticia están Aquí!</h1>
<?php 
$email =  $row['Email'];

 $queryCom = "SELECT * FROM `comments` WHERE `id_user` = '$email'";
  $resultCom = mysqli_query($conexion, $queryCom);
  while ($rowCom = mysqli_fetch_array($resultCom)) {
    include("./Funciones/PrintUser.php");
    ?>
 <div class="px-6 py-4 flex-1">
              <!-- A message -->
              <div class="border-b border-gray-600 py-3 flex items-start mb-4 text-sm">
										<img src="../img/<?php echo $UserProfileImage;?>" class="cursor-pointer w-10 h-10 rounded-3xl mr-3">
                <div class="flex-1 overflow-hidden">
                  <div>
                    <span class="font-bold text-red-300 cursor-pointer hover:underline"><?php echo $row['Name'] ?></span>

                    <?php 
                    $new = $rowCom['id_new'];
                    include "./Funciones/PrintNews.php"
                     ?>

                    <span class="font-bold text-gray-400 text-xs"><?php echo $rowCom['hour'] ?></span>&nbsp;&nbsp;<span>de <b><?php echo  $NewHeadLine ?></b></span> 
                  </div>
                  <p class="text-black font-semibold  "><?php echo $rowCom['comment'] ?></p>

                </div>
                <div class="mt-4 mr-0 mb-0 ml-0 pt-0 pr-0 pb-0 pl-14 flex items-center sm:space-x-6 sm:pl-0 sm:mt-0">

               
               
                    <a href="./Funciones/DeleteComments.php?ID=<?php echo $rowCom['id_comment'] ?> " class="bg-red-800 pt-2 pr-6 pb-2 pl-6 text-lg font-medium text-gray-100 transition-all
                          duration-200 hover:bg-red-700 rounded-lg">Delete</a>
                  
                </div>
              </div>
            </div><?php }

?>
                    
                </div>
            </div>
        </div>
  
    </div>

  

</body>
</html>
<?php

  }
    ?>