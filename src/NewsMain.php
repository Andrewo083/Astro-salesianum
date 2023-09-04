<?php

session_start();
include("./PHP/LoginVerif.php");

include("./PHP/newsMainVar.php");
while ($row = mysqli_fetch_array($result)) {

 

?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../img/AstroFavicon.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $row['headline'] ?></title>
    <link rel="stylesheet" href="../Public/menu.css">
    <link rel="stylesheet" href="../Public/tailwind.css">
     <link rel="stylesheet" href="./css/ProfileImage.css">
     <link rel="stylesheet" href="./css/Translate.css">
     <link rel="stylesheet" href="../Public/boton.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css" integrity="sha256-x8PYmLKD83R9T/sYmJn1j3is/chhJdySyhet/JuHnfY=" crossorigin="anonymous" />
<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;700;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
  
<body>

  <nav class="flex items-center bg-yellow-500 p-3 flex-wrap fixed top-0 w-full" style="z-index: 1000;">
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
            class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-white items-center justify-center hover:bg-white hover:text-black"
          >
            <span  >Hogar</span>
          </a>
          <a
            href="./DonBoscoIndex.php"
            class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-white  items-center justify-center hover:bg-white hover:text-black"
          >
            <span  >Don Bosco</span>
          </a>
          <a
            href="./ChalecoIndex.php"
            class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-white  items-center justify-center hover:bg-white hover:text-black"
          >
            <span  >Santa Cecilia</span>
          </a>
          <a
            href="./Ricalindex.php"
            class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-white  items-center justify-center hover:bg-white hover:text-black"
          >
            <span>Ricaldone</span>
          </a>
          <a
            href="./MariaIndex.php"
            class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-white items-center justify-center hover:bg-white hover:text-black"
          >
            <span>María Auxiliadora</span>
          </a>
          <a class="lg:hidden block w-full px-3 py-2 rounded text-white items-center justify-center hover:bg-white hover:text-black" href="./<?php include "./PHP/RestrictAncleRol.php" ?>">
        <span><b>Mi Perfil</b></span>
                  </a>
       
    
        </div>
        <div class="imagen-circular hidden lg:block" >
        <a
            href="./<?php include "./PHP/RestrictAncleRol.php" ?>">
        <!-- Aquí colocas la URL de la imagen -->
                    <img src="../img/<?php echo $_SESSION['ProfileImage'] ?>" alt="Imagen Circular" class="">
        </a>
                  </div>
      </div>
    </nav>

        <!-- component -->


        <div class="container mx-auto px-6 py-16 text-center">
        <div class="">
        <h1 class="text-3xl text-center font-bold text-gray-800 dark:text-white lg:text-4xl"><?php echo $row['headline']?></h1>
        <p class="mt-6 text-gray-500 dark:text-gray-300"><b><?php echo $row['drophead'] ?></b><br><br><?php echo $row['BodyOne'] ?></p><br>
        <a class="mt-6 rounded-lg bg-blue-600 px-6 py-2.5 text-center text-sm font-medium capitalize leading-5 text-white hover:bg-blue-500 focus:outline-none lg:mx-0 lg:w-auto " href="https://www.instagram.com/epicyears/"><b>Fotógrafo.:</b> <?php echo $row['photographer']; ?>✅
        </a>
        </div>

          <div class="mt-10 flex justify-center">
            <!--IMAGEN PRINCIPAL-->
            <img class="h-96 w-full rounded-xl  object-cover lg:w-4/5" src="../img/<?php echo $row['main_image']?>" alt="Imagen Banner" />
          </div>
        </div>

        <!-- end new-->
        <!-- coment-->
        <!-- component -->
        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.4/dist/flowbite.min.css" />

        <!-- This is an example component -->
        <div class="max-w-2xl mx-auto">




        </div>
        <!-- end coment-->





        <div class="flex min-h-screen items-center justify-center p-7 bg-white">
          <div class="container grid max-w-screen-xl gap-8 lg:grid-cols-2 lg:grid-rows-2">
            <div class="row-span-2 flex flex-col rounded-md border border-slate-200">
              <!--IMAGEN GRANDE 2-->
              <div class="h-1/2 flex-1"><img src="../img/<?php echo $row['main_image']?>" class="w-full object-cover  object-center" alt="Imagen Completa" /></div>
              <div class="p-10">

                <p class="mt-2 text-slate-500"><?php echo $row['BodyFour'] ?><br><br><b>Escrito por</b>
              
              <?php
              include("./PHP/nameDeletedNew.php")
              ?></p>

              </div>
            </div>
            <div class="flex rounded-md border border-slate-200">
              <div class="flex-1 p-10">

                <p class="mt-2 text-slate-500"><?php echo $row['BodyTwo'] ?></p>

              </div>

              <div class="relative hidden h-full w-1/3 overflow-hidden lg:block">
                <div class="absolute inset-0">
                  <img src="../img/<?php echo $row['main_image']?>" class="h-full w-full object-cover object-left-top" alt="Imagen izquierda" />
                </div>
              </div>
            </div>
            <div class="flex rounded-md border border-slate-200">
              <div class="flex-1 p-10">

                <p class="mt-2 text-slate-500"><?php echo $row['BodyThree'] ?>
              
              
              
              
              </p>

              </div>

              <div class="relative hidden h-full w-1/3 overflow-hidden lg:block">
                <div class="absolute inset-0">
                  <img src="../img/<?php echo $row['main_image']?>" class="h-full w-full object-cover  object-right-bottom" alt="Imagen derecha" />
                </div>
              </div>

            </div>
          </div>

        </div>
        <!-- component -->
        
        <div class="container mx-auto px-6 py-6 text-center">
          <div class="p-6">
            <h1 class="text-3xl text-center font-bold text-gray-800 dark:text-white lg:text-4xl">Noticias relacionadas</h1>
          </div>
          
          <section class="text-gray-600 body-font">
            <div class="container px-5  mx-auto">
              <div class="flex flex-wrap -m-4">
                
<?php 
$i = 0;
$Category = $row['Category'];
$State = "Active";
$id_news = $row['id_news'];
                $QueryRecom = "SELECT * FROM `news` WHERE  `id_news` != '$id_news' AND `State` = '$State' ORDER BY `date` DESC";
$ResultRecom = mysqli_query($conexion, $QueryRecom);
while (($RowQuery = mysqli_fetch_array($ResultRecom))&&($i < 3)) {
$i++;


  $contenido = $RowQuery['BodyOne']; //  aquí tienes el contenido de la base de datos
  $numero_caracteres = 250;
  $contenido_recortado = substr($contenido, 0, $numero_caracteres);


?>
                <!--INICIO RECOMENDACION-->
                <a href="./NewsMain.php?new=<?php echo $RowQuery['id_news'];?>">
                <div class="p-4 md:w-1/3">
                  <div class="h-full rounded-xl shadow-cla-blue bg-gradient-to-r from-indigo-50 to-blue-50 overflow-hidden">
                    <img class="lg:h-48 md:h-36 w-full object-cover object-center scale-110 transition-all duration-400 hover:scale-100" src="../img/<?php echo $RowQuery['main_image'] ?>" alt="blog">
                    <div class="p-6">
                      <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1"><?php echo $RowQuery['Category']?></h2>
                      <h1 class="title-font text-lg font-medium text-gray-600 mb-3"><?php echo $RowQuery['headline']?></h1>
                      <p class="leading-relaxed mb-3 text-jusitfy"><?php echo $contenido_recortado; ?>...</p>
                      <div class=" ">
                        <a href="./NewsMain.php?new=<?php echo $RowQuery['id_news'];?>" class=" bg-gradient-to-r from-cyan-400 to-blue-400 hover:scale-105 drop-shadow-md  shadow-cla-blue px-4 py-1 rounded-lg">Leer más</a>

                      </div>
                    </div>
                  </div>
                </div>
                </a>
                  <!--FIN RECOMENDACION-->
               <?php } ?>





              </div>
            </div>
            
            </div>
          </section>
         
            <div class="p-4 ">
              <h1 class="text-3xl text-center font-bold text-gray-800 dark:text-white lg:text-4xl">Comentanos!</h1>
            </div>
          
                
                		<!-- Chat content -->
							<div class="flex-1  flex-col bg-gray-100 overflow-hidden container mx-auto px-6 shadow-xl  p-10 flow-root rounded-lg sm:py-2">
								<!-- Top bar -->
                


 <!--COMENTARIOS-->

                <!-- FORMULARIO-->
                <form action="./PHP/InsertComment.php?new=<?php echo $_GET['new'] ?>" method="POST">
								  <div class="pb-6 px-4 flex-none">
									  <div class="flex rounded-lg overflow-hidden">
										
										  <input type="text" class="w-full px-4 border-none bg-gray-300 font-semibold" placeholder="Comentar" name="Comment" />

										  <button type="submit" class="inline-flex justify-center p-2 text-blue-600 rounded-full cursor-pointer hover:bg-blue-100">
											  <svg class="w-6 h-6 rotate-90" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
											    <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z">
                          </path>
											  </svg>
										  </button>

                    </div>
									</div>
                </form>    
                     <!-- FORMULARIO-->
                 
								<!-- Chat messages -->
                <?php 
                 $new = $_GET['new'];
                 
                 $QueryComment = "SELECT * FROM `comments` WHERE `id_new` = '$new' AND `State` = '$State' ORDER BY `date` DESC";

                 $ResultComment = mysqli_query($conexion, $QueryComment);
                 while ($RowComment = mysqli_fetch_array($ResultComment)) {

                  include("./PHP/PrintNamesComments.php");
                  ?>
								<div class="px-6 py-4 flex-1 ">
									<!-- A message -->
									<div class="border-b border-gray-600 py-3 flex items-start mb-4 text-sm">
										<img src="../img/<?php echo $ProfileImage;?>" class="object-cover cursor-pointer w-10 h-10 rounded-3xl mr-3">
										<div class="flex-1 overflow-hidden">
											<div>
                       
												<span class="font-bold text-red-300 cursor-pointer hover:underline">
                          <?php 
                           include "./PHP/PrintCheckComments.php"
                          
                         ?></span>
												<span class="font-bold text-gray-400 text-xs">&nbsp;<?php echo $hour ?></span>
											</div>
											<p class="text-black "><?php  echo $comment; ?>. <br><b><?php echo $date?></b></p>
										</div>
									</div>
								</div>
                <?php } }?>
                
                	<!-- message finish -->
							</div>
             

          
            <div class=" py-10  flex flex-col">



            
              
                
              
            </div>
            </main>
          </div>


        </div>
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

  </body>
  <script> 
    function googleTranslateElementInit() { new google.translate.TranslateElement({ pageLanguage: "es",includedLanguages: "en,es",}, "google_translate_element" ); } </script>
    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    
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

  </script>
    
    


  </html>
