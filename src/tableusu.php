<?php
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
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../Public/tailwind.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body class="w-full h-screen bg-no-repeat bg-cover" style="background-image: url('../img/back.jpg');">
  <nav class=" py-6 relative items-center ">
    <div class="container mx-auto flex px-8 xl:px-0 ">
      <div class="flex flex-grow">
        <a href="">

        </a>
        <h1 class="flex items-center m-2 font-bold text-3xl font-heading  text-white">
          Astro alesianum
        </h1>
      </div>
      <div class="flex lg:hidden">
        <img src="../img/menu.png" onclick="openMenu();">
      </div>
      <div id="menu" class="lg:flex hidden flex-grow justify-between items-center absolute lg:relative lg:top-0 top-20 ">
        <div>
          <a href="./Administrador.php" class="text-white hover:text-black lg:mr-7 font-semibold ">Creacion de Reporteros</a>
          <a href="../src/tablemain.html" class="text-white hover:text-black lg:mr-7 font-semibold ">Publicaciones</a>
          <a href="#" class="text-white  hover:text-black lg:mr-7 font-semibold ">mision</a>
          <a href="#" class="text-white hover:text-black font-semibold ">other</a>
        </div>
        <div>
          <a href="#" class="  text-white font-semibold p-3 m-3 cursor-pointer rounded hover:bg-white hover:text-black ease-in duration-200">Iniciar sesion</a>
          <a href="../src/login.html" class="bg-black text-white p-3 m-3 font-semibold  cursor-pointer rounded hover:bg-white hover:text-black ease-in duration-200 flex-col ">Registrate</a>
        </div>
      </div>
    </div>
    <!-- finmenu-->

    <!-- tabla-->
    <div class=" pt-12 pr-0 pb-12 pl-0 mt-0 mr-auto mb-0 ml-auto sm:py-16 lg:py-20">
      <div class="pt-0 pr-4 pb-0 pl-4 mt-0 mr-auto mb-0 ml-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="pt-0 pr-4 pb-0 pl-4 mt-0 mr-auto mb-0 ml-auto max-w-4xl sm:px-6 lg:px-8">
          <div class="pt-0 pr-4 pb-0 pl-4 mt-0 mr-auto mb-0 ml-auto sm:flex sm:items-center sm:justify-between">
            <div>
              <p class="text-xl font-bold text-white">Adminitracion de cuentas</p>
              <p class="text-sm mt-1 mr-0 mb-0 ml-0 font-semi-bold text-gray-300">Aqui podras editar los datos del reportero o en dado caso, eliminarlo.</p>
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
                      <img src="../img/sara.png" class="flex-shrink-0 object-cover rounded-full btn- w-10 h-10" />


                      <div class="mt-0 mr-0 mb-0 ml-4 flex-1 min-w-0">
                        <p class="text-lg font-bold text-white truncate"> <?php echo $row['Email'] ?> </p>
                        <p class="text-gray-400 text-md">Periodista</p>
                      </div>
                    </div>
                    <div class="mt-4 mr-0 mb-0 ml-0 pt-0 pr-0 pb-0 pl-14 flex items-center sm:space-x-6 sm:pl-0 sm:mt-0">
                      <a href="./AdministradorUptdate.php?ID=<?php echo $row['Email']; ?>" class="bg-gray-900 pt-2 pr-6 pb-2 pl-6 text-lg font-medium text-gray-100 transition-all
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
</body>

</html>