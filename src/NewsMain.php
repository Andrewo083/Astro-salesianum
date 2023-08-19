<?php

session_start();

$email = $_SESSION['Email'];

$id_news = $_GET['new']; //Estandar para trabajo con las news
$conexion = mysqli_connect('localhost', 'root', '', 'astrodb');
$carpet_images = "../img/";
$query = "SELECT * FROM `news` WHERE `id_news` = '$id_news'";
$result = mysqli_query($conexion, $query);
while ($row = mysqli_fetch_array($result)) {

 

?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../img/AstroFavicon.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $row['headline'] ?></title>
    <link rel="stylesheet" href="../Public/tailwind.css">
     <link rel="stylesheet" href="./css/ProfileImage.css">
     
  </head>

  <body>
    <div>
      <section class="relative mx-auto">
        <!-- navbar -->
        <nav class="flex justify-between bg-gray-900 text-white">
          <div class="px-5 xl:px-12 py-6 flex w-full items-center">
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
            <div class=" xl:flex  space-x-5 items-center">
            <a class="flex items-center hover:text-gray-200" href="./<?php include "./Funciones/RestrictAncleRol.php" ?>">
                  <div class="imagen-circular">
        <!-- Aquí colocas la URL de la imagen -->
                    <img src="../img/<?php echo $_SESSION['ProfileImage'] ?>" alt="Imagen Circular">
                  </div>
                
                </a>
            </div>
        </nav>
        <!-- END NAV-->

        <!-- component -->


        <div class="container mx-auto px-6 py-16 text-center">
        <div class="mx-44">
        <h1 class="text-3xl text-center font-bold text-gray-800 dark:text-white lg:text-4xl"><?php echo $row['headline']?></h1>
        <p class="mt-6 text-gray-500 dark:text-gray-300"><b><?php echo $row['drophead'] ?></b><br><br><?php echo $row['BodyOne'] ?></p><br>
        <a class="mt-6 rounded-lg bg-blue-600 px-6 py-2.5 text-center text-sm font-medium capitalize leading-5 text-white hover:bg-blue-500 focus:outline-none lg:mx-0 lg:w-auto "><b>Fotografo:</b> <?php echo $row['photographer']; ?>
        </a>
        </div>

          <div class="mt-10 flex justify-center">
            <!--IMAGEN PRINCIPAL-->
            <img class="h-96 w-full rounded-xl  object-cover lg:w-4/5" src="../img/<?php echo $row['main_image']?>" alt="Imagen Banner" />
          </div>
        </div>

        <!-- end new-->
        <!-- coment-->
        <!-- component -->
        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.4/dist/flowbite.min.css" />

        <!-- This is an example component -->
        <div class="max-w-2xl mx-auto">




        </div>
        <!-- end coment-->





        <div class="flex min-h-screen items-center justify-center p-7 bg-white">
          <div class="container grid max-w-screen-xl gap-8 lg:grid-cols-2 lg:grid-rows-2">
            <div class="row-span-2 flex flex-col rounded-md border border-slate-200">
              <!--IMAGEN GRANDE 2-->
              <div class="h-1/2 flex-1"><img src="../img/<?php echo $row['main_image']?>" class="w-full object-cover  object-center" alt="Imagen Completa" /></div>
              <div class="p-10">

                <p class="mt-2 text-slate-500"><?php echo $row['BodyFour'] ?><br><br><b>Escrito por</b>
              
              <?php
              $email = $row['id_reporter'];
              if($email == NULL){
                echo "@Astro Salesianum";
              }else{
              $QueryReport = "SELECT * FROM `reporter` WHERE `Email` = '$email'";
              $ResultReport = mysqli_query($conexion, $QueryReport);
              while ($RowReport = mysqli_fetch_array($ResultReport)) {
                echo "@".$RowReport['Name']." ".$RowReport['LastName'];
              }
            }
              ?></p>

              </div>
            </div>
            <div class="flex rounded-md border border-slate-200">
              <div class="flex-1 p-10">

                <p class="mt-2 text-slate-500"><?php echo $row['BodyTwo'] ?></p>

              </div>

              <div class="relative hidden h-full w-1/3 overflow-hidden lg:block">
                <div class="absolute inset-0">
                  <img src="../img/<?php echo $row['main_image']?>" class="h-full w-full object-cover object-left-top" alt="Imagen izquierda" />
                </div>
              </div>
            </div>
            <div class="flex rounded-md border border-slate-200">
              <div class="flex-1 p-10">

                <p class="mt-2 text-slate-500"><?php echo $row['BodyThree'] ?>
              
              
              
              
              </p>

              </div>

              <div class="relative hidden h-full w-1/3 overflow-hidden lg:block">
                <div class="absolute inset-0">
                  <img src="../img/<?php echo $row['main_image']?>" class="h-full w-full object-cover  object-right-bottom" alt="Imagen derecha" />
                </div>
              </div>

            </div>
          </div>

        </div>
        <!-- component -->
        
        <div class="container mx-auto px-6 py-6 text-center">
          <div class="mx-44  py-10 ">
            <h1 class="text-3xl text-center font-bold text-gray-800 dark:text-white lg:text-4xl">Noticias relacionadas</h1>
          </div>
          
          <section class="text-gray-600 body-font">
            <div class="container px-5  mx-auto">
              <div class="flex flex-wrap -m-4">
                
<?php 
$i = 0;
$Category = $row['Category'];
$State = "Active";
$id_news = $row['id_news'];
                $QueryRecom = "SELECT * FROM `news` WHERE  `id_news` != '$id_news' AND `State` = '$State' ORDER BY `date` DESC";
$ResultRecom = mysqli_query($conexion, $QueryRecom);
while (($RowQuery = mysqli_fetch_array($ResultRecom))&&($i < 3)) {
$i++;


  $contenido = $RowQuery['BodyOne']; //  aquí tienes el contenido de la base de datos
  $numero_caracteres = 250;
  $contenido_recortado = substr($contenido, 0, $numero_caracteres);


?>
                <!--INICIO RECOMENDACION-->
                <a href="./NewsMain.php?new=<?php echo $RowQuery['id_news'];?>">
                <div class="p-4 md:w-1/3">
                  <div class="h-full rounded-xl shadow-cla-blue bg-gradient-to-r from-indigo-50 to-blue-50 overflow-hidden">
                    <img class="lg:h-48 md:h-36 w-full object-cover object-center scale-110 transition-all duration-400 hover:scale-100" src="../img/<?php echo $RowQuery['main_image'] ?>" alt="blog">
                    <div class="p-6">
                      <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1"><?php echo $RowQuery['Category']?></h2>
                      <h1 class="title-font text-lg font-medium text-gray-600 mb-3"><?php echo $RowQuery['headline']?></h1>
                      <p class="leading-relaxed mb-3 text-jusitfy"><?php echo $contenido_recortado; ?>...</p>
                      <div class=" ">
                        <a href="./NewsMain.php?new=<?php echo $RowQuery['id_news'];?>" class=" bg-gradient-to-r from-cyan-400 to-blue-400 hover:scale-105 drop-shadow-md  shadow-cla-blue px-4 py-1 rounded-lg">Leer más</a>

                      </div>
                    </div>
                  </div>
                </div>
                </a>
                  <!--FIN RECOMENDACION-->
               <?php } ?>





              </div>
            </div>
            
            </div>
          </section>
         
            <div class="mx-44  py-10 ">
              <h1 class="text-3xl text-center font-bold text-gray-800 dark:text-white lg:text-4xl">Comentanos!</h1>
            </div>
          
                
                		<!-- Chat content -->
							<div class="flex-1  flex-col bg-gray-100 overflow-hidden container mx-auto px-6 shadow-xl  pl-10 flow-root rounded-lg sm:py-2">
								<!-- Top bar -->
                




                <!-- FORMULARIO-->
                <form action="./funciones/InsertComment.php?new=<?php echo $_GET['new'] ?>" method="POST">
								  <div class="pb-6 px-4 flex-none">
									  <div class="flex rounded-lg overflow-hidden">
										
										  <input type="text" class="w-full px-4 border-none bg-gray-300 font-semibold" placeholder="Comentar" name="Comment" />

										  <button type="submit" class="inline-flex justify-center p-2 text-blue-600 rounded-full cursor-pointer hover:bg-blue-100">
											  <svg class="w-6 h-6 rotate-90" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
											    <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z">
                          </path>
											  </svg>
										  </button>

                    </div>
									</div>
                </form>    
                     <!-- FORMULARIO-->
                  
								<!-- Chat messages -->
                <?php 
                 $new = $_GET['new'];
                 $QueryComment = "SELECT * FROM `comments` WHERE `id_new` = '$new' AND `State` = '$State'  ORDER BY `date`AND `hour` DESC";
                 $ResultComment = mysqli_query($conexion, $QueryComment);
                 while ($RowComment = mysqli_fetch_array($ResultComment)) {

                  include "./Funciones/PrintVarComments.php"

                ?>
                 <?php 
                 if($row['id_user' == NULL]){
                  $email = $row['id_reporter'];  
                  
                 }else  if($row['id_reporter'] == NULL){
                  $email = $row['id_user'];  
                 }
                   include("./Funciones/PrintUser.php"); 
                  ?>
								<div class="px-6 py-4 flex-1 ">
									<!-- A message -->
									<div class="border-b border-gray-600 py-3 flex items-start mb-4 text-sm">
										<img src="../img/<?php echo $UserProfileImage;?>" class="cursor-pointer w-10 h-10 rounded-3xl mr-3">
										<div class="flex-1 overflow-hidden">
											<div>
                       
												<span class="font-bold text-red-300 cursor-pointer hover:underline"><?php echo $UserName ?></span>
												<span class="font-bold text-gray-400 text-xs">&nbsp;<?php echo $hour ?></span>
											</div>
											<p class="text-black "><?php  echo $comment; ?>. <br><b><?php echo $date?></b></p>
										</div>
									</div>
								</div>
                <?php } }?>
                
                	<!-- message finish -->
							</div>
             

          
            <div class=" py-10  flex flex-col">



            
              
                
              
            </div>
            </main>
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
              <a href="#" class="mx-2 text-sm text-gray-500 transition-colors duration-300 hover:text-gray-500 dark:hover:text-gray-300" aria-label="Reddit"> Teams </a>

              <a href="#" class="mx-2 text-sm text-gray-500 transition-colors duration-300 hover:text-gray-500 dark:hover:text-gray-300" aria-label="Reddit"> Privacy </a>

              <a href="#" class="mx-2 text-sm text-gray-500 transition-colors duration-300 hover:text-gray-500 dark:hover:text-gray-300" aria-label="Reddit"> Cookies </a>
          </div>
      </div>
  </div>
</footer>
  </body>

  </html>


