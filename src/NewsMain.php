<?php

session_start();

if (isset($_SESSION["Email"])) {
  include('./PHP/conexion.php');

  $Name=$_SESSION['Name'];
  $conexion = new mysqli($host, $user, $password, $bd);
  if (!$conexion) {
    die("Error en la conexion" . mysqli_connect_error());
  }
  $Email = $_SESSION["Email"];
} else {

  header("Location: ./Login.php");
  exit();
}


$id_news = $_GET['new'];
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $row['headline'] ?></title>
    <link rel="stylesheet" href="../Public/tailwind.css">

  </head>

  <body>
    <div>
      <section class="relative mx-auto">
        <!-- navbar -->
        <nav class="flex justify-between bg-gray-900 text-white">
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
            <div class="hidden xl:flex items-center space-x-5 items-center">
              <a class="hover:text-gray-200" href="#">

                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                </svg>
              </a>
              <a class="flex items-center hover:text-gray-200" href="#">

              </a>
            </div>
        </nav>
        <!-- END NAV-->

        <!-- component -->


        <div class="container mx-auto px-6 py-16 text-center">
          <div class="mx-44">
            <h1 class="text-3xl text-center font-bold text-gray-800 dark:text-white lg:text-4xl">Building Your Next App with our Awesome components</h1>
            <p class="mt-6 text-gray-500 dark:text-gray-300">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero similique obcaecati illum mollitia.quam totam sapiente commodi dicta, odio quaerat sint eos nobis numquam, sit pariatur labore tempore nihil! Voluptatibus modi veniam mollitia in dolorem praesentium harum earum fugiat quibusdam. Et eius, doloremque optio, eveniet quo repellendus veritatis in sunt sapiente unde commodi laudantium error. Ex commodi maiores ipsa similique necessitatibus</p>
            <button class="mt-6 rounded-lg bg-blue-600 px-6 py-2.5 text-center text-sm font-medium capitalize leading-5 text-white hover:bg-blue-500 focus:outline-none lg:mx-0 lg:w-auto">Start 14-Day free trial</button>
          </div>

          <div class="mt-10 flex justify-center">
            <img class="h-96 w-full rounded-xl object-cover lg:w-4/5" src="../img/meri.jpeg" />
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





        <div class="flex min-h-screen items-center justify-center p-10 bg-white">
          <div class="container grid max-w-screen-xl gap-8 lg:grid-cols-2 lg:grid-rows-2">
            <div class="row-span-2 flex flex-col rounded-md border border-slate-200">
              <div class="h-1/2 flex-1"><img src="../img/meri.jpeg" class="w-full object-cover object-right-top" alt="omnichannel" /></div>
              <div class="p-10">
                <h3 class="text-xl font-medium text-gray-700">Omnichannel support center</h3>
                <p class="mt-2 text-slate-500">Chatwoot connects with popular customer communication channels like Email, Website live-chat, Facebook, Twitter, WhatsApp, Instagram, Line, etc., and helps you deliver a consistent customer experience across channels.</p>
                <a href="" class="mt-2 inline-flex text-sky-500">Read More →</a>
              </div>
            </div>
            <div class="flex rounded-md border border-slate-200">
              <div class="flex-1 p-10">
                <h3 class="text-xl font-medium text-gray-700">A live-chat that fits your brand</h3>
                <p class="mt-2 text-slate-500">Connect with your website visitors, communicate with them in realtime and give them quality support with a live-chat widget that fits your brand.</p>
                <a href="" class="mt-2 inline-flex text-sky-500">Read More →</a>
              </div>

              <div class="relative hidden h-full w-1/3 overflow-hidden lg:block">
                <div class="absolute inset-0">
                  <img src="../img/chele.jpeg" class="h-full w-full object-cover object-left-top" alt="" />
                </div>
              </div>
            </div>
            <div class="flex rounded-md border border-slate-200">
              <div class="flex-1 p-10">
                <h3 class="text-xl font-medium text-gray-700">Respond faster, with automated chatbots</h3>
                <p class="mt-2 text-slate-500">Integrate with chatbots using Rasa or Dialogflow to automate conversations. Qualify using chatbots and seamlessly handoff to human agents.</p>
                <a href="" class="mt-2 inline-flex text-sky-500">Read More →</a>
              </div>

              <div class="relative hidden h-full w-1/3 overflow-hidden lg:block">
                <div class="absolute inset-0">
                  <img src="../img/serg.jpeg" class="h-full w-full object-cover object-left-top" alt="" />
                </div>
              </div>

            </div>
          </div>

        </div>
        <!-- component -->
        <div class="container mx-auto px-6 py-16 text-center">
          <div class="mx-44">
            <h1 class="text-3xl text-center font-bold text-gray-800 dark:text-white lg:text-4xl">Noticias relacionadas</h1>
          </div>
          <section class="text-gray-600 body-font">
            <div class="container px-5  mx-auto">
              <div class="flex flex-wrap -m-4">
                <div class="p-4 md:w-1/3">
                  <div class="h-full rounded-xl shadow-cla-blue bg-gradient-to-r from-indigo-50 to-blue-50 overflow-hidden">
                    <img class="lg:h-48 md:h-36 w-full object-cover object-center scale-110 transition-all duration-400 hover:scale-100" src="https://images.unsplash.com/photo-1618172193622-ae2d025f4032?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1064&q=80" alt="blog">
                    <div class="p-6">
                      <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY-1</h2>
                      <h1 class="title-font text-lg font-medium text-gray-600 mb-3">The Catalyzer</h1>
                      <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                      <div class="flex items-center flex-wrap ">
                        <button class="bg-gradient-to-r from-cyan-400 to-blue-400 hover:scale-105 drop-shadow-md  shadow-cla-blue px-4 py-1 rounded-lg">Learn more</button>

                      </div>
                    </div>
                  </div>
                </div>
                <div class="p-4 md:w-1/3">
                  <div class="h-full rounded-xl shadow-cla-violate bg-gradient-to-r from-pink-50 to-red-50 overflow-hidden">
                    <img class="lg:h-48 md:h-36 w-full object-cover object-center scale-110 transition-all duration-400 hover:scale-100" src="https://images.unsplash.com/photo-1624628639856-100bf817fd35?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8M2QlMjBpbWFnZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60" alt="blog">
                    <div class="p-6">
                      <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY-1</h2>
                      <h1 class="title-font text-lg font-medium text-gray-600 mb-3">The Catalyzer</h1>
                      <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                      <div class="flex items-center flex-wrap ">
                        <button class="bg-gradient-to-r from-orange-300 to-amber-400 hover:scale-105 drop-shadow-md shadow-cla-violate px-4 py-1 rounded-lg">Learn more</button>

                      </div>
                    </div>
                  </div>
                </div>
                <div class="p-4 md:w-1/3">
                  <div class="h-full rounded-xl shadow-cla-pink bg-gradient-to-r from-fuchsia-50 to-pink-50 overflow-hidden">
                    <img class="lg:h-48 md:h-36 w-full object-cover object-center scale-110 transition-all duration-400 hover:scale-100" src="https://images.unsplash.com/photo-1631700611307-37dbcb89ef7e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDIwfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=600&q=60" alt="blog">
                    <div class="p-6">
                      <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY-1</h2>
                      <h1 class="title-font text-lg font-medium text-gray-600 mb-3">The Catalyzer</h1>
                      <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                      <div class="flex items-center flex-wrap ">
                        <button class="bg-gradient-to-r from-fuchsia-300 to-pink-400 hover:scale-105  shadow-cla-blue px-4 py-1 rounded-lg">Learn more</button>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <div class="container  px-6 py-16 items-center text-center">
            <div class="mx-44">
              <h1 class="text-3xl text-center font-bold text-gray-800 dark:text-white lg:text-4xl">Comentanos!</h1>
            </div>
            <div class="mx-44">
              <form action="./PHP/InsertComment.php?new=<?php echo $_GET['new'] ?>" method="post">
        

                <label for="chat" class="sr-only">Your message</label>
                <div class="flex items-center py-2 px-3 rounded-lg">
                  <div class="flex">
                    <img class="h-9 w-9 rounded-full object-cover" src="../img/user.jpg" alt="">
                  </div>
                  <textarea id="chat" name="Comment" rows="1" class="block mx-4 p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your message..."></textarea>
                  <button type="submit" class="inline-flex justify-center p-2 text-blue-600 rounded-full cursor-pointer hover:bg-blue-100 dark:text-blue-500 dark:hover:bg-gray-600">
                    <svg class="w-6 h-6 rotate-90" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"></path>
                    </svg>
                  </button>
                </div>
              </form> 
            </div>
            <div class="h-screen flex flex-col">

              <div>
                <div class="shadow-lg pt-4 ml-2 mr-2 rounded-lg">
                  <a href="#" class="block bg-white py-3 border-t pb-4">
                    <div class="px-4 py-2 flex  justify-between">
                      <span class="text-sm font-semibold text-gray-900">

                     HOLA


                      </span>
                      <div class="flex">
                        <span class="px-4 text-sm font-semibold text-gray-600"> yesterday</span>
                        <img class="h-6 w-6 rounded-full object-cover" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=144&q=80" alt="">
                      </div>
                    </div>
                    <p class="px-4 py-2 text-sm font-semibold text-gray-700">Lorem mmmmm ipsum dolor sit amet consectetur adipisicing elit. Iusto adipisci laudantium <br> iste delectus explicabo id molestiae cupiditate corrupti distinctio alias. <br> Temporibus quae tenetur quod cupiditate, nostrum tempore inventore maxime ut! </p>
                  </a>
                </div>


              </div>
            </div>
            </main>
          </div>


        </div>
        <footer class=" bg-gray-800">
          <div class="container px-3 py-5 mx-auto">
            <div class="flex flex-col items-center text-center">
              <a href="#">
                <img class="w-auto h-14" src="../img/logis.png" alt="">
              </a>

              <p class="max-w-md mx-auto mt-4 text-white">Astrum Salesianum</p>

              <div class="flex flex-col mt-4 sm:flex-row sm:items-center sm:justify-center">
                <button class="flex items-center justify-center order-1 w-full px-2 py-2 mt-3 text-sm tracking-wide  text-white hover:text-black capitalize transition-colors duration-300 transform border rounded-md sm:mx-2 dark:border-gray-400 sm:mt-0 sm:w-auto hover:bg-gray-50 focus:outline-none focus:ring  focus:ring-gray-300 focus:ring-opacity-40">
                  <svg class="w-5 h-5 mx-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C21.9939 17.5203 17.5203 21.9939 12 22ZM4 12.172C4.04732 16.5732 7.64111 20.1095 12.0425 20.086C16.444 20.0622 19.9995 16.4875 19.9995 12.086C19.9995 7.68451 16.444 4.10977 12.0425 4.086C7.64111 4.06246 4.04732 7.59876 4 12V12.172ZM10 16.5V7.5L16 12L10 16.5Z" fill="currentColor"></path>
                  </svg>

                  <span class="mx-1">View Demo</span>
                </button>

                <button class="w-full px-5 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-md sm:mx-2 sm:order-2 sm:w-auto hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">Get started</button>
              </div>
            </div>

            <hr class="my-10 border-gray-200" />

            <div class="flex flex-col items-center sm:flex-row sm:justify-between">
              <p class="text-sm text-gray-500">© Copyright 2023. All Rights Reserved.</p>

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