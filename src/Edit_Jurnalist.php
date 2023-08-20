<?php 
session_start();



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
<script src="./ JS/LoginEye.js"></script>
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
                <li><a href="./tableusu.php" class="hover:text-gray-200" >Periodistas</a></li>
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
                <a class="flex items-center hover:text-gray-200" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
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
            <!-- component -->


<!-- component -->
<!-- component -->
<form action="./Funciones/CRUD_journalist.php" method="POST">
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
								<input value="<?php echo $RowReporter['Email'] ?>" placeholder="Email ID" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"  type="text" name="Email" id="integration_shop_name">
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
                                    
                                    id="contraseña"><img src="../img/EyePassword.png" onclick="mostrar()" class="icon" id="eye" class=" relative bottom-3 z-10 top-10 w-1 h-1">
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
              <a href="#" class="mx-2 text-sm text-gray-500 transition-colors duration-300 hover:text-gray-500 dark:hover:text-gray-300" aria-label="Reddit"> Teams </a>

              <a href="#" class="mx-2 text-sm text-gray-500 transition-colors duration-300 hover:text-gray-500 dark:hover:text-gray-300" aria-label="Reddit"> Privacy </a>

              <a href="#" class="mx-2 text-sm text-gray-500 transition-colors duration-300 hover:text-gray-500 dark:hover:text-gray-300" aria-label="Reddit"> Cookies </a>
          </div>
      </div>
  </div>
</footer>
</body>
</html>
<?php } ?>