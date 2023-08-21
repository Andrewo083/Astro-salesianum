<?php
session_start();
$email = $_SESSION['Email'];
if (!isset($_SESSION['Email'])) {
  header("Location: ./Login.php");
  exit();
}else{
  
include("./Funciones/PrintUser.php")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"><link rel="shortcut icon" href="../img/AstroFavicon.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil periodista
    </title>
    <link rel="stylesheet" href="../Public/tailwind.css">
    <script
      defer
      src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"
    ></script>
</head>
<body>

      <!-- component -->
<div>
<section class="relative mx-auto">
    <!-- navbar -->
    <nav class="flex justify-between bg-gray-900 text-white ">
    <div class="px-5 xl:px-12 py-6 flex w-full items-center">
        <a class="text-3xl font-bold font-heading" href="#">
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
        <div class="hidden xl:flex items-center space-x-5 items-center">
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
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

<main class="profile-page">
  <section class="relative block h-500-px">
    <div class="absolute top-0 w-full h-full bg-center bg-cover" style="
            background-image: url('https://images.unsplash.com/photo-1499336315816-097655dcfbda?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2710&amp;q=80');
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
              <div class="relative">
                <img alt="..." class=" rounded-full   h-32  w-32  p-4" src="../img/juca.jpeg" >
              </div>
            </div>
            <div class="w-full lg:w-4/12 px-4 lg:order-3 lg:text-right lg:self-center">
              <div class="py-6 px-3 mt-32 sm:mt-0">
                <button class="bg-blue-950 active:bg-blue-700 uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1 ease-linear transition-all duration-150" type="button">
                  Login out
                </button>
             

    <div
      class=" relative flex  items-center  bg-white "
      x-data="{ open: false }"
    >
      <div class="">
        <button
          @click="open = true"
          class="rounded-lg bg-blue-50 px-5 py-2.5 text-sm font-medium text-blue-500 hover:bg-blue-100 hover:text-blue-600"
        >
          Show Modal
        </button>
      </div>
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
    </div>
              </div>
            </div>
            <div class="w-full lg:w-4/12 px-4 lg:order-1">
              <div class="flex justify-center py-4 lg:pt-4 pt-8">
                <div class="mr-4 p-3 text-center">
                  <span class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">0</span><span class="text-sm text-blueGray-400">Noticias</span>
                </div>
                <div class="mr-4 p-3 text-center">
                  <span class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">0</span><span class="text-sm text-blueGray-400">Comentarios</span>
                </div>
              
              </div>
            </div>
          </div>
          <div class="text-center mt-12">
            <h3 class="text-4xl font-semibold leading-normal mb-2 text-blueGray-700 mb-2">
              <?php echo $Name; ?>
            </h3>
            <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold uppercase">
              <i class="fas fa-map-marker-alt mr-2 text-lg text-blueGray-400"></i>Colegio Don Bosco 
            </div>
            <div class="mb-2 text-blueGray-600 mt-10">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio sit, debitis nobis enim nemo blanditiis delectus totam ducimus sint fuga, earum labore vel, eligendi consequatur ad magni neque facilis eius.
            </div>
            <div class="mb-2 text-blueGray-600">
              texto de chill
            </div>
          </div>
          <div class="mt-10 py-10 border-t border-blueGray-200 text-center">
            <div class="flex flex-wrap justify-center">
              <div class="w-full lg:w-9/12 px-4">
                <p class="mb-4 text-lg leading-relaxed text-blueGray-700">
                <!-- dark theme -->
	
<!-- component -->
<div class="h-screen flex flex-col">
  
  <div>
      <div class="shadow-lg pt-4 ml-2 mr-2 rounded-lg">
          <a href="#" class="block bg-white py-3 border-t pb-4">
              <div class="px-4 py-2 flex  justify-between">
                  <span class="text-sm font-semibold text-gray-900">Gloria Roberston</span>
                  <div class="flex">
                      <span class="px-4 text-sm font-semibold text-gray-600"> yesterday</span>
                      <img class="h-6 w-6 rounded-full object-cover"
                          src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=144&q=80"
                          alt="">
                  </div>
              </div>
              <p class="px-4 py-2 text-sm font-semibold text-gray-700"">Lorem mmmmm ipsum dolor sit amet consectetur adipisicing elit. Iusto adipisci laudantium <br> iste delectus explicabo id molestiae cupiditate corrupti distinctio alias. <br> Temporibus quae tenetur quod cupiditate, nostrum tempore inventore maxime ut! </p>
          </a>
      </div>
      <div class="shadow-lg pt-4 ml-2 mr-2 rounded-lg">
          <a href="#" class="block bg-white py-3 border-t pb-4">
              <div class="px-4 py-2 flex  justify-between">
                  <span class="text-sm font-semibold text-gray-900">Gloria Roberston</span>
                  <div class="flex">
                      <span class="px-4 text-sm font-semibold text-gray-600"> yesterday</span>
                      <img class="h-6 w-6 rounded-full object-cover"
                          src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=144&q=80"
                          alt="">
                  </div>
              </div>
              <p class="px-4 py-2 text-sm font-semibold text-gray-700"">Lorem mmmmm ipsum dolor sit amet consectetur adipisicing elit. Iusto adipisci laudantium <br> iste delectus explicabo id molestiae cupiditate corrupti distinctio alias. <br> Temporibus quae tenetur quod cupiditate, nostrum tempore inventore maxime ut! </p>
          </a>
      </div>
      <div class="shadow-lg pt-4 ml-2 mr-2 rounded-lg">
          <a href="#" class="block bg-white py-3 border-t pb-4">
              <div class="px-4 py-2 flex  justify-between">
                  <span class="text-sm font-semibold text-gray-900">Gloria Roberston</span>
                  <div class="flex">
                      <span class="px-4 text-sm font-semibold text-gray-600"> yesterday</span>
                      <img class="h-6 w-6 rounded-full object-cover"
                          src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=144&q=80"
                          alt="">
                  </div>
              </div>
              <p class="px-4 py-2 text-sm font-semibold text-gray-700"">Lorem mmmmm ipsum dolor sit amet consectetur adipisicing elit. Iusto adipisci laudantium <br> iste delectus explicabo id molestiae cupiditate corrupti distinctio alias. <br> Temporibus quae tenetur quod cupiditate, nostrum tempore inventore maxime ut! </p>
          </a>
      </div>
      <div class="shadow-lg pt-4 ml-2 mr-2 rounded-lg">
          <a href="#" class="block bg-white py-3 border-t pb-4">
              <div class="px-4 py-2 flex  justify-between">
                  <span class="text-sm font-semibold text-gray-900">Gloria Roberston</span>
                  <div class="flex">
                      <span class="px-4 text-sm font-semibold text-gray-600"> yesterday</span>
                      <img class="h-6 w-6 rounded-full object-cover"
                          src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=144&q=80"
                          alt="">
                  </div>
              </div>
              <p class="px-4 py-2 text-sm font-semibold text-gray-700"">Lorem mmmmm ipsum dolor sit amet consectetur adipisicing elit. Iusto adipisci laudantium <br> iste delectus explicabo id molestiae cupiditate corrupti distinctio alias. <br> Temporibus quae tenetur quod cupiditate, nostrum tempore inventore maxime ut! </p>
          </a>
      </div>
  </div>
</div>
</main>
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
<?php
 }?>