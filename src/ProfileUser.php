<?php

session_start();

if (!isset($_SESSION['Email'])) {
  header("Location: ./Login.php");
  exit();
}

if ($_SESSION['ROL'] != 3) {

  header("Location: ./Error.php");
} else {

  include('./PHP/conexion.php');

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
      <link rel="shortcut icon" href="../img/AstroFavicon.png" type="image/x-icon">
      <link rel="stylesheet" href="./css/ProfileImageUser.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Perfil Astro usuario</title>
      <link rel="stylesheet" href="../Public/tailwind.css">
      <link rel="stylesheet" href="../Public/boton.css">
      <link rel="stylesheet" href="./css/ProfileImageUser.css">
      <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css" integrity="sha256-x8PYmLKD83R9T/sYmJn1j3is/chhJdySyhet/JuHnfY=" crossorigin="anonymous" />
<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    </head>

    <body>
      <!-- navbar -->

      <div>
        <section class="relative mx-auto">
          <!-- navbar -->
          <nav class="flex items-center bg-black p-3 flex-wrap">
      <a href="./newindex.php" class="p-2 mr-4 inline-flex items-center">
    <img src="../img/AstroFavicon.png" alt="" class="h-8 w-8 mr-2">
        <span class="text-xl text-white font-bold uppercase tracking-wide"
          >Astrum Salesianum</span
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
      <!-- end navbar -->

      <!-- component -->

      <div class="h-full bg-gray-200 p-8">
        <div class="bg-white rounded-lg shadow-xl pb-8">

          <div class=" w-full h-[250px] md:h-[550px]  ">
            <img src="../IMAGENES A UTILIZAR/197415563_151826883657521_6274128977836131058_n.jpg" class=" object-cover w-full h-full rounded-tl-lg rounded-tr-lg  ">
          </div>

          <!-- modal/edicion -->

          <div class="flex flex-col items-center -mt-20" x-data="{ open: false }">
            <button @click="open = true">
              <div>
                <div class=" bg-white p-2 rounded-full md:p-4; ">
                  <div class="imagen-circular">

                    <img src="../img/<?php echo $_SESSION['ProfileImage'] ?>" alt="Foto de perfil">
                  </div>

                </div>
            </button>
            <div style="display: none;" x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="Background backdrop, show/hide based on modal state." class="fixed inset-0 flex justify-center item  bg-gray-600 bg-opacity-75 transition-opacity">

              <div class="fixed overflow-y-auto">
                <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                  <div   x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-description="Modal panel, show/hide based on modal state." class="relative transform  overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg" @click.away="open = true">
                    <div class="relative  flex items-center justify-center py-2 px-4 sm:px-6 lg:px-8">
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
                        <form class="mt-8 space-y-3" action="./PHP/EditUserImage.php?User=<?php echo $_SESSION['Email'] ?>" method="POST" enctype="multipart/form-data">

                          <div class="md:space-y-2 mb-3">

                            <div class="flex items-center py-6">
                              <div class=" mr-4 flex-none rounded-xl border overflow-hidden">
                                <img class=" object-cover rounded-3xl" src="../img/subir.jpg" alt="Current profile photo" id="preview1" height="200px" width="200px" />
                              </div>
                              <label class="cursor-pointer ">

                                <span class="focus:outline-none text-white text-sm py-2 px-4 rounded-full bg-blue-900  hover:bg-blue-950 hover:shadow-lg">Seleccionar</span>
                                <input required class="hidden" name="imagen" type="file" id="imagde1" accept="image/*">
                              </label>
                              <div class=" flex justify-end relative">
                                <i class="fa fa-eye-slash relative bottom-6 right-6  z-10 cursor-pointer" aria-hidden="true" onclick="mostrar()" class="icon" id="eye" class="translate-y-32"></i>
                              </div>
                            </div>
                          </div>

                          <div>
                            <i>
                              <h6>Tu imagen se actualizará al Iniciar Sesión de nuevo*</h6>
                            </i>
                            <button type="submit" class="my-4 w-full flex justify-center bg-blue-500 text-gray-100 p-3 rounded-full tracking-wide font-semibold focus:outline-none focus:shadow-outline hover:bg-blue-600 shadow-lg cursor-pointer transition ease-in duration-300">
                              Upload
                            </button>
                            <center>
                              <p @click="open = false" type="button" class="  hover:p-2.5 hover:px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold hover:text-red-500   focus:outline-none focus:ring-2 cursor-pointer focus:ring-red-500 focus:ring-offset-2 transition-all text-sm">
                                Cancel
                              </p>
                            </center>


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
              <p class="text-2xl"><?php echo $_SESSION['Name']; ?></p>

            </div>
            <p class="text-gray-700">Correo: <?php echo $row['Email']; ?> </p>
            <p class="text-sm text-gray-500">Numero telefonico: <?php echo $row['PhoneNumber'] ?></p>
          </div>

        </div>

        <div class="my-4 flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-4">
          <div class="w-full flex flex-col md:w-1/3">
            <div class="flex-1 bg-white rounded-lg shadow-xl p-8">
              <h4 class="text-xl text-gray-900 font-bold">¡Edita tu Información personal!</h4>
              <form action="./PHP/UptdateUser.php?ID=<?php echo $_SESSION['Email'] ?>" method="post">
                <ul class="mt-2 text-gray-700 ">
                  <li class="flex border-y py-2 ">
                    <span class="font-bold w-24 pr-4">Nombre:</span>

                    <input class="text-gray-700 appearance-none w-full" id="name" name="Name" type="text" value="<?php echo $row['Name'] ?>"><label for="name">
                      <span class="material-symbols-outlined w-full">
                        edit
                      </span>
                    </label>
                  </li>
                  <li class="flex border-b py-2">
                    <span class="font-bold w-24 pr-4 p">Apellido:</span>
                    <input class="text-gray-700 w-full" name="LastName" id="LastName" value="<?php echo $row['LastName'] ?>"><label for="LastName">
                      <span class="material-symbols-outlined w-full">
                        edit
                      </span>
                  </li>

                  <input type="hidden" name="Email" class="text-gray-700" id="email" value="<?php echo $row['Email'] ?>">

                  <li class="flex border-b py-2">
                    <span class="font-bold w-24 pr-4">Numero:</span>
                    <input type="tel" class="text-gray-700 w-full " minlength="8" maxlength="9" name="PhoneNumber" id="PhoneNumber" value="<?php echo $row['PhoneNumber'] ?>"><label for="PhoneNumber">
                      <span class="material-symbols-outlined w-full">
                        edit
                      </span>
                  </li>

                  <li class="flex border-b py-2">
                    <span class="font-bold w-24 pr-4">Contraseña:</span>

                    <input class="text-gray-700 w-full" name="Password" minlength="8" id="contraseña" type="password" value="<?php echo $row['Password'] ?>">
                    <div class=" flex justify-end relative">
                      <span onclick="mostrar()" id="eye" class="cursor-pointer material-symbols-outlined w-full">
                        visibility
                      </span>
                    </div>
                  </li>
                  <li class="flex border-b py-2">
                    <button type="submit" class="py-2.5 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm">
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
              include("./PHP/PrintUser.php");
            ?>
              <div class="px-6 py-4 flex-1">
                <!-- A message -->
                <div class="border-b border-gray-600 py-3 flex items-start mb-4 text-sm">
                  <img src="../img/<?php echo $UserProfileImage; ?>" class=" object-cover cursor-pointer w-10 h-10 rounded-3xl mr-3">
                  <div class="flex-1 overflow-hidden">
                    <div>
                      <span class="font-bold text-red-300 cursor-pointer hover:underline"><?php echo $row['Name'] ?></span>

                      <?php
                      $new = $rowCom['id_new'];
                      include "./PHP/PrintNews.php"
                      ?>

                      <span class="font-bold text-gray-400 text-xs"><?php echo $rowCom['hour'] ?></span>&nbsp;&nbsp;<span>de <a href="./NewsMain.php?new=<?php echo $new ?>"><b><?php echo  $NewHeadLine ?></b></a></span>
                    </div>
                    <p class="text-black font-semibold  "><?php echo $rowCom['comment'] ?></p>

                  </div>

                </div>
                <a href="./PHP/DeleteComments.php?ID=<?php echo $rowCom['id_comment'] ?> " class="bg-red-800 pt-2 pr-6 pb-2 pl-6 text-lg font-medium text-gray-100 transition-all
                          duration-200 hover:bg-red-700 rounded-lg">Delete</a>
              </div><?php }

                    ?>

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

        <div class="group fixed bottom-0 right-0 p-2  flex items-end justify-end w-24 h-24 " id="google_translate_element">

      </footer>
    </body>

    </html>
  <?php

  }
  ?>
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
  <script>
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
  <script>
    function mostrar() {
      var tipo = document.getElementById("contraseña");

      if (tipo.type == 'password') {
        tipo.type = 'text';
      } else {
        tipo.type = 'password';
      }
    }
  </script>

<?php } ?>
<script>
  function googleTranslateElementInit() {
    new google.translate.TranslateElement({
      pageLanguage: "es",
      includedLanguages: "en,es",
    }, "google_translate_element");
  }
</script>
<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>