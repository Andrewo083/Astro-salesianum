<?php 


$Email = $_GET['jour'];




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
<link rel="stylesheet" href="../Public/tailwind.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <section class="relative mx-auto">
            <!-- navbar -->
            <nav class="flex justify-between bg-gray-900 text-white ">
            <div class="px-5 xl:px-12 py-6 flex w-full items-center">
                <a class="text-3xl font-bold font-heading" href="#">
                <!-- <img class="h-9" src="logo.png" alt="logo"> -->
                Astro
                </a>
                <!-- Nav Links -->
                <ul class="hidden md:flex px-4 mx-auto font-semibold font-heading space-x-12">
                <li><a class="hover:text-gray-200" href="#">Home</a></li>
                <li><a class="hover:text-gray-200" href="#">Casas</a></li>
                <li><a class="hover:text-gray-200" href="#">Nosotros</a></li>
                <li><a class="hover:text-gray-200" href="#">Categorias</a></li>
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
        </div>
    <form method="post" enctype="multipart/form-data" action="./PHP/CRUD_New.php">
        <div class="bg-indigo-50 min-h-screen md:px-20 pt-6">
          <div class=" bg-white rounded-md px-6 py-10 max-w-2xl mx-auto">
            <h1 class="text-center text-2xl font-bold text-gray-500 mb-10">Subir Noticia</h1>
            <div class="space-y-4">


              <div>
                <label for="title" class="text-2lx font-bold text-gray-500">Reportero</label>
                <input  type="text" value="<?php echo $Email; ?>" id="reporter" name="id_reporter" class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md"  />
              </div>


              <div class="shrink-0 mt-5">


                <img class=" object-cover rounded-3xl" src="../img/subir.jpg" alt="Current profile photo" id="preview1" height="200px" width="200px"/>


              </div> 


              <label class="block pt-2">
                <span class="sr-only t-2">Choose profile photo</span>


                <input name="imagen" type="file" id="imagde1" accept="image/*" class="w-full text-sm text-slate-500
                  file:mr-4 file:py-2 file:px-4
                  file:rounded-full file:border-0
                  file:text-sm file:font-semibold
                  border-green-300
                  file:bg-green file:text-zinc-900
                  hover:file:bg-rose-300
                "/> <br><br>
               
                
                

              </label>
              <div>
                <label for="photographer" class="text-2lx font-bold text-gray-500">Fotografo</label>
                <input  type="text"  id="photographer" name="photographer" class="ml-2 outline-none py-1 px-40 text-md border-2 rounded-md"  />
              </div>
              <div>
                <label for="headline" class="text-2lx font-bold text-gray-500">Titulo</label>
                <input  type="text"  id="headline" name="headline" class="ml-2 outline-none py-1 px-40 text-md border-2 rounded-md"  />
              </div>
              <div>
                <label for="drophead" class="text-2lx font-bold text-gray-500">Encabezado</label>
                <input  type="text"  id="drophead" name="drophead" class="ml-2 outline-none py-1 px-40 text-md border-2 rounded-md"  />
              </div>
              <div>
                <label for="date" class="text-2lx font-bold text-gray-500">Fecha</label>
                <input  type="date"  id="date" name="date" class="ml-2 outline-none py-1 px-40 text-md border-2 rounded-md"  />
              </div>






              <div>

                <label for="description" class="block mb-2 text-lg text-gray-500 font-bold">Describe la noticia:</label>
                <textarea id="description" cols="30" rows="10" name="body"  maxlength="500" placeholder="Escribe tu noticia..." class="w-full font-serif  p-4 text-gray-600 bg-indigo-50 outline-none rounded-md"></textarea>
              </div>
              <div>
                <label for="name" class="text-lx font-bold text-gray-500">Seleccione un Colegio:</label>
                <div class="options md:flex md:space-x-6 text-sm items-center text-gray-700 mt-4">

                    <select class="w-full border border-gray-200 p-2 focus:outline-none focus:border-gray-500" name="school">
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
                        <option value="Deportes">Deportes</option>
                        <option value="Cultura">Cultura</option>
                        <option value="Eventos Especiales">Eventos Especiales</option>
                        
                    </select>
                </div>    
              </div>
           <input class=" px-6 py-2 mx-auto block rounded-md text-lg font-semibold text-indigo-100 bg-gray-800  " type="submit" value="SUBIR" name="submit">
              <button  name="insert">Subir</button>
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