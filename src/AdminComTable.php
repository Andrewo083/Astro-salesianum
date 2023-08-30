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
  <link rel="stylesheet" href="../Public/menu.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css" integrity="sha256-x8PYmLKD83R9T/sYmJn1j3is/chhJdySyhet/JuHnfY=" crossorigin="anonymous" />

<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>  <link rel="stylesheet" href="../Public/boton.css">
  <title>Astro ADMIN </title>
</head>

<body class="w-full h-screen  bg-cover " style="background-image: url('../img/bg_4.jpg');">
  <div>
    <section class="relative mx-auto">
      <!-- navbar -->
      <nav class="flex items-center bg-gray-900 p-3 flex-wrap">
      <a href="./newindex.php" class="p-2 mr-4 inline-flex items-center">
    <img src="../img/AstroFavicon.png" alt="" class="h-8 w-8 mr-2">
        <span class="text-xl text-white font-bold uppercase tracking-wide"
          >Astro <b>ADMIN</b></span
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
            href="./welcomeAdmin.php"
            class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-white items-center justify-center hover:bg-gray-900 hover:text-white"
          >
            <span  >Administracion</span>
          </a>
          <a
            href="./AdminJourTable.php"
            class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-white  items-center justify-center hover:bg-gray-900 hover:text-white"
          >
            <span  >Periodistas</span>
          </a>
          <a
            href="./AdminNewsTable.php"
            class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-white  items-center justify-center hover:bg-gray-900 hover:text-white"
          >
            <span>Noticias</span>
          </a>
          <a
            href="./AdminComTable.php"
            class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-white items-center justify-center hover:bg-gray-900 hover:text-white"
          >
            <span>Comentarios</span>
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