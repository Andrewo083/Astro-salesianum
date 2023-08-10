<?php 
session_start();



$conexion = mysqli_connect('localhost', 'root', '', 'astrodb');

$email = $_SESSION['Email'];
$QueryJournalist = "SELECT * FROM reporter WHERE Email = '$email'";
$ResultJournalist = mysqli_query($conexion, $QueryJournalist);
while($RowQuery = mysqli_fetch_array($ResultJournalist)){
  $ProfileImage = $RowQuery['ProfileImage'];
}
$new= $_GET['new'];
$carpet_images = "../img/";
$query = "SELECT * FROM `news` WHERE `id_news` = '$new'";
$result = mysqli_query($conexion, $query);
while($row = mysqli_fetch_array($result)){




?>



<!DOCTYPE html>
<html lang="en">
<head>
<style>
        /* Estilos para hacer la imagen redonda */
        .imagen-circular {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            overflow: hidden;
        }
        /* Estilos para asegurar que la imagen ocupe todo el espacio del contenedor circular */
        .imagen-circular img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
    <meta charset="UTF-8">
    
<link rel="stylesheet" href="../Public/tailwind.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Editalo!</title>
</head>
<body>
    <div>
        <section class="relative mx-auto">
            <!-- navbar -->
            <nav class="flex justify-between bg-gray-900 text-white ">
            <div class="px-5 xl:px-12 py-6 flex w-full items-center">
            <a href="./newindex.php">
            <img src="../img/logis.png" alt="" width="50px"></a>
                <a class="text-3xl font-bold font-heading" href="./newindex.php">
               
                <!-- <img class="h-9" src="logo.png" alt="logo"> -->
          Astro Salesianum
                </a>
                <!-- Nav Links -->
                <ul class="hidden md:flex px-4 mx-auto font-semibold font-heading space-x-12">
                <li><a  href=".//newindex.php" class="hover:text-gray-200" href="#">Home</a></li>
                <li><a href="./ChalecoIndex.php" class="hover:text-gray-200" href="#">Chaleco</a></li>
                <li><a href="./Ricalindex.php" class="hover:text-gray-200" href="#">Ricaldonde</a></li>
                <li><a href="./DonBoscoIndex.php" class="hover:text-gray-200" href="#">Don bosco</a></li>
                <li><a  href="./MariaIndex.php" class="hover:text-gray-200" href="#">Maria axuliadora</a></li>
                </ul>
                <!-- Header Icons -->
                <div class="hidden xl:flex items-center space-x-5 ">
                <a class="hover:text-gray-200" href="#">
                    
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                </a>
                <a class="flex items-center hover:text-gray-200" href="#">
                    
                </a>
                <!-- Sign In / Register      -->
                <a class="flex items-center hover:text-gray-200" href="./Profile_Journalist.php">
                <div class="imagen-circular">
        <!-- Aquí colocas la URL de la imagen -->
        <img src="../img/<?php echo $ProfileImage ?>" alt="Imagen Circular">
    </div>
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
    <form method="post" enctype="multipart/form-data" action="./PHP/CRUD_New.php">
        <div class="bg-indigo-50 min-h-screen md:px-20 pt-6">
          <div class=" bg-white rounded-md px-6 py-10 max-w-2xl mx-auto">
            <h1 class="text-center text-2xl font-bold text-gray-500 mb-10">Edita Tu Noticia</h1>
            <div class="space-y-4">


              <div>
                <label for="title" class="text-2lx font-bold text-gray-500">Imagen Actual</label>
                <input  type="hidden" value="<?php echo $row['id_reporter']; ?>" id="reporter" name="id_reporter" class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md"  />
                <input  type="hidden" value="<?php echo $row['id_news']; ?>" id="reporter" name="id_news" class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md"  />
              </div>


              <div class="shrink-0 mt-5">


                <img class=" object-cover rounded-3xl" src="../img/<?php echo $row['main_image']; ?>" alt="Current profile photo" id="preview1" height="700px" width="700px"/>


              </div> 

            <input type="hidden" name="imagen" value="<?php echo $row['main_image']?>">
              <div>
                <label for="photographer" class="text-2lx font-bold text-gray-500">Fotografo</label>
                <input  type="text" value="<?php echo $row['photographer']; ?>"  id="photographer" name="photographer" class="ml-2 outline-none py-1 px-40 text-md border-2 rounded-md"  />
              </div>
              <div>
                <label for="headline" class="text-2lx font-bold text-gray-500">Titulo</label>
                <input  type="text" value="<?php echo $row['headline']; ?>"  id="headline" name="headline" class="ml-2 outline-none py-1 px-40 text-md border-2 rounded-md"  />
              </div>
              <div>
                <label for="drophead" class="text-2lx font-bold text-gray-500">Encabezado</label>
                <input  type="text" value="<?php echo $row['drophead']; ?>" id="drophead" name="drophead" class="ml-2 outline-none py-1 px-40 text-md border-2 rounded-md"  />
              </div>
              <div>
                <label for="date" class="text-2lx font-bold text-gray-500">Fecha</label>
                <input value="<?php echo $row['date']; ?>" type="date"  id="date" name="date" class="ml-2 outline-none py-1 px-40 text-md border-2 rounded-md"  />
              </div>






              <div>

                <label for="description" class="block mb-2 text-lg text-gray-500 font-bold">Describe el Primer parrafo (200 caracteres)</label>
                <textarea id="description" cols="15" rows="5" name="BodyOne"  maxlength="200" placeholder="Escribe tu noticia..." class="w-full font-serif  p-4 text-gray-600 bg-indigo-50 outline-none rounded-md"><?php echo $row['BodyOne']?></textarea>
              </div>
              <div>

<label for="description" class="block mb-2 text-lg text-gray-500 font-bold">Describe el Segundo parrafo (200 caracteres)</label>
<textarea id="description" cols="15" rows="5" name="BodyTwo"  maxlength="200" placeholder="Escribe tu noticia..." class="w-full font-serif  p-4 text-gray-600 bg-indigo-50 outline-none rounded-md"><?php echo $row['BodyTwo']?></textarea>
</div>
<div>

<label for="description" class="block mb-2 text-lg text-gray-500 font-bold">Describe el Tercer parrafo (200 caracteres)</label>
<textarea id="description" cols="15" rows="5" name="BodyThree"  maxlength="200" placeholder="Escribe tu noticia..." class="w-full font-serif  p-4 text-gray-600 bg-indigo-50 outline-none rounded-md"><?php echo $row['BodyThree']?></textarea>
</div>

<div>

<label for="description" class="block mb-2 text-lg text-gray-500 font-bold">Describe el Cuarto parrafo (200 caracteres)</label>
<textarea id="description" cols="15" rows="5" name="BodyFour"  maxlength="200" placeholder="Escribe tu noticia..." class="w-full font-serif  p-4 text-gray-600 bg-indigo-50 outline-none rounded-md"><?php echo $row['BodyFour']?></textarea>
</div>
                <label for="name" class="text-lx font-bold text-gray-500">Seleccione un Colegio:</label>
                <div class="options md:flex md:space-x-6 text-sm items-center text-gray-700 mt-4">

                    <select class="w-full border border-gray-200 p-2 focus:outline-none focus:border-gray-500" name="school">
                      <option value="<?php echo $row['school']; ?>"><?php echo $row['school']; ?> (Actual)</option>
                        <option value="Colegio Don Bosco">Colegio Don Bosco</option>
                        <option value="Instituto Ricaldone">Instituto Ricaldone</option>
                        <option value="Colegio Santa Cecilia">Colegio Santa Cecilia especiales</option>
                        <option value="Colegio Maria Auxiliadora">Colegio Maria Auxiliadora</option>
                    </select>
                </div>    
              </div>
              <div>
                <label for="name" class="text-lx font-bold text-gray-500">Seleccione una Categoria:</label>
                <div class="options md:flex md:space-x-6 text-sm items-center text-gray-700 mt-4">

                    <select class="w-full border border-gray-200 p-2 focus:outline-none focus:border-gray-500" name="category">
                    <option value="<?php echo $row['Category']; ?>"><?php echo $row['Category']; ?> (Actual)</option>
                    <option value="Deportes">Deportes</option>
                        <option value="Cultura">Cultura</option>
                        <option value="Eventos Especiales">Eventos Especiales</option>
                        
                    </select>
                </div>    
              </div>
           <input class=" px-6 py-2 mx-auto block rounded-md text-lg font-semibold text-indigo-100 bg-gray-800  " type="submit" value="ACTUALIZAR" name="edit">
              
            </div>
          </div>
        </div>
      </form>

</body>
</html>
<script>
  const imagde1 = document.getElementById('imagde1');
  const preview1 = document.getElementById('preview1');

  imagde1.addEventListener('change', function() {
    const archivo = imagde1.files[0];
    if (archivo) {
      const lector = new FileReader();

      lector.addEventListener('load', function() {
        preview1.src = lector.result;
        preview1.style.display = 'block';
      });

      lector.readAsDataURL(archivo);
    } else {
      preview1.src = '#';
      preview1.style.display = 'none';
    }
  });
</script>

<?php } ?>