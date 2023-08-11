<?php
session_start(); 









if (isset($_SESSION["Email"])) {
    include('./funciones/conexion.php');

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
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
          <link rel="stylesheet" href="../Public/tailwind.css">
</head>
<body>
          <div class="flex w-full">
                    <div class="flex w-2/5 md:w-1/4 h-screen bg-white transition-all ease-in duration-300" id="slide">
                      <div class="mx-auto py-10">
                        <h1 class="text-2xl font-bold mb-10 cursor-pointer text-gray-700 duration-150">Astrum Salesianum</h1>
                        <ul>
                        <li class="flex space-x-2 mt-10 ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            <span class="font-semibold">¡Bienvenido <b><?php echo $name; ?></b>!</span>
                          </li>
                          <li class="flex space-x-2 mt-10 cursor-pointer hover:text-[#EC5252] duration-150">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            <span class="font-semibold"><a href="./"></a> Ver perfil</span>
                          </li>
                       
                        
                         
                          <a href="./funciones/Logout.php"><button class="w-full mt-10 bg-gray-700 rounded-full py-1.5 text-white">Salir</button></a>
                        </ul>
                      </div>
                    </div>



                    <main class=" min-h-screen w-full">
                      <nav class="flex justify-center px-10 bg-white py-6" id="menuu">

                       
                        <div class="flex items-center ">
                        
                          <a href="#">
                            <img class="w-auto h-24 hidden" src="../img/logis.png" alt="" id="img">
                        </a>
            
                        </div>
                        <div class="flex items-center justify-center  px-4 py-2 rounded-md space-x-3">
                          <ul class="flex items-center flex-shrink-0 space-x-6">
                            <!-- Profile menu -->
                            <li class="relative ">
                              <a href="./DonBoscoIndex.php">
                              <button class="align-middle rounded-full border-2 border-gray-300 shadow-lg  focus:shadow-outline-purple focus:outline-none">
                                <img class="object-cover w-10 h-10 rounded-full hover-image-1 flex-shrink-0" src="../img/Bosco.png" alt="" aria-hidden="true">
                              </button>
                            </a>
                            </li>
              
                                   <li class="lative">
                                    <a href="./Ricalindex.php">
                              <button class="align-middle rounded-full border-2 border-gray-300 shadow-lg  focus:shadow-outline-purple focus:outline-none">
                                <img class="object-cover w-10 h-10 rounded-full hover-image-1 flex-shrink-0" src="../img/Rical.jpg" alt="" aria-hidden="true">
                              </button>
                            </a>
                            </li>
              
                                   <li class="relative">
                                    <a href="./ChalecoIndex.php">
                              <button class="align-middle rounded-full border-2 border-gray-300 shadow-lg  focus:shadow-outline-purple focus:outline-none">
                                <img class="object-cover w-10 h-10 rounded-full hover-image-1 flex-shrink-0" src="../img/Cecilia.jpg" alt="" aria-hidden="true">
                              </button>
                              </a>
                            </li>
              
                                   <li class="relative">
                                    <a href="./MariaIndex.php">
                              <button class="align-middle rounded-full border-2 border-gray-300 shadow-lg  focus:shadow-outline-purple focus:outline-none">
                                <img class="object-cover w-10 h-10 rounded-full hover-image-1 flex-shrink-0" src="../img/Maria.jpg" alt="" aria-hidden="true">
                              </button>
                              </a>
                            </li>
              
                               
              
                          </ul>
                        </div>

                        
                  
                      </nav>
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
<section class="my-8">
                              <div class="container mx-auto px-6">
<div class="h-64 rounded-md overflow-hidden bg-cover bg-center" style="background-image: url('../img/eventsrical.jpg')">
                                      <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                                          <div class="px-10 max-w-xl">
                                              <h2 class="text-2xl text-white font-semibold">Eventos especiales</h2>
                                              <p class="mt-2 text-gray-400">¡Aqui! Puedes encontrar los eventos que realizan nuestros jóvenes en sus colegios al compartir un momento de fraternidad y competencia.</p>
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
<div class="h-64 rounded-md overflow-hidden bg-cover bg-center" style="background-image: url('../img/cdbbkg1.jpg')">
                                      <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                                          <div class="px-10 max-w-xl">
                                              <h2 class="text-2xl text-white font-semibold">Deportes</h2>
                                              <p class="mt-2 text-gray-400">¡Aqui! Puedes encontrar sobre las noticias más importantes de la Liga Salesiana con las competencias y juegos deportivos que realizan nuestros jóvenes.</p>
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
                                              <p class="mt-2 text-gray-400">¡Aqui! Puedes encontrar cómo nuestros Jóvenes Salesianos se desenvuelven en nuestra cultura y desarrollan sus habilidades culutrales y artisticas.</p>
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
                                              <p class="mt-2 text-gray-400">¡Aqui! Puedes encontrar los eventos que realizan nuestros jóvenes en sus colegios al compartir un momento de fraternidad y competencia.</p>
                                              <button name="Special" class="flex items-center mt-4 px-3 py-2 bg-blue-600 text-white text-sm uppercase font-medium rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                                  <span>Ver noticias</span>
                                                  <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                                  </button>
                                          </div>
                                      </div>
                                  </div>
                           
                                  <div class="md:flex mt-8 md:-mx-4">

                                      <div class="w-full h-64 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:w-1/2" style="background-image: url('../img/cdbbkg1.jpg')">
                                          <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                                              <div class="px-10 max-w-xl">
                                                  <h2 class="text-2xl text-white font-semibold">Deportes</h2>
                                                  <p class="mt-2 text-gray-400">¡Aqui! Puedes encontrar sobre las noticias más importantes de la Liga Salesiana con las competencias y juegos deportivos que realizan nuestros jóvenes.</p>
                                                  <button name="Sports" class="flex items-center mt-4 px-3 py-2 bg-blue-600 text-white text-sm uppercase font-medium rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                                    <span>Ver noticias</span>
                                                    <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                                    </button>
                                              </div>
                                          </div>
                                      </div>
                                 
                      
                                      <div class="w-full h-64 mt-8 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:mt-0 md:w-1/2" style="background-image: url('../img/mariaculture.jpg')">
                                          <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                                              <div class="px-10 max-w-xl">
                                                  <h2 class="text-2xl text-white font-semibold">Cultura</h2>
                                                  <p class="mt-2 text-gray-400">¡Aqui! Puedes encontrar cómo nuestros Jóvenes Salesianos se desenvuelven en nuestra cultura y desarrollan sus habilidades culutrales y artisticas.</p>
                                                  <button name="Culture" class="flex items-center mt-4 px-3 py-2 bg-blue-600 text-white text-sm uppercase font-medium rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                                    <span>Ver noticias</span>
                                                    <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                                    </button>
                                              </div>
                                          </div>
                                      </div>
                                 
                                  </div>
                                  
                          </form>
                          <?php }else{  
                            echo "-";
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
                                              <p class="mt-2 text-gray-400">¡Aqui! Puedes encontrar los eventos que realizan nuestros jóvenes en sus colegios al compartir un momento de fraternidad y competencia.</p>
                                              <button name="Special" class="flex items-center mt-4 px-3 py-2 bg-blue-600 text-white text-sm uppercase font-medium rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                                  <span>Ver noticias</span>
                                                  <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                                  </button>
                                          </div>
                                      </div>
                                  </div>
                           
                                  <div class="md:flex mt-8 md:-mx-4">

                                      <div class="w-full h-64 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:w-1/2" style="background-image: url('../img/cdbbkg1.jpg')">
                                          <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                                              <div class="px-10 max-w-xl">
                                                  <h2 class="text-2xl text-white font-semibold">Deportes</h2>
                                                  <p class="mt-2 text-gray-400">¡Aqui! Puedes encontrar sobre las noticias más importantes de la Liga Salesiana con las competencias y juegos deportivos que realizan nuestros jóvenes.</p>
                                                  <button name="Sports" class="flex items-center mt-4 px-3 py-2 bg-blue-600 text-white text-sm uppercase font-medium rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                                    <span>Ver noticias</span>
                                                    <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                                    </button>
                                              </div>
                                          </div>
                                      </div>
                                 
                      
                                      <div class="w-full h-64 mt-8 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:mt-0 md:w-1/2" style="background-image: url('../img/mariaculture.jpg')">
                                          <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                                              <div class="px-10 max-w-xl">
                                                  <h2 class="text-2xl text-white font-semibold">Cultura</h2>
                                                  <p class="mt-2 text-gray-400">¡Aqui! Puedes encontrar cómo nuestros Jóvenes Salesianos se desenvuelven en nuestra cultura y desarrollan sus habilidades culutrales y artisticas.</p>
                                                  <button name="Culture" class="flex items-center mt-4 px-3 py-2 bg-blue-600 text-white text-sm uppercase font-medium rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                                    <span>Ver noticias</span>
                                                    <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                                    </button>
                                              </div>
                                          </div>
                                      </div>
                                 
                                  </div>
                                  
                          </form>

<?php




                          } ?>


