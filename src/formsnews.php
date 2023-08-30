<?php 
session_start();

if($_SESSION['ROL'] != 2){

  header("Location: ./Error.php");

}else{

if(isset($_SESSION['Email'])){
  
$Email = $_SESSION['Email'];
$conexion = mysqli_connect('localhost', 'root', '', 'astrodb');
$carpet_images = "../img/";
$query = "SELECT * FROM `reporter` WHERE `email` = '$Email'";
$result = mysqli_query($conexion, $query);



while ($row = mysqli_fetch_array($result)) {





}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"><link rel="shortcut icon" href="../img/AstroFavicon.png" type="image/x-icon">
   
<link rel="stylesheet" href="../Public/tailwind.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Publica tu noticia!</title>
    <link rel="stylesheet" href="../Public/boton.css">
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
</head>
<body>
  
    <form method="post" enctype="multipart/form-data" action="./PHP/CRUD_New.php">
        <div class="bg-indigo-50 min-h-screen md:px-20 sm:pt-6">
          <div class=" bg-white rounded-md px-6 py-10 max-w-2xl mx-auto">
            <h1 class="text-center text-2xl font-bold text-gray-500 mb-10">Subir Noticia</h1>
            <div class="space-y-4">


              <div>
                <label for="title" class="text-2lx font-bold text-gray-500"></label>
                <input required type="hidden" value="<?php echo $Email; ?>" id="reporter" name="id_reporter" class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md"  />
              </div>


              <div class="shrink-0 mt-5">


                <img class=" object-cover rounded-3xl" src="../img/subir.jpg" alt="Current profile photo" id="preview1" height="200px" width="200px"/>


              </div> 


              <label class="block pt-2">
                <span class="sr-only t-2">Choose profile photo</span>


                <input required name="imagen" type="file" id="imagde1" accept="image/*" class="w-full text-sm text-slate-500
                  file:mr-4 file:py-2 file:px-4
                  file:rounded-full file:border-0
                  file:text-sm file:font-semibold
                  border-green-300
                  file:bg-green file:text-zinc-900
                  hover:file:bg-rose-300
                "/> <br><br>
               
                
                

              </label>
              <div class="w-full p-4">
              <div class="p-2">
                <label for="photographer" class="text-2lx font-bold text-gray-500">Fotografo</label>
                
                <input required value="@Epicyears!" type="text"  id="photographer" name="photographer" class="ml-2 outline-none py-1 px-30 sm:px-40 text-md border-2 rounded-md" />
                
              </div>
              <div class="p-2">
                <label for="headline" class="text-2lx font-bold text-gray-500">Titulo</label>
                <input required maxlength="70" type="text"  id="headline" name="headline" class="ml-2 outline-none py-1 px-30 sm:px-40 text-md border-2 rounded-md"  />
              </div>
              <div class="p-2">
                <label for="drophead" class="text-2lx font-bold text-gray-500">Encabezado</label>
                <input required maxlength="75"  type="text"  id="drophead" name="drophead" class="ml-2 outline-none py-1 px-30 sm:px-40 text-md border-2 rounded-md"  />
              </div>
              <div class="p-2">
                <label for="date" class="text-2lx font-bold text-gray-500" >Fecha</label>
                <input required  type="date"  id="date" name="date" max="<?php echo date('Y-m-d'); ?>" class="ml-2 outline-none py-1 px-30 sm:px-40 text-md border-2 rounded-md"  />
              </div>

    </div>



              <div>

                <label for="description" class="block mb-2 text-lg text-gray-500 font-bold">Describe el Primer parrafo (400 caracteres)</label>
                <textarea id="description" cols="15" rows="5" name="BodyOne"  maxlength="400" placeholder="Escribe tu noticia..." class="w-full font-serif  p-4 text-gray-600 bg-indigo-50 outline-none rounded-md"></textarea>
              </div>
              <div>

<label for="description" class="block mb-2 text-lg text-gray-500 font-bold">Describe el Segundo parrafo (400 caracteres)</label>
<textarea id="description" cols="15" rows="5" name="BodyTwo"  maxlength="400" placeholder="Escribe tu noticia..." class="w-full font-serif  p-4 text-gray-600 bg-indigo-50 outline-none rounded-md"></textarea>
</div>
<div>

<label for="description" class="block mb-2 text-lg text-gray-500 font-bold">Describe el Tercer parrafo (400 caracteres)</label>
<textarea id="description" cols="15" rows="5" name="BodyThree"  maxlength="400" placeholder="Escribe tu noticia..." class="w-full font-serif  p-4 text-gray-600 bg-indigo-50 outline-none rounded-md"></textarea>
</div>

<div>

<label for="description" class="block mb-2 text-lg text-gray-500 font-bold">Describe el Cuarto parrafo (400 caracteres)</label>
<textarea id="description" cols="15" rows="5" name="BodyFour"  maxlength="400" placeholder="Escribe tu noticia..." class="w-full font-serif  p-4 text-gray-600 bg-indigo-50 outline-none rounded-md"></textarea>
</div>
              <div>
                <label for="name" class="text-lx font-bold text-gray-500">Seleccione un Colegio:</label>
                <div class="options md:flex md:space-x-6 text-sm items-center text-gray-700 mt-4">

                    <select class="w-full border border-gray-200 p-2 focus:outline-none focus:border-gray-500" name="school">
                        <option value="Colegio Don Bosco">Colegio Don Bosco</option>
                        <option value="Instituto Ricaldone">Instituto Ricaldone</option>
                        <option value="Colegio Santa Cecilia">Colegio Santa Cecilia </option>
                        <option value="Colegio Maria Auxiliadora">Colegio Maria Auxiliadora</option>
                    </select>
                </div>    
              </div>
              <div>
                <label for="name" class="text-lx font-bold text-gray-500">Seleccione una Categoria:</label>
                <div class="options md:flex md:space-x-6 text-sm items-center text-gray-700 mt-4">

                    <select class="w-full border border-gray-200 p-2 focus:outline-none focus:border-gray-500" name="category">
                        <option value="Deportes">Deportes</option>
                        <option value="Cultura">Cultura</option>
                        <option value="Eventos Especiales">Eventos Especiales</option>
                        
                    </select>
                </div>    
              </div>
           <input class=" px-6 py-2 mx-auto block rounded-md text-lg font-semibold text-indigo-100 bg-gray-800  " type="submit" value="SUBIR" name="submit">
             
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
<?php } }?>
<script> 
    function googleTranslateElementInit() { new google.translate.TranslateElement({ pageLanguage: "es",includedLanguages: "en,es",}, "google_translate_element" ); } </script>
    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    
    