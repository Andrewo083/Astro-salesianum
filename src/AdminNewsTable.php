<?php
session_start();
if($_SESSION['ROL'] != 1){  
  header("Location: ./Error.php");  
  
  }else{


 ?>
 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"><link rel="shortcut icon" href="../img/AstroFavicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../Public/tailwind.css">
    <link rel="stylesheet" href="../Public/boton.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css" integrity="sha256-x8PYmLKD83R9T/sYmJn1j3is/chhJdySyhet/JuHnfY=" crossorigin="anonymous" />

<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>  <link rel="stylesheet" href="../Public/boton.css">
           <link rel="stylesheet" href="./css/Translate.css">
    <title>Astro Administrador </title>
</head>
<body  class="w-full h-full bg-cover"
style="background-image: url('../img/bg_4.jpg');">
<nav class="flex items-center bg-gray-900 p-3 flex-wrap">
      <a href="./newindex.php" class="p-2 mr-4 inline-flex items-center">
    <img src="../img/AstroFavicon.png" alt="" class="h-8 w-8 mr-2">
        <span class="text-xl text-white font-bold uppercase tracking-wide"
          >Astro <b>ADMINISTRADOR</b></span
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
            href="./MariaIndex.php"
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
    <!-- finmenu-->

    <!-- tabla-->
    <div class=" pt-12 pr-0 pb-12 pl-0 mt-0 mr-auto mb-0 ml-auto sm:py-16 lg:py-20">
        <div class="pt-0 pr-4 pb-0 pl-4 mt-0 mr-auto mb-0 ml-auto max-w-7xl sm:px-6 lg:px-8">
          <div class="pt-0 pr-4 pb-0 pl-4 mt-0 mr-auto mb-0 ml-auto max-w-4xl sm:px-6 lg:px-8">
            <div class="pt-0 pr-4 pb-0 pl-4 mt-0 mr-auto mb-0 ml-auto sm:flex sm:items-center sm:justify-between">
              <div>
                <p class="text-xl font-bold text-gray-700">Gestiona las Noticias</p>
                <p class="text-sm mt-1 mr-0 mb-0 ml-0 font-semi-bold text-gray-600">Aqui podras editar las noticias o eliminarlas si lo deseas.</p>
              </div> 
            </div>
            <div class=" mt-8 mr-0 mb-0 ml-0 pt-4 pr-10 pb-4 pl-10 flow-root rounded-lg sm:py-2">
            <?php $conexion = mysqli_connect('localhost', 'root', '', 'astrodb');
$carpet_images = "../img/";
$State = "Active";
$query = "SELECT * FROM `news`WHERE `State` = '$State' ";
$result = mysqli_query($conexion, $query);



while ($row = mysqli_fetch_array($result)) {
  ?>


                <!-- periodistas-->
                <div class="max-w-2xl w-full mx-auto z-10 bg-transparent">
                  <div class="flex flex-col">
                      <div class=" rounded-3xl p-4 m-4 bg-gray-950 text-slate-300">
                          <div class="flex-none sm:flex">
                              <div class=" relative h-32 w-32   sm:mb-0 mb-3">
                                  <img src="<?php echo $carpet_images.$row['main_image'] ?>" alt="aji" class=" w-32 h-32 object-cover rounded-2xl">
                              
                              </div>
              <div class="flex-auto sm:ml-5 justify-evenly">
                  <div class="flex items-center justify-between sm:mt-2">
                      <div class="flex items-center">
                          <div class="flex flex-col">
                              <div class="w-full flex-none text-lg text-gray-100 font-bold leading-none"><?php echo $row['headline']?></div>
                              <div class="flex-auto text-gray-100 my-1">
                                  <span class="mr-3 "><?php echo $row['Category']?></span><span class="mr-3 border-r border-gray-600  max-h-0"></span><span><?php echo $row['school']?></span>

                              <p class="">Fecha: <?php echo $row['date']?></p>

                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="flex flex-row items-center pb-4">
                      <div class="flex pb-4">
                          
                      </div>
                      <div class="flex-1 inline-flex  hidden items-center">
                          

                      </div>
                      </div>
                      <div class="flex pt-2  text-sm text-gray-400">
                      
                          <div class="flex-1 inline-flex items-center">
                          
   

                              <div class="mt-4 mr-0 mb-0 ml-0 mdpt-0 pr-0 pb-0 sm:pl-14 flex items-center sm:space-x-6 gap-2 pl-0 sm:mt-0">
                          <a href="./editnews.php?new=<?php echo $row['id_news']?>" class="bg-gray-900 pt-1 pr-3 pb-1 pl-3 sm:pt-2 sm:pr-6 sm:pb-2 sm:pl-6 text-lg font-medium text-gray-100 transition-all
                          duration-200 hover:bg-gray-700 rounded-lg">Editar</a>
                          <form action="./PHP/CRUD_New.php" method="post">
                          <a  href="./PHP/ConfirmNewsbyAdm.php?new=<?php echo $row['id_news']?>" type="submit"  name="delete" class="bg-red-800 pt-1 pr-3 pb-1 pl-3 sm:pt-2 sm:pr-6 sm:pb-2 sm:pl-6 text-lg font-medium text-gray-100 transition-all
                          duration-200 hover:bg-red-700 rounded-lg" >Eliminar</a>
                          </form>
                          </div>
                          </div>
                      
                      </div>
                  </div>
                </div>
              </div>
          
                    <!-- finperiodistas-->
<?php } ?>

              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
</div>

        <div class = "group fixed bottom-0 right-0 p-2  flex items-end justify-end w-24 h-24 " id="google_translate_element">
        <script> 
function googleTranslateElementInit() { new google.translate.TranslateElement({ pageLanguage: "es",includedLanguages: "en,es",}, "google_translate_element" ); } </script>
<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>
</html>
<?php } ?>
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