<!--AQUI ESTA EL PHP DE LOS BOTNOES-->



                                  <div class="min-h-screen flex justify-center items-center py-20">
                                    <div class="container bg-gray-100 mx-auto p-12  rounded-xl">
                                      <div class="sm:grid sm:grid-cols-2 lg:grid-cols-3 gap-7 space-y-4  sm:space-y-0">
                                           <!-- Box-1 -->
                                           <?php

$conexion = mysqli_connect('localhost', 'root', '', 'astrodb');
$carpet_images = "../img/";

$State = "Active";
//if para ver si el query tiene restriccion o no
if($sql_all == true){
  $query = "SELECT * FROM `news` WHERE `State` = '$State' ORDER BY `date` DESC";
}else{
  //estoy seleccionando las noticias por categoria y ordeno por la fecha.
  $query = "SELECT * FROM `news` WHERE `Category` = '$category' AND `State` = '$State' ORDER BY `date` DESC";
}

$result = mysqli_query($conexion, $query);
while($row = mysqli_fetch_array($result)){

  $contenido = $row['BodyOne']; // Supongamos que aquí tienes el contenido de la base de datos
  $numero_caracteres = 300;
  $contenido_recortado = substr($contenido, 0, $numero_caracteres);
   


?>




<a href="./NewsMain.php?new=<?php echo $row['id_news']?>" >
                                        <div class="bg-white">
                                          <div>
                                            <div class="shadow-lg hover:shadow-xl transform transition duration-500 hover:scale-105">
                                              <div>
                                                <img class="w-full" style="height: 225px;" src="../img/<?php echo $row['main_image']; ?>" />
                                                <div class="px-4 py-2">
                                                  <h1 class="text-xl font-gray-800 font-bold"><?php echo $row['headline']; ?></h1>
                                                  <div class="flex space-x-2 mt-2">
                                             
                                                    <h3 class="text-lg text-gray-600 font-semibold mb-2">
                                                    <?php 
                                                    //query para sacar el nombre del reportero
                                                  $id_reporter = $row['id_reporter'];
                                                    $query_reporter = "SELECT * FROM `reporter` WHERE `Email` = '$id_reporter'";
                                                    $result_reporter = mysqli_query($conexion, $query_reporter);
                                                    while($row_reporter = mysqli_fetch_array($result_reporter)){
                                                      
                                                   echo $row_reporter['Name']." ".$row_reporter['LastName'];
                                                    }

                                                    ?>

                                                    </h3>
                                                  </div>
                                                  <p class="text-sm tracking-normal"><?php echo $contenido_recortado."Leer mas..."; ?></p>
                                                 
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        </a>
                                      <!--end Box-1 -->
                                     
                                      <?php } ?>
                                      
                                      </div>
                                      
                                         
                                    </div>
                                  </div>
                              </section>
                    </main>
                    
                  </div>



                  
                  
                  <script>
                    let slide = document.getElementById("slide")
                    let img = document.getElementById('img')
                    let menuu = document.getElementById('menuu')
                    slide.addEventListener('click', () => {
                      slide.classList.add("left-[-500px]")
                      slide.classList.add("absolute")
                      img.classList.remove('hidden')
                      menuu.classList.remove('justify-center')
                      menuu.classList.add('justify-between')
                    })

                    img.addEventListener('click', () => {
                      slide.classList.remove("left-[-500px]")
                      slide.classList.remove("absolute")
                      img.classList.add('hidden')
                      
                      menuu.classList.add('justify-center')
                      menuu.classList.remove('justify-between')
                    })



                  </script>
                    <footer class="bg-gray-800">
  <div class="container px-3 py-5 mx-auto">
      <div class="flex flex-col items-center text-center">
          <a href="#">
              <img class="w-auto h-14" src="../img/logis.png" alt="">
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
                 
</body>

</html>