
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
//$email = $_GET['jour'];

$conexion = mysqli_connect('localhost', 'root', '', 'astrodb');
$carpet_images = "../img/";
$query = "SELECT * FROM `reporter` WHERE `email` = '$email'";
$result = mysqli_query($conexion, $query);



while ($row = mysqli_fetch_array($result)) {







?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8"><link rel="shortcut icon" href="../img/AstroFavicon.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil Reportero</title>
    <link rel="stylesheet" href="../Public/tailwind.css">
    <style>
        /* Estilos para hacer la imagen redonda */
        .imagen-circular {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            overflow: hidden;
           
        }
        /* Estilos para asegurar que la imagen ocupe todo el espacio del contenedor circular */
        .imagen-circular img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: relative;
        }
    </style>
  </head>

  <body>

    <!-- component -->
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

    <!-- component -->
  
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

    <main class="profile-page">
      <section class="relative block h-500-px">
        <div class="absolute top-0 w-full h-full bg-center bg-cover " style="
            background-image: '../img/BkgProfile.jpg'
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
                <div class="imagen-circular">
        <!-- Aquí colocas la URL de la imagen -->
        <img src="../img/<?php echo $row['ProfileImage'] ?>" alt="Imagen Circular">
    </div>
            </div>
                <div class="w-full  px-4 lg:order-3 lg:text-right lg:self-center">
                  <div class="py-6 px-3 mt-32 sm:mt-0">
                    <a href="./formsnews.php?jour=<?php echo $email; ?>" class="bg-blue-950 active:bg-blue-700 uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1 ease-linear transition-all duration-150">
                      Escribir Noticia
                    </a>
                  </div>
                </div>

              </div>
       
              <div class="text-center mt-12">
                <h3 class="text-4xl font-semibold leading-normal mb-2 text-blueGray-700 ">
                  <?php echo $row['Name'] ?>
                </h3>
                <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold uppercase">
                  <i class="fas fa fa-at mr-2 text-lg text-blueGray-400"></i><?php echo $row['Email']; ?>
                </div>
                <div class="mb-2 text-blueGray-600 mt-10">
                  ¡Bienvenido fotografo <?php echo $row['LastName'] ?>, esperamos que se encuentre bien en este día. <br> Su número telefónico es <?php echo $row['PhoneNumber'] ?> y su correo es <?php echo $row['Email'] ?>
                </div>
                <div class="mb-2 text-blueGray-600">

                </div>
              </div>
              <div class="mt-10 py-10 border-t border-blueGray-200 text-center">
                <div class="flex flex-wrap justify-center">
                  <div class="w-full lg:w-9/12 px-4">
                    <p class="mb-4 text-lg leading-relaxed text-blueGray-700">
                      <!-- dark theme -->

                    <div class="max-w-2xl w-full mx-auto z-10">
                      <div class="flex flex-col">
                        <?php
                        $reporter = $row['Email'];
                        $new_query = "SELECT * FROM `news` WHERE `id_reporter` = '$reporter'";
                        $new_result = mysqli_query($conexion, $new_query);
                        while ($new_row = mysqli_fetch_array($new_result)) {
                        ?>


                          <!--INICIO DE TARJETA-->
                          <div class="shadow-lg  rounded-3xl p-4 m-4">
                            <div class="flex-none sm:flex">
                              <div class=" relative h-32 w-32   sm:mb-0 mb-3">
                                <img src="<?php echo $carpet_images . $new_row['main_image']; ?>" alt="aji" class=" w-32 h-32 object-cover rounded-2xl">

                              </div>
                              <div class="flex-auto sm:ml-5 justify-evenly">
                                <div class="flex items-center justify-between sm:mt-2">
                                  <div class="flex items-center">
                                    <div class="flex flex-col">
                                      <div class="w-full flex-none text-lg text-gray-700 font-bold leading-none"><?php echo $new_row['headline'] ?></div>
                                      <div class="flex-auto text-gray-700 my-1">
                                        <span class="mr-3 "><?php echo $new_row['Category'] ?></span><span class="mr-3 border-r border-gray-600  max-h-0"></span><span>Casa: <?php echo $new_row['school'] ?></span>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <div class="flex flex-row items-center pb-4">
                                  <div class="flex pb-4">
                                    <?php echo $new_row['drophead'] ?>
                                  </div>
                                  <div class="flex-1 inline-flex   items-center">
                                    k

                                  </div>
                                </div>
                                <div class="flex pt-2  text-sm text-gray-400">
                                  <div class="flex-1 inline-flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                      <path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z">
                                      </path>
                                    </svg>
                                    <p class="">Fotografo: <?php echo $new_row['photographer'] ?></p>
                                  </div>
                                  <div class="flex-1 inline-flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                      <path fill-rule="evenodd" d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z" clip-rule="evenodd"></path>
                                    </svg>
                                    <p class=""><?php echo $new_row['date'] ?></p>
                                  </div><a href=""></a>
                                  <a href="./editnews.php?new=<?php echo $new_row['id_news'] ?>" class="flex-no-shrink bg-green-400 hover:bg-green-500 px-5 ml-4 py-2 text-xs shadow-sm hover:shadow-lg font-medium tracking-wider border-2 border-green-300 hover:border-green-500 text-white rounded-full transition ease-in duration-300">Editar</a>
                                  <a href="./funciones/deletenews.php?new=<?php echo $new_row['id_news']; ?>" class="flex-no-shrink bg-red-400 hover:bg-red-500 px-5 ml-4 py-2 text-xs shadow-sm hover:shadow-lg font-medium tracking-wider border-2 border-red-300 hover:border-red-500 text-white rounded-full transition ease-in duration-300">Eliminar</a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!--INICIO DE TARJETA-->
                        <?php } ?>
                      </div>
                    </div>



                    </p>

                  </div>
                </div>
              </div>
            </div>
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
              <a href="#" class="mx-2 text-sm text-gray-500 transition-colors duration-300 hover:text-gray-500 dark:hover:text-gray-300" aria-label="Reddit"> Teams </a>

              <a href="#" class="mx-2 text-sm text-gray-500 transition-colors duration-300 hover:text-gray-500 dark:hover:text-gray-300" aria-label="Reddit"> Privacy </a>

              <a href="#" class="mx-2 text-sm text-gray-500 transition-colors duration-300 hover:text-gray-500 dark:hover:text-gray-300" aria-label="Reddit"> Cookies </a>
          </div>
      </div>
  </div>
</footer>
      </section>
    </main>



  </body>

  </html>

<?php } ?>