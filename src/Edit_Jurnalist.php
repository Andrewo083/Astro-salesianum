<?php 
session_start();

if($_SESSION['ROL'] != 1){  
  header("Location: ./Error.php");  
  
  }else{


$conexion = mysqli_connect('localhost', 'root', '', 'astrodb');

$email_reporter = $_GET['reporter'];
$QueryReporter = "SELECT * FROM reporter WHERE Email = '$email_reporter'";
$ResultReporter = mysqli_query($conexion, $QueryReporter);
while($RowReporter = mysqli_fetch_array($ResultReporter)){
  



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"><link rel="shortcut icon" href="../img/AstroFavicon.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Edita tu Reportero!</title>
        <link rel="stylesheet" href="../Public/tailwind.css">    
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
        <link rel="stylesheet" href="../Public/boton.css">
<script>function mostrar(){
    var tipo = document.getElementById("contraseña");

    if(tipo.type == 'password'){
      tipo.type = 'text';
    }else{
      tipo.type = 'password';
    }
  }</script>
</head>
<body class="w-full h-screen bg-no-repeat bg-cover" style="background-image: url('../img/cdbevents.jpg');">
    <section class="relative mx-auto">
            <!-- navbar -->
            <nav class="flex justify-between  bg-gray-900 text-white ">
            <div class="px-5 xl:px-12 py-6 flex w-full items-center">
                <a class="text-3xl font-bold font-heading" href="./welcomeAdmin.php">
                <!-- <img class="h-9" src="logo.png" alt="logo"> -->
              Astro Administrador
                </a>
                <!-- Nav Links -->
                <ul class="hidden md:flex px-4 mx-auto font-semibold font-heading space-x-12">
                <li><a   class="hover:text-gray-200" href="./welcomeAdmin.php">Home</a></li>
                <li><a href="./AdminJourTable.php" class="hover:text-gray-200" >Periodistas</a></li>
                <li><a href="./AdminNewsTable.php" class="hover:text-gray-200" href="#">Noticias</a></li>
                <li><a href="./" class="hover:text-gray-200" href="#">Comentarios</a></li>
              
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
                <a
            href="./PHP/Logout.php"
            class="bg-black text-white p-3 m-3 font-semibold  cursor-pointer rounded hover:bg-white hover:text-black ease-in duration-200 flex-col "
            >Cerrar Sesion</a
          >
                
                </div>
            </div>
            <!-- Responsive navbar -->
            <a class="xl:hidden flex mr-6 items-center" href="#">
                
                
            </a>
            
            </nav>
        </section>
            <!-- component -->


<!-- component -->
<!-- component -->
<form action="./PHP/CRUD_journalist.php" method="POST">
<div class="relative flex  justify-center bg-center  py-12  items-center"
	>
	<div class="absolute  opacity-60 inset-0 z-0"></div>
	<div class="max-w-md w-full space-y-8 p-10 bg-white rounded-xl shadow-lg z-10">
<div class="grid  gap-8 grid-cols-1">
	<div class="flex flex-col ">
			<div class="flex flex-col sm:flex-row items-center">
				<h2 class="font-semibold text-lg mr-auto">Edita tu periodista</h2>
				<div class="w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0"></div>
			</div>
			<div class="mt-5">
				<div class="form">
					<div class="md:space-y-2 mb-3">
						<label class="text-xs font-semibold text-gray-600 py-2">La foto predeterminada del periodista<abbr class="hidden" title="required"></abbr></label>
						<div class="flex items-center py-6">
							<div class=" mr-4 flex-none rounded-xl border overflow-hidden">
                            <img class=" object-cover rounded-3xl" src="../img/<?php echo $RowReporter['ProfileImage'] ?>" alt="Current profile photo" id="preview1" height="200px" width="200px"/>
                </div>
								
							</div>
						</div>
						<div class="md:flex flex-row md:space-x-4 w-full text-xs">
							<div class="mb-3 space-y-2 w-full text-xs">
								<label class="font-semibold text-gray-600 py-2">Nombre del periodista<abbr title="required"></abbr></label>
								<input placeholder="Company Name" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"  type="text" name="Name" id="integration_shop_name" value="<?php echo $RowReporter['Name'] ?>">
								<p class="text-red text-xs hidden">Porfavor llena este espacio.</p>
							</div>
                            
							<div class="mb-3 space-y-2 w-full text-xs">
								<label class="font-semibold text-gray-600 py-2">Email del periodista<abbr title="required"></abbr></label>
								<input value="<?php echo $RowReporter['Email'] ?>" placeholder="Email ID" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"  type="email" name="Email" id="integration_shop_name">
								<p class="text-red text-xs hidden">Porfavor llena este espacio.</p>
							</div>
						</div>
						<div class="md:flex flex-row md:space-x-4 w-full text-xs">
							<div class="mb-3 space-y-2 w-full text-xs">
								<label class="font-semibold text-gray-600 py-2">Apellido<abbr title="required"></abbr></label>
								<input value="<?php echo $RowReporter['LastName'] ?>" placeholder="Company Name" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"  type="text" name="LastName" id="integration_shop_name">
								<p class="text-red text-xs hidden">Porfavor llena este espacio.</p>
							</div>
                            
							<div class="mb-3 space-y-2 w-full text-xs">
								<label class="font-semibold text-gray-600 py-2">Numero de telefono<abbr title="required"></abbr></label>
								<input value="<?php echo $RowReporter['PhoneNumber'] ?>" maxlength="14" placeholder="Email ID" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"  type="text" name="PhoneNumber" id="integration_shop_name">
								<p class="text-red text-xs hidden">Porfavor llena este espacio.</p>
							</div>
						</div>




                        <input type="hidden" name="Imagen" value="<?php echo $RowReporter['ProfileImage'] ?>">

                        <input type="hidden" name="ID" value="<?php echo $RowReporter['Email'] ?>" >
							</div>
							<div class="md:flex md:flex-row md:space-x-4 w-full text-xs">
								<div class="w-full flex flex-col mb-3">
									<label class="font-semibold text-gray-600 py-2">Contraseña</label>

									<input value="<?php echo $RowReporter['Password'] ?>" placeholder="Address" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" type="Password" 

                                    name="Password" 
                                    
                                    id="contraseña">
                                   
              </div>
              <div class=" flex justify-end relative ">
              <span onclick="mostrar()" id="eye" class=" cursor-pointer relative top-10 material-symbols-outlined">
visibility
</span>
                            </div>
             
								
								</div>
								
						
								<div class="mt-5 text-right md:space-x-3 md:block flex flex-col-reverse">
									
									<input type="submit" 
                                    name="editar" class="mb-2 md:mb-0 bg-yellow-400 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-yellow-500" value="ENVIAR">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
            </div>
            </form>
            <!-- End componen -->

            <footer class="bg-gray-800">
  <div class="container px-3 py-5 mx-auto">
      <div class="flex flex-col items-center text-center">
          <a href="#">
              <img class="w-auto h-14" src="../img/AstroFavicon.png" Alt="Imagen representativa de Noticias Astro Salesianum">
          </a>

          <p class="max-w-md mx-auto mt-4 text-white">Astrum Salesianum</p>

          <div class="flex flex-col mt-4 sm:flex-row sm:items-center sm:justify-center">
             
          <div class = "group fixed bottom-0 right-0 p-2  flex items-end justify-end w-24 h-24 " id="google_translate_element">
              
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

    <script> 
function googleTranslateElementInit() { new google.translate.TranslateElement({ pageLanguage: "es",includedLanguages: "en,es",}, "google_translate_element" ); } </script>
<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>
</html>
<?php } } ?>