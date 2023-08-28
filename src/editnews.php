<?php 
session_start();

if($_SESSION['ROL'] == 3){

    header("Location: ./Error.php");

}else{

$conexion = mysqli_connect('localhost', 'root', '', 'astrodb');

$email = $_SESSION['Email'];
$QueryJournalist = "SELECT * FROM reporter WHERE Email = '$email'";
$ResultJournalist = mysqli_query($conexion, $QueryJournalist);
while($RowQuery = mysqli_fetch_array($ResultJournalist)){
  $ProfileImage = $RowQuery['ProfileImage'];
}
$new= $_GET['new'];
$carpet_images = "../img/";
$query = "SELECT * FROM `news` WHERE `id_news` = '$new'";
$result = mysqli_query($conexion, $query);
while($row = mysqli_fetch_array($result)){




?>



<!DOCTYPE html>
<html lang="en">
<head>
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
<style>
        /* Estilos para hacer la imagen redonda */
        .imagen-circular {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            overflow: hidden;
        }
        /* Estilos para asegurar que la imagen ocupe todo el espacio del contenedor circular */
        .imagen-circular img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../img/AstroFavicon.png" type="image/x-icon">
<link rel="stylesheet" href="../Public/tailwind.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="./css/Translate.css">
    <title>¡Editalo!</title>
</head>
<body>
    <div>
        <section class="relative mx-auto">
            <!-- navbar -->
            <nav class="flex justify-between bg-gray-900 text-white ">
            <div class="px-5 xl:px-12 py-6 flex w-full items-center">
            <a href="./newindex.php">
            <img src="../img/AstroFavicon.png" Alt="Imagen representativa de Noticias Astro Salesianum" width="50px"></a>
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
                <a class="hover:text-gray-200" href="#">
                    
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                </a>
                <a class="flex items-center hover:text-gray-200" href="#">
                    
                </a>
                <!-- Sign In / Register      -->
               
             
        <!-- Aquí colocas la URL de la imagen -->
        <?php 
        
        if($_SESSION['ROL'] == 2){
          ?>
           <a class="flex items-center hover:text-gray-200" href="./Profile_Journalist.php">
             <div class="imagen-circular">
 <img src="../img/<?php echo $ProfileImage ?>" alt="Imagen Circular"></div>
 </a>
          <?php

        }else if($_SESSION['ROL'] == 1){
          ?>
          <a
          href="./PHP/Logout.php"
          class="bg-black text-white p-3 m-3 font-semibold  cursor-pointer rounded hover:bg-white hover:text-black ease-in duration-200 flex-col "
          >Cerrar Sesion</a
        ><?php
        }

        ?>
       
                 
                
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
        <div class="flex flex-col items-center -mt-20"  x-data="{ open: false }">
            <button @click="open = true">
              <div>
                <div class=" bg-white p-7 rounded-full" >
            <div class="imagen-circular">
     
     <img src="../img/<?php echo $_SESSION['ProfileImage'] ?>" alt="Foto de perfil"> </div>

              </div>
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
                <form  class="mt-8 space-y-3" action="./PHP/EditUserImage.php?User=<?php echo $_SESSION['Email']?>" method="POST" enctype="multipart/form-data">
                  
                  <div class="md:space-y-2 mb-3">
                    
                    <div class="flex items-center py-6">
                        <div class=" mr-4 flex-none rounded-xl border overflow-hidden">
                        <img class=" object-cover rounded-3xl" src="../img/subir.jpg" alt="Current profile photo" id="preview1" height="200px" width="200px"/>
                        </div>
                        <label class="cursor-pointer ">
                              
                            <span
                                class="focus:outline-none text-white text-sm py-2 px-4 rounded-full bg-blue-900  hover:bg-blue-950 hover:shadow-lg">Seleccionar</span>
                                <input class="hidden" name="imagen" type="file" id="imagde1" accept="image/*" >
                        </label>
                        <div class=" flex justify-end relative">
                                    <i class="fa fa-eye-slash relative bottom-6 right-6  z-10 cursor-pointer" aria-hidden="true"  onclick="mostrar()" class="icon" id="eye" class="translate-y-32"></i>    
                            </div>
                    </div>
                </div>
                
                  <div>
                  <h6>Tu imagen se actualizará al Iniciar Sesión de nuevo*</h6>
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
    <form method="post" enctype="multipart/form-data" action="./PHP/CRUD_New.php">
        <div class="bg-indigo-50 min-h-screen md:px-20 pt-6">
          <div class=" bg-white rounded-md px-6 py-10 max-w-2xl mx-auto">
            <h1 class="text-center text-2xl font-bold text-gray-500 mb-10">Edita Tu Noticia</h1>
            <div class="space-y-4">


              <div>
                <label for="title" class="text-2lx font-bold text-gray-500">Imagen Actual</label>
                <input  type="hidden" value="<?php echo $row['id_reporter']; ?>" id="reporter" name="id_reporter" class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md"  />
                <input  type="hidden" value="<?php echo $row['id_news']; ?>" id="reporter" name="id_news" class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md"  />
              </div>


              <div class="shrink-0 mt-5">


                <img class=" object-cover rounded-3xl" src="../img/<?php echo $row['main_image']; ?>" alt="Current profile photo" id="preview1" height="700px" width="700px"/>


              </div> 

            <input type="hidden" name="imagen" value="<?php echo $row['main_image']?>">
              <div>
                <label for="photographer" class="text-2lx font-bold text-gray-500">Fotografo</label>
                <input  type="text" value="<?php echo $row['photographer']; ?>"  id="photographer" name="photographer" class="ml-2 outline-none py-1 px-40 text-md border-2 rounded-md"  />
              </div>
              <div>
                <label for="headline" class="text-2lx font-bold text-gray-500">Titulo</label>
                <input maxlength="70" type="text" value="<?php echo $row['headline']; ?>"  id="headline" name="headline" class="ml-2 outline-none py-1 px-40 text-md border-2 rounded-md"  />
              </div>
              <div>
                <label for="drophead" class="text-2lx font-bold text-gray-500">Encabezado</label>
                <input maxlength="75"  type="text" value="<?php echo $row['drophead']; ?>" id="drophead" name="drophead" class="ml-2 outline-none py-1 px-40 text-md border-2 rounded-md"  />
              </div>
              <div>
                <label for="date" class="text-2lx font-bold text-gray-500">Fecha</label>
                <input value="<?php echo $row['date']; ?>" type="date" max="<?php echo date('Y-m-d'); ?>  id="date" name="date" class="ml-2 outline-none py-1 px-40 text-md border-2 rounded-md"  />
              </div>






              <div>

                <label for="description" class="block mb-2 text-lg text-gray-500 font-bold">Describe el Primer parrafo (400 caracteres)</label>
                <textarea id="description" cols="15" rows="5" name="BodyOne"  maxlength="400" placeholder="Escribe tu noticia..." class="w-full font-serif  p-4 text-gray-600 bg-indigo-50 outline-none rounded-md"><?php echo $row['BodyOne']?></textarea>
              </div>
              <div>

<label for="description" class="block mb-2 text-lg text-gray-500 font-bold">Describe el Segundo parrafo (400 caracteres)</label>
<textarea id="description" cols="15" rows="5" name="BodyTwo"  maxlength="400" placeholder="Escribe tu noticia..." class="w-full font-serif  p-4 text-gray-600 bg-indigo-50 outline-none rounded-md"><?php echo $row['BodyTwo']?></textarea>
</div>
<div>

<label for="description" class="block mb-2 text-lg text-gray-500 font-bold">Describe el Tercer parrafo (400 caracteres)</label>
<textarea id="description" cols="15" rows="5" name="BodyThree"  maxlength="400" placeholder="Escribe tu noticia..." class="w-full font-serif  p-4 text-gray-600 bg-indigo-50 outline-none rounded-md"><?php echo $row['BodyThree']?></textarea>
</div>

<div>

<label for="description" class="block mb-2 text-lg text-gray-500 font-bold">Describe el Cuarto parrafo (400 caracteres)</label>
<textarea id="description" cols="15" rows="5" name="BodyFour"  maxlength="400" placeholder="Escribe tu noticia..." class="w-full font-serif  p-4 text-gray-600 bg-indigo-50 outline-none rounded-md"><?php echo $row['BodyFour']?></textarea>
</div>
                <label for="name" class="text-lx font-bold text-gray-500">Seleccione un Colegio:</label>
                <div class="options md:flex md:space-x-6 text-sm items-center text-gray-700 mt-4">

                    <select class="w-full border border-gray-200 p-2 focus:outline-none focus:border-gray-500" name="school">
                      <option value="<?php echo $row['school']; ?>"><?php echo $row['school']; ?> (Actual)</option>
                        <option value="Colegio Don Bosco">Colegio Don Bosco</option>
                        <option value="Instituto Ricaldone">Instituto Ricaldone</option>
                        <option value="Colegio Santa Cecilia">Colegio Santa Cecilia especiales</option>
                        <option value="Colegio Maria Auxiliadora">Colegio Maria Auxiliadora</option>
                    </select>
                </div>    
              </div>
              <div>
                <label for="name" class="text-lx font-bold text-gray-500">Seleccione una Categoria:</label>
                <div class="options md:flex md:space-x-6 text-sm items-center text-gray-700 mt-4">

                    <select class="w-full border border-gray-200 p-2 focus:outline-none focus:border-gray-500" name="category">
                    <option value="<?php echo $row['Category']; ?>"><?php echo $row['Category']; ?> (Actual)</option>
                    <option value="Deportes">Deportes</option>
                        <option value="Cultura">Cultura</option>
                        <option value="Eventos Especiales">Eventos Especiales</option>
                        
                    </select>
                </div>    
              </div>
           <input class=" px-6 py-2 mx-auto block rounded-md text-lg font-semibold text-indigo-100 bg-gray-800  " type="submit" value="ACTUALIZAR" name="edit">
              
            </div>
          </div>
        </div>
      </form>

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

  <div class = "group fixed bottom-0 right-0 p-2  flex items-end justify-end w-24 h-24 " id="google_translate_element">

</footer>

<script>
  function googleTranslateElementInit() {
    new google.translate.TranslateElement({
      pageLanguage: 'es',
      includedLanguages: 'es,en',
      layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
    }, 'google_translate_element');
  }
</script>

<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
 

</body>
</html><script>
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

<?php } } ?>