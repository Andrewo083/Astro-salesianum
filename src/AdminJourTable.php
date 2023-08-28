<?php
session_start();
if($_SESSION['ROL'] != 1){ 
 header("Location: ./Error.php"); 
  
 }else{

include('./PHP/conexion.php');

$conexion = new mysqli($host, $user, $password, $bd);

if (!$conexion) {
  die("Error en la conexion" . mysqli_connect_error());
}

$sql = "SELECT * FROM `reporter`";

$query = mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8"><link rel="shortcut icon" href="../img/AstroFavicon.png" type="image/x-icon">
  <link rel="stylesheet" href="../Public/tailwind.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="./css/Translate.css">
  <title>Astro Administrador </title>
</head>

<body class="w-full h-screen bg-no-repeat bg-cover" style="background-image: url('../img/bg_4.jpg');">
<div>
        <section class="relative mx-auto">
            <!-- navbar -->
            <nav class="flex justify-between bg-black text-white ">
            <div class="px-5 xl:px-12 py-6 flex w-full items-center">
            <a href="./WelcomeAdmin.php">
            <img src="../img/AstroFavicon.png" Alt="Imagen representativa de Noticias Astro Salesianum" width="45px"></a>
            <a class="text-3xl font-bold font-heading" href="./welcomeAdmin.php">
               
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
            
        </section>
        </div>


    <!-- tabla-->
    <div class=" pt-12 pr-0 pb-12 pl-0 mt-0 mr-auto mb-0 ml-auto sm:py-16 lg:py-20">
      <div class="pt-0 pr-4 pb-0 pl-4 mt-0 mr-auto mb-0 ml-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="pt-0 pr-4 pb-0 pl-4 mt-0 mr-auto mb-0 ml-auto max-w-4xl sm:px-6 lg:px-8">
          <div class="pt-0 pr-4 pb-0 pl-4 mt-0 mr-auto mb-0 ml-auto sm:flex sm:items-center sm:justify-between">
            <div>
              <p class="text-xl font-bold text-black">Adminitracion de cuentas</p>
              <p class="text-sm mt-1 mr-0 mb-0 ml-0 font-semi-bold text-black">Aqui podras editar los datos del reportero o en dado caso, eliminarlo.</p>
            </div>
            <div class="mt-4 mr-0 mb-0 ml-0 sm:mt-0">
                <p class="sr-only">Search Position</p>
                <div class="relative">
                
                  <a href="./Form_Jurnalist.php"class="bg-gray-800 pt-2 pr-6 pb-2 pl-6 text-lg font-medium text-gray-100 transition-all
                          duration-200 hover:bg-gray-700 rounded-lg">Agregar Reporteros</a>
                </div>
              </div>
          </div>
          <div class="shadow-xl mt-8 mr-0 mb-0 ml-0 pt-4 pr-10 pb-4 pl-10 flow-root rounded-lg sm:py-2">

            <!-- periodistas-->
            <?php
            while ($row = mysqli_fetch_array($query)) {

            ?>
              <div class="pt--10 pr-0 pb-10 pl-0">
                <div class="pt-5 pr-0 pb-0 pl-0 mt-5 mr-0 mb-0 ml-0">
                  <div class="sm:flex sm:items-center sm:justify-between sm:space-x-5">
                    <div class="flex items-center flex-1 min-w-0">
                      <img src="../img/<?php echo $row['ProfileImage']?>" class="flex-shrink-0 object-cover rounded-full btn- w-10 h-10" />


                      <div class="mt-0 mr-0 mb-0 ml-4 flex-1 min-w-0">
                        <p class="text-lg font-bold text-white truncate"> <?php echo $row['Email'] ?> </p>
                        <p class="text-gray-400 text-md">Periodista</p>
                      </div>
                    </div>
                    <div class="mt-4 mr-0 mb-0 ml-0 pt-0 pr-0 pb-0 pl-14 flex items-center sm:space-x-6 sm:pl-0 sm:mt-0">
                      <a href="./Edit_Jurnalist.php?reporter=<?php echo $row['Email']; ?>" class="bg-gray-900 pt-2 pr-6 pb-2 pl-6 text-lg font-medium text-gray-100 transition-all
                          duration-200 hover:bg-gray-700 rounded-lg">Edit</a>
                      <a href="./PHP/Confirmation.php?ID=<?php echo $row['Email'] ?> " class="bg-red-800 pt-2 pr-6 pb-2 pl-6 text-lg font-medium text-gray-100 transition-all
                          duration-200 hover:bg-red-700 rounded-lg">Delete</a>
                    </div>

                  </div>
                </div>
                <!-- finperiodistas-->


              </div>
            <?php
            }
            ?>
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
<?php } ?>