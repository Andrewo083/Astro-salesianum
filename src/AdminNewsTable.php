<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"><link rel="shortcut icon" href="../img/AstroFavicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../Public/tailwind.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <link rel="stylesheet" href="./css/Translate.css">
    <title>Astro Administrador </title>
</head>
<body  class="w-full h-full bg-no-repeat bg-cover"
style="background-image: url('../img/bg_4.jpg');">
<nav class="flex justify-between bg-black text-white ">
            <div class="px-5 xl:px-12 py-6 flex w-full items-center">
            <a href="./WelcomeAdmin.php">
            <img src="../img/AstroFavicon.png" alt="" width="45px"></a>
                <a class="text-3xl font-bold font-heading" href="./welcomeAdmin.php">
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
            
                    
                    
                
                <!-- Sign In / Register      -->
                <a
                href="./PHP/Logout.php"
                class="bg-black text-white p-3 m-3 font-semibold  cursor-pointer rounded hover:bg-white hover:text-black ease-in duration-200 flex-col "
                >Cerrar Sesion</a
              >
                
                </div>
            </div>
            <!-- Responsive navbar -->
            
            
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
            <div class="shadow-xl mt-8 mr-0 mb-0 ml-0 pt-4 pr-10 pb-4 pl-10 flow-root rounded-lg sm:py-2">
            <?php $conexion = mysqli_connect('localhost', 'root', '', 'astrodb');
$carpet_images = "../img/";
$State = "Active";
$query = "SELECT * FROM `news`WHERE `State` = '$State' ";
$result = mysqli_query($conexion, $query);



while ($row = mysqli_fetch_array($result)) {
  ?>


                <!-- periodistas-->
                <div class="max-w-2xl w-full mx-auto z-10">
                  <div class="flex flex-col">
                      <div class="shadow-lg  rounded-3xl p-4 m-4">
                          <div class="flex-none sm:flex">
                              <div class=" relative h-32 w-32   sm:mb-0 mb-3">
                                  <img src="<?php echo $carpet_images.$row['main_image'] ?>" alt="aji" class=" w-32 h-32 object-cover rounded-2xl">
                              
                              </div>
              <div class="flex-auto sm:ml-5 justify-evenly">
                  <div class="flex items-center justify-between sm:mt-2">
                      <div class="flex items-center">
                          <div class="flex flex-col">
                              <div class="w-full flex-none text-lg text-gray-700 font-bold leading-none"><?php echo $row['headline']?></div>
                              <div class="flex-auto text-gray-700 my-1">
                                  <span class="mr-3 "><?php echo $row['Category']?></span><span class="mr-3 border-r border-gray-600  max-h-0"></span><span><?php echo $row['school']?></span>
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
                              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                                  fill="currentColor">
                                  <path fill-rule="evenodd"
                                      d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z"
                                      clip-rule="evenodd"></path>
                              </svg>
                              <p class="">Fecha: <?php echo $row['date']?></p>
                          </div>
                          <a href="./editnews.php?new=<?php echo $row['id_news']?>" class="flex-no-shrink bg-gray-600 hover:bg-gray-700 px-5 ml-4 py-2 text-xs shadow-sm hover:shadow-lg font-medium tracking-wider border-2 border-white text-white rounded-full transition ease-in duration-300">Editar</a>
                          <form action="./PHP/CRUD_New.php" method="post">
                          <a  href="./PHP/deletenews.php?new=<?php echo $row['id_news']?>" type="submit"  name="delete" class="flex-no-shrink bg-gray-600 hover:bg-gray-700  px-5 ml-4 py-2 text-xs shadow-sm hover:shadow-lg font-medium tracking-wider border-2 border-white text-white rounded-full transition ease-in duration-300" >Eliminar</a>
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

        <div class = "group fixed bottom-0 right-0 p-2  flex items-end justify-end w-24 h-24 " id="google_translate_element">
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