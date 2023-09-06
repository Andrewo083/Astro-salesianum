<?php
session_start(); 





if (isset($_SESSION["Email"])) {
    include('./PHP/conexion.php');

      $conexion = new mysqli($host,$user,$password,$bd);
        if(!$conexion){
          die("Error en la conexion". mysqli_connect_error());
        }
    $Email = $_SESSION["Email"];



} else {

    header("Location: ./Login.php");
    exit();
}


$sql_all = true;


if (isset($_SESSION["Email"])) {
$name = $_SESSION['Name'];

  
} else{
  
}

?>








<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="../img/AstroFavicon.png" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AstroSalesianum News</title>
  <link rel="stylesheet" href="../Public/tailwind.css" />
  <link rel="stylesheet" href="./css/ProfileImage.css">
  <link rel="stylesheet" href="../Public/menu.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css" integrity="sha256-x8PYmLKD83R9T/sYmJn1j3is/chhJdySyhet/JuHnfY=" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;700;900&display=swap" rel="stylesheet">

  <!--LINK DEL CSSS-->
  <link rel="stylesheet" href="../Public/boton.css">
</head>
<body>
  
  



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
          &nbsp;&nbsp;
          
          <a href="./<?php include "./PHP/RestrictAncleRol.php" ?>">
        <div class="imagen-circular hidden lg:block" >
        <!-- Aquí colocas la URL de la imagen -->
                    <img src="../img/<?php echo $_SESSION['ProfileImage'] ?>" alt="Imagen Circular" >
                  </div>
                  </a>
                 
    
        </div>
         </div>
    </nav><br><br><br>
                      <form action="" method="post">
                       
                      <?php 
