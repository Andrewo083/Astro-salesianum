<?php
session_start();

if($_SESSION['ROL'] != 1){
header("Location: ./Error.php");

}else{

include('./PHP/conexion.php');

$conexion = mysqli_connect('localhost', 'root', '', 'astrodb');

if (!$conexion) {
  die("Error en la conexión: " . mysqli_connect_error());
}



$query = "SELECT * FROM `comments`";
$result = mysqli_query($conexion, $query);

if ($result) {
  if (mysqli_num_rows($result) > 0) {
    $stateTable ="";
    // Resto del código para mostrar los comentarios
  } else {
   $stateTable = "No hay comentarios aún.";
  }
} else {
  echo "Error en la consulta: " . mysqli_error($conexion);
}




?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8"><link rel="shortcut icon" href="../img/AstroFavicon.png" type="image/x-icon">
  <link rel="stylesheet" href="../Public/tailwind.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Public/boton.css">
  <link rel="stylesheet" href="./css/Translate.css">
  <title>Astro Administrador </title>
</head>

<body class="w-full h-screen  bg-cover " style="background-image: url('../img/bg_4.jpg');">
  <div>
    <section class="relative mx-auto">
      <!-- navbar -->
      <nav class="flex justify-between bg-black text-white ">
        <div class="px-5 xl:px-12 py-6 flex w-full items-center">
        <a href="./WelcomeAdmin.php">
            <img src="../img/AstroFavicon.png" Alt="Imagen representativa de Noticias Astro Salesianum" width="45px"></a>

          <a class="text-3xl font-bold font-heading" href="../src/welcomeAdmin.php">
            <!-- <img class="h-9" src="logo.png" alt="logo"> -->
            Astro <b>Administrador</b> 
          </a>
          <!-- Nav Links -->
          <ul class="hidden md:flex px-4 mx-auto font-semibold font-heading space-x-12">
            <li><a href="./newindex.php" class="hover:text-gray-200" href="#">Home</a></li>
            <li><a href="./welcomeAdmin.php" class="hover:text-gray-200">Administracion</a></li>
            <li><a href="./AdminJourTable.php" class="hover:text-gray-200" >Periodistas</a></li>
            <li><a href="./AdminNewsTable.php" class="hover:text-gray-200" href="#">Noticias</a></li>
            <li><a href="./AdminComTable.php" class="hover:text-gray-200" href="#">Comentarios</a></li>
          </ul>
          <!-- Header Icons -->
          <div class="hidden xl:flex items-center space-x-5 ">
            <a class="hover:text-gray-200" href="#">

              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
              </svg>
              <a>
                <a class="flex items-center hover:text-gray-200" href="#">

                </a>
                <!-- Sign In / Register      -->
                <a href="./PHP/Logout.php" class="bg-black text-white p-3 m-3 font-semibold  cursor-pointer rounded hover:bg-white hover:text-black ease-in duration-200 flex-col ">Cerrar Sesion</a>
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

  <!-- tabla-->


  <div class=" pt-12 pr-0 pb-12 pl-0 mt-0 mr-auto mb-0 ml-auto sm:py-16 lg:py-20">
    <div class="pt-0 pr-4 pb-0 pl-4 mt-0 mr-auto mb-0 ml-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="pt-0 pr-4 pb-0 pl-4 mt-0 mr-auto mb-0 ml-auto max-w-4xl sm:px-6 lg:px-8">
        <div class="pt-0 pr-4 pb-0 pl-4 mt-0 mr-auto mb-0 ml-auto sm:flex sm:items-center sm:justify-between">
          <div>
            <p class="text-xl font-bold text-gray-700">Todos Los Comentarios!</p>
            <p class="text-sm mt-1 mr-0 mb-0 ml-0 font-semi-bold text-gray-600">Aqui podras llevar un control de los comentarios</p>
          </div>
        </div>
        <div class=" mt-8 mr-0 mb-0 ml-0 pt-4 pr-10 pb-4 pl-10 flow-root rounded-lg sm:py-2">

          <!-- Chat content -->
          
          <div class="flex-1 flex flex-col bg-gray-100 overflow-hidden container mx-auto px-6 shadow-xl  pl-10  rounded-lg sm:py-2">
            <!-- Top bar -->

            <?php
            echo "<h1>".$stateTable."</h1>";
                  while ($row = mysqli_fetch_array($result)) {
                  ?>
                   <?php 

                   include("./PHP/PrintUserByAdmin.php");
                  
                    ?>
            <!-- Chat messages -->
            <div class="px-6 py-4 flex-1">
              <!-- A message -->
              <div class="border-b border-gray-600 py-3  mb-4 text-sm">
										<img src="../img/<?php echo $ProfileImage;?>" class=" object-cover cursor-pointer w-10 h-10 rounded-3xl mr-3">
                <div class="flex-1 overflow-hidden">
                  <div>
                    <span class="font-bold text-red-300 cursor-pointer hover:underline"><?php echo $UserName ?></span>
                    <?php 
                    $new = $row['id_new'];
                    include "./PHP/PrintNews.php"
                    ?>
                    <span class="font-bold text-gray-400 text-xs"><?php echo $row['hour'] ?></span>&nbsp;&nbsp;<span>de <a href="./NewsMain.php?new=<?php echo $new?>"><b><?php echo $NewHeadLine ?></b></a></span> 
                  </div>
                  <p class="text-black font-semibold sm:p-4 p-2 "><?php echo $row['comment'] ?></p>

                </div>
                <div class="mt-4 mr-0 mb-0 ml-0 pt-0 pr-0 pb-0 pl-0 flex items-center gap-2 sm:space-x-6  sm:mt-0">

               
               
                    <a href="./PHP/ConfirmCombyAdmin.php?ID=<?php echo $row['id_comment'] ?> " class="bg-red-800 pt-2 pr-6 pb-2 pl-6 text-lg font-medium text-gray-100 transition-all
                          duration-200 hover:bg-red-700 rounded-lg">Delete</a>
                  
                </div>
              </div>
            </div>
            <?php
                  }
                  ?>

            <!-- message finish -->
          </div>

        </div>
        <div class = "group fixed bottom-0 right-0 p-2  flex items-end justify-end w-24 h-24 " id="google_translate_element">

        <script> 
function googleTranslateElementInit() { new google.translate.TranslateElement({ pageLanguage: "es",includedLanguages: "en,es",}, "google_translate_element" ); } </script>
<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>

</html>
<?php }?>