<?php 
session_start();



include("./PHP/editNews-Var.php");
while($row = mysqli_fetch_array($result)){


?>



<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../Public/menu.css">
<link rel="stylesheet" href="../Public/boton.css">
  
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css" integrity="sha256-x8PYmLKD83R9T/sYmJn1j3is/chhJdySyhet/JuHnfY=" crossorigin="anonymous" />
<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;700;900&display=swap" rel="stylesheet">
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css" integrity="sha256-x8PYmLKD83R9T/sYmJn1j3is/chhJdySyhet/JuHnfY=" crossorigin="anonymous" />
<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;700;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    <div>
        <section class="relative mx-auto">
            <!-- navbar -->
            <nav class="flex items-center bg-black p-3 flex-wrap">
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
            <span  >Hogar</span>
          </a>
          <a
            href="./ChalecoIndex.php"
            class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-white  items-center justify-center hover:bg-gray-900 hover:text-white"
          >
            <span>Santa Cecilia</span>
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
            href="./<?php include "./PHP/RestrictAncleRol.php" ?>"
            class=" lg:hidden block  lg:w-auto w-full px-3 py-2 rounded text-white items-center justify-center hover:bg-gray-900 hover:text-white"
          >
            <span><b>Mi Perfil</b></span>
          </a>
          <a href="./<?php include "./PHP/RestrictAncleRol.php" ?>">
        <div class="imagen-circular hidden lg:block" >
        <!-- Aquí colocas la URL de la imagen -->
                    <img src="../img/<?php echo $_SESSION['ProfileImage'] ?>" alt="Imagen Circular" class="h-8 w-8">
                  </div>
                  </a>
    
        </div>
         </div>
    </nav>
        </section>
        </div>
        
    
        <div class="bg-indigo-50 min-h-screen md:px-20 sm:pt-6">
          <div class=" bg-white rounded-md px-6 py-10 max-w-2xl mx-auto">
            <h1 class="text-center text-2xl font-bold text-gray-500 mb-10">Edita Tu Noticia</h1>

            

            <div class="space-y-4">
                <label for="title" ><span class="text-2lx font-bold text-gray-500">Imagen Actual </span><h6><i>Presiona la imagen para editar la foto de tu Noticia.</i></h6></label>


                

              </div>


              <div class="shrink-0 mt-5">





              <div class="flex flex-col items-center " x-data="{ open: false }">
            <button @click="open = true">
              <div>
                <div class=" bg-white p-2 rounded-full md:p-4; ">

                <img class=" object-cover rounded-3xl" src="../img/<?php echo $row['main_image']; ?>" alt="Current profile photo" id="preview1" height="700px" width="700px"/>


              </div>
              </button>
              <div style="display: none;" x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="Background backdrop, show/hide based on modal state." class="fixed inset-0 flex justify-center item  bg-gray-600 bg-opacity-75 transition-opacity">

<div class="fixed overflow-y-auto">
  <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
    <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-description="Modal panel, show/hide based on modal state." class="relative transform  overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg" @click.away="open = true">
      <div class="relative  flex items-center justify-center py-2 px-4 sm:px-6 lg:px-8">
        <div class="absolute opacity-60 inset-0 z-0"></div>
        <div class="sm:max-w-lg w-full p-10 bg-white rounded-xl z-10">
          <div class="text-center">
            <h2 class="mt-5 text-3xl font-bold text-gray-900">
              ¡Edita tu Foto!
            </h2>
            <p class="mt-2 text-sm text-gray-400">
              Selecciona una imagen para cambiar la foto de tu noticia
            </p>
          </div>
          <form class="mt-8 space-y-3" action="./PHP/editImageNew.php?new=<?php echo $new ?>" method="POST" enctype="multipart/form-data">

            <div class="md:space-y-2 mb-3">

              <div class="flex items-center py-6">
                <div class=" mr-4 flex-none rounded-xl border overflow-hidden">
                  <img class=" object-cover rounded-3xl" src="../img/subir.jpg" alt="Current profile photo" id="preview2" height="200px" width="200px" />
                </div>
                <label class="cursor-pointer ">

                  <span class="focus:outline-none text-white text-sm py-2 px-4 rounded-full bg-blue-900  hover:bg-blue-950 hover:shadow-lg">Seleccionar</span>


                  <input required class="hidden" name="imagen" type="file" id="imagde2" accept="image/*">
                  <input type="hidden" name="headline" value="<?php echo $row['headline']; ?>">
                  <input type="hidden" name="photographer" value="<?php echo $row['photographer'] ?>">
                  <input type="hidden" name="id_reporter" value="<?php echo $row['id_reporter'] ?>">


                </label>
                <div class=" flex justify-end relative">
                  <i class="fa fa-eye-slash relative bottom-6 right-6  z-10 cursor-pointer" aria-hidden="true" onclick="mostrar()" class="icon" id="eye" class="translate-y-32"></i>
                </div>
              </div>
            </div>

            <div>
              <i>
                <h6>La imagen se puede tardar unos segundos al actualizar*</h6>
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
<form method="post" enctype="multipart/form-data" action="./PHP/CRUD_New.php">
<input readonly type="hidden" value="<?php echo $row['id_reporter']; ?>" id="reporter" name="id_reporter" class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md"  />


                <input  type="hidden" value="<?php echo $row['id_news']; ?>" id="reporter" name="id_news" class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md"  />

            <input type="hidden" name="imagen" value="<?php echo $row['main_image']?>">
            <div class="w-full p-4">
              <div class="p-2">
                <label for="photographer" class="text-2lx font-bold text-gray-500">Fotógrafo.</label>
                <input  type="text" value="<?php echo $row['photographer']; ?>"  id="photographer" name="photographer" class="ml-2 outline-none py-1 px-30 sm:px-40  text-md border-2 rounded-md"  />
              </div>
              <div class="p-2">
                <label for="headline" class="text-2lx font-bold text-gray-500">Título</label>
                <input maxlength="70" type="text" value="<?php echo $row['headline']; ?>"  id="headline" name="headline" class="ml-2 outline-none py-1 px-30 sm:px-40  text-md border-2 rounded-md"  />
              </div>
              <div class="p-2">
                <label for="drophead" class="text-2lx font-bold text-gray-500">Encabezado</label>
                <input maxlength="75"  type="text" value="<?php echo $row['drophead']; ?>" id="drophead" name="drophead" class="ml-2 outline-none py-1 px-30  sm:px-40 text-md border-2 rounded-md"  />
              </div>
              <div class="p-2">
                <label for="date" class="text-2lx font-bold text-gray-500">Fecha</label>
                <input value="<?php echo $row['date']; ?>" type="date" max="<?php echo date('Y-m-d'); ?>" id="date" name="date" class="ml-2 outline-none py-1 px-30 sm:px-40  text-md border-2 rounded-md"  />
              </div>



</div>


              <div>

                <label for="description" class="block mb-2 text-lg text-gray-500 font-bold">Describe el Primer Párrafo (400 caracteres)</label>
                <textarea id="description" cols="15" rows="5" name="BodyOne"  maxlength="400" placeholder="Escribe tu noticia..." class="w-full font-serif  p-4 text-gray-600 bg-indigo-50 outline-none rounded-md"><?php echo $row['BodyOne']?></textarea>
              </div>
              <div>

<label for="description" class="block mb-2 text-lg text-gray-500 font-bold">Describe el Segundo Párrafo (400 caracteres)</label>
<textarea id="description" cols="15" rows="5" name="BodyTwo"  maxlength="400" placeholder="Escribe tu noticia..." class="w-full font-serif  p-4 text-gray-600 bg-indigo-50 outline-none rounded-md"><?php echo $row['BodyTwo']?></textarea>
</div>
<div>

<label for="description" class="block mb-2 text-lg text-gray-500 font-bold">Describe el Tercer Párrafo (400 caracteres)</label>
<textarea id="description" cols="15" rows="5" name="BodyThree"  maxlength="400" placeholder="Escribe tu noticia..." class="w-full font-serif  p-4 text-gray-600 bg-indigo-50 outline-none rounded-md"><?php echo $row['BodyThree']?></textarea>
</div>

<div>

<label for="description" class="block mb-2 text-lg text-gray-500 font-bold">Describe el Cuarto Párrafo (400 caracteres)</label>
<textarea id="description" cols="15" rows="5" name="BodyFour"  maxlength="400" placeholder="Escribe tu noticia..." class="w-full font-serif  p-4 text-gray-600 bg-indigo-50 outline-none rounded-md"><?php echo $row['BodyFour']?></textarea>
</div>
                <label for="name" class="text-lx font-bold text-gray-500">Seleccione un Colegio:</label>
                <div class="options md:flex md:space-x-6 text-sm items-center text-gray-700 mt-4">

                    <select class="w-full border border-gray-200 p-2 focus:outline-none focus:border-gray-500" name="school">
                      <option value="<?php echo $row['school']; ?>"><?php echo $row['school']; ?> (Actual)</option>
                        <option value="Colegio Don Bosco">Colegio Don Bosco</option>
                        <option value="Instituto Ricaldone">Instituto Ricaldone</option>
                        <option value="Colegio Santa Cecilia">Colegio Santa Cecilia especiales</option>
                        <option value="Colegio María Auxiliadora">Colegio María Auxiliadora</option>
                    </select>
                </div>    
              </div>
              <div>
                <label for="name" class="text-lx font-bold text-gray-500">Seleccione una Categoría:</label>
                <div class="options md:flex md:space-x-6 text-sm items-center text-gray-700 mt-4">

                    <select class="w-full border border-gray-200 p-2 focus:outline-none focus:border-gray-500" name="category">
                    <option value="<?php echo $row['Category']; ?>"><?php echo $row['Category']; ?> (Actual)</option>
                    <option value="Deportes">Deportes</option>
                        <option value="Cultura">Cultura</option>
                        <option value="Eventos Especiales">Eventos Especiales</option>
                        
                    </select>
                </div>    
              </div>
              <div class="pt-4">
           <input class=" px-6 py-2 mx-auto block rounded-md text-lg font-semibold text-indigo-100 bg-gray-800  " type="submit" value="Actualizar" name="edit">
              </div>
            </div>
          </div>
        </div>
      </form>

                <footer class="bg-gray-800">
  <div class="container px-3 py-5 mx-auto">
      <div class="flex flex-col items-center text-center">
          <a href="#">
              <img class="w-auto h-14" src="../img/AstroFavicon.png" alt="">
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

<?php }  ?>  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
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
      preview1.src = '../img/subir.jpg'; // Cambiar a la imagen por defecto
      preview1.style.display = 'block'; // Cambiar a 'block' si deseas mostrar la imagen por defecto
    }
  });
</script>
<script>
  const imagde2 = document.getElementById('imagde2');
  const preview2 = document.getElementById('preview2');

  imagde2.addEventListener('change', function() {
    const archivo = imagde2.files[0];
    if (archivo) {
      const lector = new FileReader();

      lector.addEventListener('load', function() {
        preview2.src = lector.result;
        preview2.style.display = 'block';
      });

      lector.readAsDataURL(archivo);
    } else {
      preview2.src = '../img/subir.jpg'; // Cambiar a la imagen por defecto
      preview2.style.display = 'block'; // Cambiar a 'block' si deseas mostrar la imagen por defecto
    }
  });
</script>
