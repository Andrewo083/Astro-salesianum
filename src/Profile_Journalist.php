
<?php
session_start();

include("./PHP/LoginVerif.php");

if(

  $_SESSION['ROL'] == 1 or
  $_SESSION['ROL'] == 3
){
  header("Location ./Error.php");
}


  
  include('./PHP/conexion.php');


include("./PHP/ProfJurnVarOne.php");

while ($row = mysqli_fetch_array($result)) {







?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8"><link rel="shortcut icon" href="../img/AstroFavicon.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil Reportero</title>
    <link rel="stylesheet" href="../Public/menu.css">
      <link rel="stylesheet" href="../Public/boton.css">
    <link rel="stylesheet" href="../Public/menu.css">
    <link rel="stylesheet" href="../Public/tailwind.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css" integrity="sha256-x8PYmLKD83R9T/sYmJn1j3is/chhJdySyhet/JuHnfY=" crossorigin="anonymous" />
<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;700;900&display=swap" rel="stylesheet">
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
     
        <!-- navbar -->
        <nav class="flex items-center bg-black p-3 flex-wrap fixed top-0 w-full" style="z-index: 1000;">
      <a href="./newindex.php" class="p-2 mr-4 inline-flex items-center">
    <img src="../img/AstroFavicon.png" alt="" class="h-8 w-8 mr-2">
        <span class="text-xl text-white font-bold uppercase tracking-wide"
          >Astro Salesianum</span
        >
      </a>
  
      <button
        class="text-white inline-flex p-3 hover:bg-gray-900 rounded lg:hidden ml-auto hover:text-white outline-none nav-toggler"
        data-target="#navigation"
      >
        <i class="material-icons">menu</i>
      </button>
      <div
        class="hidden top-navbar w-full lg:inline-flex lg:flex-grow lg:w-auto"
        id="navigation"
      >
        <div
          class="lg:inline-flex lg:flex-row lg:ml-auto lg:w-auto w-full lg:items-center items-start  flex flex-col lg:h-auto"
        >
          <a
            href="./newindex.php"
            class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-white items-center justify-center hover:bg-gray-900 hover:text-white"
          >
            <span  >Home</span>
          </a>
          <a
            href="./ChalecoIndex.php"
            class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-white  items-center justify-center hover:bg-gray-900 hover:text-white"
          >
            <span  >Chaleco</span>
          </a>
          <a
            href="./DonBoscoIndex.php"
            class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-white  items-center justify-center hover:bg-gray-900 hover:text-white"
          >
            <span  >Don Bosco</span>
          </a>
          <a
            href="./Ricalindex.php"
            class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-white  items-center justify-center hover:bg-gray-900 hover:text-white"
          >
            <span>Ricaldone</span>
          </a>
          <a
            href="./MariaIndex.php"
            class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-white items-center justify-center hover:bg-gray-900 hover:text-white"
          >
            <span>Maria</span>
          </a>
          
          <a
            href="./PHP/Logout.php"
            class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-white items-center justify-center hover:bg-gray-900 hover:text-white"
          >
            <span><b>CERRAR SESION</b></span>
          </a>
    
        </div>
        

       
      </div>
    </nav>

      </section>
    </div>

    <!-- component -->
  
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

    <main class="profile-page">
      <section class="relative block h-500-px">
        <div class="absolute top-0 w-full h-full bg-center bg-cover " style="
            background-image: url('../img/FireRical.jpg');
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
                <div class="imagen-circular" class="flex flex-col items-center -mt-20"  x-data="{ open: false }">
                <button @click="open = true">
        <!-- Aquí colocas la URL de la imagen -->
        <img src="../img/<?php echo $row['ProfileImage'] ?>" alt="Imagen Circular">
        </button>
        <div style="display: none;"
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
                    Actualiza tu Foto de Perfil
                  </h2>
                  <p class="mt-2 text-sm text-gray-400">
                  Selecciona una imagen para cambiar tu foto de perfil
                  </p>
                </div>
                <form class="mt-8 space-y-3" action="./PHP/EditReporterImage.php?User=<?php echo $_SESSION['Email']?>" method="POST" enctype="multipart/form-data">
                  
                  <div class="md:space-y-2 mb-3">
                   
                  <div class="flex items-center py-6">
    <div class="mr-4 flex-none rounded-xl border overflow-hidden w-52">
        <img class="rounded-3xl" src="../img/subir.jpg" alt="Imagen actual" id="preview1" style="width: 200px; height: 200px;"/>
    </div>
    <label class="cursor-pointer">
        <span class="focus:outline-none text-white text-sm py-2 px-4 rounded-full bg-blue-900 hover:bg-blue-950 hover:shadow-lg">Elegir</span>
        <input required type="file" class="hidden" id="imagde1" accept="image/*" name="imagen">
    </label>
</div>

                </div>
                
                  <div>
                  <i><h6>Tu imagen se actualizará al Iniciar Sesión de nuevo*</h6></i>
                    <button
                      type="submit" value="Actualizar"
                      class="my-4 w-full flex justify-center bg-blue-500 text-gray-100 p-3 rounded-full tracking-wide font-semibold focus:outline-none focus:shadow-outline hover:bg-blue-600 shadow-lg cursor-pointer transition ease-in duration-300"
                    >
                      Upload
                    </button>
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
                        <div class="max-w-2xl w-full mx-auto  bg-transparent">
                  <div class="flex flex-col">
                      <div class=" rounded-3xl p-4 m-4 bg-gray-950 text-slate-300">
                          <div class="flex-none sm:flex">
                              <div class=" relative h-32 w-32   sm:mb-0 mb-3">
                                   <img src="<?php echo $carpet_images . $new_row['main_image']; ?>" alt="aji" class=" w-32 h-32 object-cover rounded-2xl">
                              
                              </div>
              <div class="flex-auto sm:ml-5 justify-evenly">
                  <div class="flex items-center justify-between sm:mt-2 ">
                      <div class="flex items-center">
                          <div class="flex flex-col">
                            <div class="w-full flex-none text-lg text-gray-100 font-bold leading-none p-2"><?php echo $new_row['headline'] ?></div>
                              <div class="flex-auto text-gray-100 my-1">
                                   <span class="mr-3 "><?php echo $new_row['Category'] ?></span><span class="mr-3 border-r border-gray-600  max-h-0"></span><span>Casa: <?php echo $new_row['school'] ?></span>
                                    <p class="">Fotografo: <?php echo $new_row['photographer'] ?></p>
                                    <?php echo $new_row['drophead'] ?>
                                   <p class=""><?php echo $new_row['date'] ?></p>

                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="flex flex-row items-center pb-4">
                      <div class="flex pb-4">
                          
                      </div>
                      <div class="flex-1 inline-flex  hidden items-center">
                          

                      </div>
                      </div>
                      <div class="flex pt-2  text-sm text-gray-400">
                      
                          <div class="flex-1 inline-flex items-center">
                          


                              <div class="mt-4 mr-0 mb-0 ml-0 mdpt-0 pr-0 pb-0 sm:pl-14 flex items-center sm:space-x-6 gap-2 pl-0 sm:mt-0">
                          <a href="./editnews.php?new=<?php echo $new_row['id_news'] ?>" class="bg-gray-900 pt-1 pr-3 pb-1 pl-3 sm:pt-2 sm:pr-6 sm:pb-2 sm:pl-6 text-lg font-medium text-gray-100 transition-all
                          duration-200 hover:bg-gray-700 rounded-lg">Editar</a>
                          <form action="./PHP/CRUD_New.php" method="post">
                           <a href="./PHP/ConfirmNewsbyReport.php?new=<?php echo $new_row['id_news']; ?>" type="submit"  name="delete" class="bg-red-800 pt-1 pr-3 pb-1 pl-3 sm:pt-2 sm:pr-6 sm:pb-2 sm:pl-6 text-lg font-medium text-gray-100 transition-all
                          duration-200 hover:bg-red-700 rounded-lg" >Eliminar</a>
                          </form>
                          </div>
                         
                          </div>
                      
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
                        </div>
                        </div>
      </section>
    </main>
           
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

<script> 
function googleTranslateElementInit() { new google.translate.TranslateElement({ pageLanguage: "es",includedLanguages: "en,es",}, "google_translate_element" ); } </script>
<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


  </body>

  </html>

<?php } ?>
<script >
  const imagde1 = document.getElementById('imagde1');
const preview1 = document.getElementById('preview1');

imagde1.addEventListener('change', function() {
  const archivo = imagde1.files[0];
  if (archivo) {
    const lector = new FileReader();

    lector.addEventListener('load', function() {
      preview1.src = lector.result;
      preview1.style.display = 'block';
    });

    lector.readAsDataURL(archivo);
  } else {
    preview1.src = '#';
    preview1.style.display = 'none';
  }
});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function() {
      $(".nav-toggler").each(function(_, navToggler) {
        var target = $(navToggler).data("target");
        $(navToggler).on("click", function() {
          $(target).animate({
            height: "toggle"
          });
        });
      });
    });
  </script>
<?php 

?>