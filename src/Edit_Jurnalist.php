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
    <link rel="stylesheet" href="../Public/menu.css">
    <title>¡Edita tu Reportero!</title>
        <link rel="stylesheet" href="../Public/tailwind.css">    
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css" integrity="sha256-x8PYmLKD83R9T/sYmJn1j3is/chhJdySyhet/JuHnfY=" crossorigin="anonymous" />

<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>  <link rel="stylesheet" href="../Public/boton.css">
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
            <span  >Hogar</span>
          </a>
          <a
            href="./welcomeAdmin.php"
            class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-white items-center justify-center hover:bg-gray-900 hover:text-white"
          >
            <span  >Administración</span>
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
            <span><b>Cerrar Sesión</b></span>
          </a>
          
       
    
        </div>
        
                 
      </div>
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
								<p class="text-red text-xs hidden">Por favor, llena este espacio..</p>
							</div>
                            
							<div class="mb-3 space-y-2 w-full text-xs">
								<label class="font-semibold text-gray-600 py-2">E-Mail del periodista<abbr title="required"></abbr></label>
								<input readonly value="<?php echo $RowReporter['Email'] ?>" placeholder="Email ID" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"  type="email" name="Email" id="integration_shop_name">
								<p class="text-red text-xs hidden">Por favor, llena este espacio..</p>
							</div>
						</div>
						<div class="md:flex flex-row md:space-x-4 w-full text-xs">
							<div class="mb-3 space-y-2 w-full text-xs">
								<label class="font-semibold text-gray-600 py-2">Apellido<abbr title="required"></abbr></label>
								<input value="<?php echo $RowReporter['LastName'] ?>" placeholder="Company Name" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"  type="text" name="LastName" id="integration_shop_name">
								<p class="text-red text-xs hidden">Por favor, llena este espacio..</p>
							</div>
                            
							<div class="mb-3 space-y-2 w-full text-xs">
								<label class="font-semibold text-gray-600 py-2">Número de teléfono.<abbr title="required"></abbr></label>
								<input value="<?php echo $RowReporter['PhoneNumber'] ?>"  maxlength="9" placeholder="Email ID" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"  type="text" name="PhoneNumber" id="integration_shop_name">
								<p class="text-red text-xs hidden">Por favor, llena este espacio..</p>
							</div>
						</div>




                        <input type="hidden" name="Imagen" value="<?php echo $RowReporter['ProfileImage'] ?>">

                        <input type="hidden" name="ID" value="<?php echo $RowReporter['Email'] ?>" >
							</div>
							<div class="md:flex md:flex-row md:space-x-4 w-full text-xs">
								<div class="w-full flex flex-col mb-3">
									<label class="font-semibold text-gray-600 py-2">Contraseña</label>

                                    <i> <h6>Debe tener  8 caracteres, una  mayúscula y un número*</h6></i>
									<input value="<?php echo $RowReporter['Password'] ?>" placeholder="Address" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" type="Password" 

                                    name="Password" 
                                    
                                    id="contraseña">
                                   
              </div>
              <div class=" flex justify-end relative">
                                    <i class="fa fa-eye-slash absolute bottom-6 right-6 cursor-pointer" aria-hidden="true"  onclick="mostrar()" class="icon" id="eye" class=""></i>    
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

          <p class="max-w-md mx-auto mt-4 text-white">Astro Salesianum</p>

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