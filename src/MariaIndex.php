<?PHP
session_start();

 $carpet_images = "../img/";
$conexion = mysqli_connect('localhost', 'root', '', 'astrodb');
$State = "Active";
$query = "SELECT * FROM `news` WHERE `school` = 'Colegio Maria Auxiliadora' AND `State` = '$State' ORDER BY 'date' DESC";
$result = mysqli_query($conexion, $query);

  $carpet_images = "../img/";




?>

<!-- Luego, en tu código HTML -->
<p></p>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"><link rel="shortcut icon" href="../img/AstroFavicon.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/tailwind.css" />
    <title>Noticias Maria</title>
       <link rel="icon" href="../img/AstroFavicon.png"/>
       <link rel="stylesheet" href="./css/ProfileImage.css">
       <link rel="stylesheet" href="./css/Translate.css">

</head>
<body>
    <div>
        <section class="relative mx-auto">
            <!-- navbar -->
            <nav class="flex justify-between bg-sky-500 text-white w-screen">
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
                <div class="hidden xl:flex items-center space-x-5 ">
                  <a class="flex items-center hover:text-gray-200" href="./<?php include "./Funciones/RestrictAncleRol.php" ?>">
                    <div class="imagen-circular">
     
                      <img src="../img/<?php echo $_SESSION['ProfileImage'] ?>" alt="Foto de perfil"> </div>
                
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
<div class="text-gray-900 pt-12 pr-0 pb-14 pl-0 bg-white">
    <div class="w-full pt-4 pr-5 pb-6 pl-5 mt-0 mr-auto mb-0 ml-auto space-y-5 sm:py-8 md:py-12 sm:space-y-8 md:space-y-16
        max-w-7xl">
      <div class="flex flex-col items-center sm:px-5 md:flex-row">
        <div class="flex flex-col items-start justify-center w-full h-full pt-6 pr-0 pb-6 pl-0 mb-6 md:mb-0 md:w-1/2">
          <div class="flex flex-col items-start justify-center h-full space-y-3 transform md:pr-10 lg:pr-16
              md:space-y-5">
            <div class="bg-red-400 flex items-center leading-none rounded-full text-gray-50 pt-1.5 pr-3 pb-1.5 pl-2
                uppercase inline-block">
              <p class="inline">
                <svg class="w-3.5 h-3.5 mr-1" fill="currentColor" viewbox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0
                    00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755
                    1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1
                    0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
              </p>

              <p class="inline text-xs font-medium">COLEGIO MARIA AUXILIADORA</p>


            </div>
            <a class="text-4xl font-bold leading-none lg:text-5xl xl:text-6xl">Bienvenidas Marianas</a>
            <div class="pt-2 pr-0 pb-0 pl-0">
              <p class="text-sm font-medium inline">Ubicación: Calle María Auxiliadora, N° 134, entre Av. España y, Bulevar Monseñor Romero, San Salvador CP 1101 <br></p>
              <p class="inline text-sm font-medium mt-0 mr-1 mb-0 ml-1">Derechos </p>
              <p class="inline text-sm font-medium mt-0 mr-1 mb-0 ml-1">reservados por</p>
              <p class="text-black text-sm font-medium inline mt-0 mr-1 mb-0 ml-1">Astro salesianum</p><br>
              <p class="inline text-sm font-medium mt-0 mr-1 mb-0 ml-1">Fotografias son cortesia de</p>
             
              <p class="text-black text-sm font-medium inline mt-0 mr-1 mb-0 ml-1"><a href="https://www.instagram.com/epicyears/">@epicyears!</a></p>
            </div>
          </div>
        </div>
        <div class="w-full md:w-1/2">
          <div class="block">
            <img
                src="../img/MariaBkg.jpg" class="object-cover rounded-lg max-h-64 sm:max-h-96 btn- w-full h-full"/>
          </div>
        </div>
      </div>
      <div class="grid grid-cols-12 sm:px-5 gap-x-8 gap-y-16">


<?php while($row = mysqli_fetch_array($result)){
  $contenido = $row['BodyOne']; // Supongamos que aquí tienes el contenido de la base de datos
  $numero_caracteres = 300;
  $contenido_recortado = substr($contenido, 0, $numero_caracteres);
?>
        <!--INCIO DE NOTICIA-->
       
        <div class="flex flex-col items-start col-span-12 space-y-3 sm:col-span-6 xl:col-span-4  "> 
          <a href="./NewsMain.php?new=<?php echo $row['id_news']?>"> 
          <img
              src="<?php echo $carpet_images.$row['main_image']; ?>" class="object-cover w-full mb-2 overflow-hidden rounded-lg shadow-sm max-h-56 btn-"/>
          <p class="bg-fuchsia-300  items-center leading-none text-sm font-medium text-gray-50 pt-1.5 pr-3 pb-1.5 pl-3
              rounded-full uppercase inline-block"><?php echo $row['Category'];?></p>
              
          <p class="text-lg font-bold sm:text-xl md:text-2xl"><?php echo $row['headline']; ?></p>
          <p class="text-sm text-black" data-originallength="100" ><?php echo $contenido_recortado."..."; ?></p>
        
          <div class="pt-2 pr-0 pb-0 pl-0">
           <p class="inline text-xs font-medium mt-0 mr-1 mb-0 ml-0 underline">
               <?php
              include( "./Funciones/PrintJournalist.php");
              if($email == NULL){
                echo "@Astro Salesianum";
              }else{
              echo "@".$Name.$LastName;
              }
              ?>
            </p>
            <p class="inline text-xs font-medium mt-0 mr-1 mb-0 ml-1">· <?php echo $row['date']; ?> ·</p>
            <a href="" class="inline text-xs font-medium mt-0 mr-1 mb-0 ml-1"><?php echo $row['photographer']; ?> </a>
          </div>
          </a>
        </div>
        <?php } ?>
        
         <!--FIN DE NOTICIA-->




        
       
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
              <a href="#" class="mx-2 text-sm text-gray-500 transition-colors duration-300 hover:text-gray-500 dark:hover:text-gray-300" aria-label="Reddit">  
                       <div class = "group fixed bottom-0 right-0 p-2  flex items-end justify-end w-24 h-24 " id="google_translate_element">
 </a>

              <a href="#" class="mx-2 text-sm text-gray-500 transition-colors duration-300 hover:text-gray-500 dark:hover:text-gray-300" aria-label="Reddit"> Privacy </a>

              <a href="#" class="mx-2 text-sm text-gray-500 transition-colors duration-300 hover:text-gray-500 dark:hover:text-gray-300" aria-label="Reddit"> Cookies </a>
         
          </div>
      </div>
  </div>
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
</html>