$everything = true;
//SI ES ESPECIAL
if(isset($_POST['Special'])){


  //INICIALIZACION DE VARIABLES
  $sql_all = false;
  $category = "Eventos Especiales";
  $special = true;
  $everything = false;
  $sports = false;
  $culture = false;


//BARRA DE ESPECIAL
?>
<section class="my-8
">
                              <div class="container mx-auto px-6 mt-10">
<div class="h-64 mt-10 rounded-md overflow-hidden bg-cover bg-center" style="background-image: url('../img/eventsrical.jpg')">
                                      <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                                          <div class="px-10 max-w-xl">
                                              <h2 class="text-2xl text-white font-semibold">Eventos especiales</h2>
                                              <p class="mt-2 text-gray-100">¡Aqui! Puedes encontrar los eventos que realizan nuestros jóvenes en sus colegios al compartir un momento de fraternidad y competencia.</p> <i class="text-gray-300">Fotografías son cortesía de: <a href="https://www.instagram.com/epicyears/"><b>@epicyears!✅</b></a></i>
                                              <button name="Everything" class="flex items-center mt-4 px-3 py-2 bg-red-600 text-white text-sm uppercase font-medium rounded hover:bg-red-500 focus:outline-none focus:bg-red-500">
                                                  <span>Regresar</span>
                                                 
                                              </button>
                                          </div>
                                      </div>
                                  </div>
                                  </div>
</section>
                                  <?php

                                  //NOTICIAS ESPECIALES
}else if(isset($_POST['Sports'])){
  //DEPORTES

  $sql_all = false;
  $category = "Deportes";
  $sports = true;
  
  $special = false;
  $everything = false;
 
  $culture = false;
  

          //BANNER
        ?>
          <section class="my-8">
            <div class="container mx-auto px-6">
              <div class="h-64 rounded-md overflow-hidden bg-cover bg-center" style="background-image: url('../img/SportsBKG.jpg')">
                <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                  <div class="px-10 max-w-xl">
                    <h2 class="text-2xl text-white font-semibold">Deportes</h2>
                    <p class="mt-2 text-gray-100">¡Aqui! Puedes encontrar sobre las noticias más importantes de la Liga Salesiana con las competencias y juegos deportivos que realizan nuestros jóvenes.</p> <i class="text-gray-300">Fotografías son cortesía de: <a href="https://www.instagram.com/epicyears/"><b>@Rubén Nieto✅</b></a></i>
                    <button name="Everything" class="flex items-center mt-4 px-3 py-2 bg-red-600 text-white text-sm uppercase font-medium rounded hover:bg-red-500 focus:outline-none focus:bg-red-500">
                      <span>Regresar</span>

                    </button>
                  </div>
                </div>
              </div>
            </div>
          </section>
        <?php

                                  


}else if(isset($_POST['Culture'])){

  $sql_all = false;

  $category = "Cultura";
  $sports = false;
  
  $special = false;
  $everything = false;
 
  $culture = true;
  

  //BANNER
?>
<section class="my-8">
                              <div class="container mx-auto px-6">
<div class="h-64 rounded-md overflow-hidden bg-cover bg-center" style="background-image: url('../img/mariaculture.jpg')">
                                      <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                                          <div class="px-10 max-w-xl">
                                              <h2 class="text-2xl text-white font-semibold">Cultura</h2>
                                              <p class="mt-2 text-gray-100">¡Aqui! Puedes encontrar cómo nuestros Jóvenes Salesianos se desenvuelven en nuestra cultura y desarrollan sus habilidades culutrales y artisticas.</p> <i class="text-gray-300">Fotografías son cortesía de: <a href="https://www.instagram.com/epicyears/"><b>@epicyears!✅</b></a></i>
                                              <button name="Everything" class="flex items-center mt-4 px-3 py-2 bg-red-600 text-white text-sm uppercase font-medium rounded hover:bg-red-500 focus:outline-none focus:bg-red-500">
                                                  <span>Regresar</span>
                                                  
                                              </button>
                                          </div>
                                      </div>
                                  </div>
                                  </div>
</section>
                                  <?php
}else if(isset($_POST['Everything'])){
  
  $sql_all = true;
  $sports = false;
  
  $special = false;
  $everything = true;
 
  $culture = false;
 
?>

<section class="my-8">

                              <div class="container mx-auto px-6">
                             
                   
                                  <div class="h-64 rounded-md overflow-hidden bg-cover bg-center" style="background-image: url('../img/eventsrical.jpg')">
                                
                                      <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                                          <div class="px-10 max-w-xl">
                                              <h2 class="text-2xl text-white font-semibold">Eventos especiales</h2>
                                              <p class="mt-2 text-gray-100">¡Aqui! Puedes encontrar los eventos que realizan nuestros jóvenes en sus colegios al compartir un momento de fraternidad y competencia.</p>
                                              <i class="text-gray-300">Fotografías son cortesía de: <a href="https://www.instagram.com/epicyears/"><b>@epicyears!✅</b></a></i>
                                              <button name="Special" class="flex items-center mt-4 px-3 py-2 bg-blue-600 text-white text-sm uppercase font-medium rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                                  <span>Ver noticias</span>
                                                  <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                                  </button>
                                          </div>
                                      </div>
                                  </div>
                           
                                  <div class="md:flex mt-8 md:-mx-4">

            <div class="w-full h-64 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:w-1/2" style="background-image: url('../img/SportsBKG.jpg')">
              <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                <div class="px-10 max-w-xl">
                  <h2 class="text-2xl text-white font-semibold">Deportes</h2>
                  <p class="mt-2 text-gray-100">¡Aqui! Puedes encontrar sobre las noticias más importantes de la Liga Salesiana con las competencias y juegos deportivos que realizan nuestros jóvenes.</p>
                  <i class="text-gray-300">Fotografías son cortesía de: <a href=""><b>@Rubén Nieto✅</b></a></i>
                  <button name="Sports" class="flex items-center mt-4 px-3 py-2 bg-blue-600 text-white text-sm uppercase font-medium rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                    <span>Ver noticias</span>
                    <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                      <path d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                  </button>
                </div>
              </div>
            </div>


            <div class="w-full h-64 mt-8 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:mt-0 md:w-1/2" style="background-image: url('../img/mariaculture.jpg')">
              <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                <div class="px-10 max-w-xl">
                  <h2 class="text-2xl text-white font-semibold">Cultura</h2>
                  <p class="mt-2 text-gray-100">¡Aqui! Puedes encontrar cómo nuestros Jóvenes Salesianos se desenvuelven en nuestra cultura y desarrollan sus habilidades culutrales y artisticas.</p>
                  <i class="text-gray-300">Fotografías son cortesía de: <a href="https://www.instagram.com/epicyears/"><b>@epicyears!✅</b></a></i>
                  <button name="Culture" class="flex items-center mt-4 px-3 py-2 bg-blue-600 text-white text-sm uppercase font-medium rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                    <span>Ver noticias</span>
                    <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                      <path d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                  </button>
                </div>
              </div>
            </div>

          </div>

          </form>
    <?php } else {
          echo "";
          $sql_all = true;
          $sports = false;

          $special = false;
          $everything = true;

          $culture = false;
    ?>

<section class="my-8">
                              <div class="container mx-auto px-6">
                   
                                  <div class="h-64 rounded-md overflow-hidden bg-cover bg-center" style="background-image: url('../img/eventsrical.jpg')">
                                      <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                                          <div class="px-10 max-w-xl">
                                              <h2 class="text-2xl text-white font-semibold">Eventos especiales</h2>
                                              <p class="mt-2 text-gray-100">¡Aqui! Puedes encontrar los eventos que realizan nuestros jóvenes en sus colegios al compartir un momento de fraternidad y competencia.</p>
                                              <i class="text-gray-300">Fotografías son cortesía de: <a href="https://www.instagram.com/epicyears/"><b>@epicyears!✅</b></a></i>
                                              <button name="Special" class="flex items-center mt-4 px-3 py-2 bg-blue-600 text-white text-sm uppercase font-medium rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                                  <span>Ver noticias</span>
                                                  <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                                  </button>
                                          </div>
                                      </div>
                                  </div>
                           
                                  <div class="md:flex mt-8 md:-mx-4">

            <div class="w-full h-64 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:w-1/2" style="background-image: url('../img/SportsBKG.jpg')">
              <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                <div class="px-10 max-w-xl">
                  <h2 class="text-2xl text-white font-semibold">Deportes</h2>
                  <p class="mt-2 text-gray-100">¡Aqui! Puedes encontrar sobre las noticias más importantes de la Liga Salesiana con las competencias y juegos deportivos que realizan nuestros jóvenes.</p>
                  <i class="text-gray-300">Fotografías son cortesía de: <a href=""><b>@Rubén Nieto✅</b></a></i>
                  <button name="Sports" class="flex items-center mt-4 px-3 py-2 bg-blue-600 text-white text-sm uppercase font-medium rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                    <span>Ver noticias</span>
                    <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                      <path d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                  </button>
                </div>
              </div>
            </div>


            <div class="w-full h-64 mt-8 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:mt-0 md:w-1/2" style="background-image: url('../img/mariaculture.jpg')">
              <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                <div class="px-10 max-w-xl">
                  <h2 class="text-2xl text-white font-semibold">Cultura</h2>
                  <p class="mt-2 text-gray-100">¡Aqui! Puedes encontrar cómo nuestros Jóvenes Salesianos se desenvuelven en nuestra cultura y desarrollan sus habilidades culutrales y artisticas.</p>
                  <i class="text-gray-300">Fotografías son cortesía de: <a href="https://www.instagram.com/epicyears/"><b>@epicyears!✅</b></a></i>
                  <button name="Culture" class="flex items-center mt-4 px-3 py-2 bg-blue-600 text-white text-sm uppercase font-medium rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                    <span>Ver noticias</span>
                    <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                      <path d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                  </button>
                </div>
              </div>
            </div>

          </div>

          </form>

<?php




                          } ?>
                                     <br><br>
                                     <div class="container mx-auto px-6 py-6 text-center">
         
          
         <section class="text-gray-600 body-font">
           <div class="container px-5 bg-gray-50 mx-auto  rounded-xl">
             <div class="flex flex-wrap -m-4">
               
<?php 


$State = "Active";

if($sql_all == true){
 $query = "SELECT * FROM `news` WHERE `State` = '$State' ORDER BY `date` DESC";
}else{
 //estoy seleccionando las noticias por Categoría y ordeno por la fecha.
 $query = "SELECT * FROM `news` WHERE `Category` = '$category' AND `State` = '$State' ORDER BY `date` DESC";
}

$result = mysqli_query($conexion, $query);
while($row = mysqli_fetch_array($result)){




 $contenido = $row['BodyOne']; // Supongamos que aquí tienes el contenido de la base de datos
 $numero_caracteres = 150;
 $contenido_recortado = substr($contenido, 0, $numero_caracteres);


?>
               <!--INICIO RECOMENDACION-->
               <a href="./NewsMain.php?new=<?php echo $row['id_news'];?>">
               <div class="p-4 md:w-1/3">
                 <div class="h-full rounded-xl shadow-cla-blue bg-gradient-to-r from-indigo-50 to-blue-50 overflow-hidden">
                   <img class="lg:h-48 md:h-36 w-full object-cover object-center scale-110 transition-all duration-400 hover:scale-100" src="../img/<?php echo $row['main_image'] ?>" alt="<?php echo $row['headline'] ?>">
                   <div class="p-6">
                     <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1"><?php echo $row['Category']?> - <?php  echo $row['school']?></h2>
                     <h1 class="title-font text-lg font-medium text-gray-600 mb-3"><?php echo $row['headline']?></h1>
                     <p class="leading-relaxed mb-3 text-jusitfy"><?php echo $contenido_recortado; ?>...</p>
                     <p class="leading-relaxed mb-3 text-jusitfy">Escrito por <b>
                       <?php 
                       $email = $row['id_reporter'];
                         include( "./PHP/PrintJournalist.php");
                         if($email == NULL){
                           echo "@Astro Salesianum"."✅";
                         }else{
                          
                         echo "@".$Name.$LastName."✅";
                         }
                         
                          
                       ?></b></p>
                     <div class=" ">
                       <a href="./NewsMain.php?new=<?php echo $row['id_news'];?>" class=" bg-gradient-to-r from-cyan-400 to-blue-400 hover:scale-105 drop-shadow-md  shadow-cla-blue px-4 py-1 rounded-lg">Leer más</a>

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

                                  </div>
                             
                    </main>
                    
                  </div>

                  

                  
                  
                  <script >
                    let slide = document.getElementById("slide")
                    let img = document.getElementById('img')
                    let menuu = document.getElementById('menuu')
                    
                    if (window.innerWidth <= 500){
                      slide.classList.add("hidden")
                      img.classList.remove("hidden")
                      slide.classList.add("fixed")
                      slide.classList.add("px-4")
                      slide.classList.add("z-[100]")
                      slide.classList.add("w-[150px]")
                      slide.classList.add("px-4")
                      menuu.classList.add("flex-col")
                      menuu.classList.add("justify-center")
                      
  
                    }else{
                      //slide.classList.remove("hidden")
                      //img.classList.add("hidden")
                      //slide.classList.remove("fixed")
                      //slide.classList.remove("px-4")
                      //slide.classList.remove("z-[100]")
                      //slide.classList.remove("w-[150px]")
                      //slide.classList.remove("px-4")
                      //menuu.classlist.remove("")
                    }
                    
                    slide.addEventListener('click', () => {
                     
                      slide.classList.add("left-[-500px]")
                      slide.classList.add("absolute")
                      img.classList.remove('hidden')
                      menuu.classList.remove('justify-center')
                      menuu.classList.add('justify-between')
                    });

                    img.addEventListener('click', () => {
                      if (window.innerWidth <= 500) {
                        slide.classList.remove("hidden")

                      }
                      slide.classList.remove("left-[-500px]")
                      slide.classList.remove("absolute")
                      img.classList.add('hidden')
                      
                      menuu.classList.add('justify-center')
                      menuu.classList.remove('justify-between')
                    });


                  </script>

                  <!--FOOTER-->
                    <footer class="bg-gray-800">





                      <!--LINK DEL JS-->
                    <script> 
function googleTranslateElementInit() { new google.translate.TranslateElement({ pageLanguage: "es",includedLanguages: "en,es",}, "google_translate_element" ); } </script>
<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>






  <div class="container px-3 py-5 mx-auto">
      <div class="flex flex-col items-center text-center">
          <a href="#">
              <img class="w-auto h-14" src="../img/AstroFavicon.png" Alt="Imagen representativa de Noticias Astro Salesianum">
          </a>

        <p class="max-w-md mx-auto mt-4 text-white">Astro Salesianum</p>


        <div class="translate " id="google_translate_element">


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
                 
</body>
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
</html>