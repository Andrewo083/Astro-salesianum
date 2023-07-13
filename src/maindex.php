<!-- component -->
<!Doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../Public/tailwind.css" />
    <script defer="" src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>

    <!-- <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.4/dist/tailwind.min.css"> -->
</head>
<body class="bg-gray-50" style="">
 
    <div class="flex h-screen  dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen}">
      <!-- Desktop sidebar -->
      <aside class="z-20 hidden w-80 overflow-y-auto  md:block flex-shrink-0">
        <div class=" h-14 flex justify-center">
            <!-- <img src="./images/logo.png" class="w-32 h-24 mt-10"> -->
        </div>
 <div class=" mt-24 p-2 flex justify-center">
       <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
            <span class="inline-flex justify-center items-center ml-4">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
            </span>
            <span class="ml-2 text-sm tracking-wide truncate">Home</span>
          </a>

        </div>

<!--          <div class=" my-5 flex justify-center">
            <button class="inline-block py-2 w-4/5 px-4 text-gray-700 font-semibold text-sm no-underline border-b-1 border-gray-300 p-2 rounded-md font-medium  hover:bg-gray-100 focus:bg-gray-100 focus:shadow-outline">#Explore</button>
        </div> -->

         
         <div class=" my-2 p-2 flex justify-center">
            <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
            <span class="inline-flex justify-center items-center ml-4">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
            </span>
            <span class="ml-2 text-sm tracking-wide truncate">Friends</span>
           
          </a>
        </div>


         <div class=" my-2 p-2 flex justify-center">
            <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
            <span class="inline-flex justify-center items-center ml-4">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
            </span>
            <span class="ml-2 text-sm tracking-wide truncate">Profile</span>
          </a>
        </div>

        

      </aside>

      <div class="flex flex-col flex-1">
        <header class="z-10 py-4  shadow-xs ">
          <div class="container flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300">
            <!-- Mobile hamburger -->
            <button class="p-1 -ml-1 mr-5 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple">
              <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
              </svg>
            </button>
            <!-- Search input -->
<!--
  <input type="search" class="block md:hidden lg:hidden w-1/2 py-2 pl-4 px-4 pr-10 text-sm bg-gray-100 border border-transparent appearance-none rounded-tg placeholder-gray-400 focus:bg-gray-50 focus:outline-none focus:border-blue-500 focus:text-gray-900 focus:shadow-outline-blue" style="border-radius: 25px" placeholder="Search" autocomplete="off"> -->
  <div class="flex justify-between">
            <ul class="flex items-center flex-shrink-0 space-x-6">
              <!-- Profile menu -->
              <li class="relative ">
                <button class="align-middle rounded-full border-2 border-gray-300 shadow-lg  focus:shadow-outline-purple focus:outline-none">
                  <img class="object-cover w-10 h-10 rounded-full hover-image-1 flex-shrink-0" src="https://picsum.photos/200/200?i=203" alt="" aria-hidden="true">
                </button>
              </li>

                     <li class="elative">
                <button class="align-middle rounded-full border-2 border-gray-300 shadow-lg  focus:shadow-outline-purple focus:outline-none">
                  <img class="object-cover w-10 h-10 rounded-full hover-image-1 flex-shrink-0" src="https://picsum.photos/200/200?i=205" alt="" aria-hidden="true">
                </button>
              </li>

                     <li class="relative">
                <button class="align-middle rounded-full border-2 border-gray-300 shadow-lg  focus:shadow-outline-purple focus:outline-none">
                  <img class="object-cover w-10 h-10 rounded-full hover-image-1 flex-shrink-0" src="https://picsum.photos/200/200?i=207" alt="" aria-hidden="true">
                </button>
              </li>

                     <li class="relative">
                <button class="align-middle rounded-full border-2 border-gray-300 shadow-lg  focus:shadow-outline-purple focus:outline-none">
                  <img class="object-cover w-10 h-10 rounded-full hover-image-1 flex-shrink-0" src="https://picsum.photos/200/200?i=209" alt="" aria-hidden="true">
                </button>
              </li>

                  <li class="relative">
                <button class="align-middle rounded-full border-2 border-gray-300 shadow-lg  focus:shadow-outline-purple focus:outline-none">
                  <img class="object-cover w-10 h-10 rounded-full hover-image-1 flex-shrink-0" src="https://picsum.photos/200/200?i=2011" alt="" aria-hidden="true">
                </button>
              </li>

            </ul>
  </div>
        </header>
        
        <main class="h-full pb-16 overflow-y-auto">
          <!-- Remove everything INSIDE this div to a really blank page -->

<!-- Main Contents -->

<div class="block md:grid md:grid-flow-row-dense md:grid-cols-3 md:grid-rows-3 ">
 <div class="col-span-2">
    <div class="pt-10">

</div>


     

            <div class="bg-white shadow rounded-lg mt-10">
                <div class="flex flex-row px-2 py-3 mx-3">
                    <div class="w-auto h-auto rounded-full border-2 border-green-500">
                        <img class="w-12 h-12 object-cover rounded-full shadow cursor-pointer" alt="User avatar" src="../img/sara.png">
                    </div>
                    <div class="flex flex-col mb-2 ml-4 mt-1">
                        <div class="text-gray-600 text-sm font-semibold">Sara Lauren</div>
                        <div class="flex w-full mt-1">
                            <div class="text-blue-700 font-base text-xs mr-1 cursor-pointer">
                                Periodista
                            </div>
                         
                        </div>
                    </div>
                </div>
                <div class="border-b border-gray-100"></div>
                <div class="text-gray-400 font-medium text-sm mb-7 mt-6 mx-3 px-2">
                    <img class="rounded w-full" src="../img/fam.jpeg">
                </div>
                <div class="text-gray-600 font-semibold  mb-2 mx-3 px-2">Jovenes en victoria</div>
                <div class="text-gray-500 text-sm mb-6 mx-3 px-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500</div>
                <div class="flex justify-start mb-4 border-t border-gray-100">
                    <div class="flex w-full mt-1 pt-2 pl-5">
                   
                       
                    </div>
                    <div class="flex justify-end w-full mt-1 pt-2 pr-5">
                  
                        <span class="transition ease-out duration-300 hover:bg-gray-50 bg-gray-100 h-8 px-2 py-2 text-center rounded-full text-gray-100 cursor-pointer">
                            <svg class="h-4 w-4 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path>
                            </svg>
                        </span>
                    </div>
                </div>
                <div class="flex w-full border-t border-gray-100">
                  
                    <div class="mt-3 mx-5 w-full flex justify-end text-xs">
                        <div class="flex text-gray-700  rounded-md mb-2 mr-4 items-center">Likes: <div class="ml-1 text-gray-400 text-ms"> 120k</div></div>
                    </div>
                </div>
                <div class="relative flex items-center self-center w-full max-w-xl p-4 overflow-hidden text-gray-600 focus-within:text-gray-400">
                    <img class="w-10 h-10 object-cover rounded-full shadow mr-2 cursor-pointer" alt="User avatar" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=2000&amp;q=80">
                    <span class="absolute inset-y-0 right-0 flex items-center pr-6">
                        <button type="submit" class="p-1 focus:outline-none focus:shadow-none hover:text-blue-500">
                        <svg class="w-6 h-6 transition ease-out duration-300 hover:text-blue-500 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>

                        </button>
                    </span>
                     <input type="search" class="w-full py-2 pl-4 pr-10 text-sm bg-gray-100 border border-transparent appearance-none rounded-tg placeholder-gray-400 focus:bg-white focus:outline-none focus:border-blue-500 focus:text-gray-900 focus:shadow-outline-blue" style="border-radius: 25px" placeholder="Post a comment..." autocomplete="off">
                </div>
            </div>

            
            <div class="bg-white shadow rounded-lg mt-10">
              <div class="flex flex-row px-2 py-3 mx-3">
                  <div class="w-auto h-auto rounded-full border-2 border-green-500">
                      <img class="w-12 h-12 object-cover rounded-full shadow cursor-pointer" alt="User avatar" src="../img/sara.png">
                  </div>
                  <div class="flex flex-col mb-2 ml-4 mt-1">
                      <div class="text-gray-600 text-sm font-semibold">Sara Lauren</div>
                      <div class="flex w-full mt-1">
                          <div class="text-blue-700 font-base text-xs mr-1 cursor-pointer">
                              Periodista
                          </div>
                       
                      </div>
                  </div>
              </div>
              <div class="border-b border-gray-100"></div>
              <div class="text-gray-400 font-medium text-sm mb-7 mt-6 mx-3 px-2">
                  <img class="rounded w-full" src="../img/fam.jpeg">
              </div>
              <div class="text-gray-600 font-semibold  mb-2 mx-3 px-2">Jovenes en victoria</div>
              <div class="text-gray-500 text-sm mb-6 mx-3 px-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500</div>
              <div class="flex justify-start mb-4 border-t border-gray-100">
                  <div class="flex w-full mt-1 pt-2 pl-5">
                 
                     
                  </div>
                  <div class="flex justify-end w-full mt-1 pt-2 pr-5">
                
                      <span class="transition ease-out duration-300 hover:bg-gray-50 bg-gray-100 h-8 px-2 py-2 text-center rounded-full text-gray-100 cursor-pointer">
                          <svg class="h-4 w-4 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path>
                          </svg>
                      </span>
                  </div>
              </div>
              <div class="flex w-full border-t border-gray-100">
                
                  <div class="mt-3 mx-5 w-full flex justify-end text-xs">
                      <div class="flex text-gray-700  rounded-md mb-2 mr-4 items-center">Likes: <div class="ml-1 text-gray-400 text-ms"> 120k</div></div>
                  </div>
              </div>
              <div class="relative flex items-center self-center w-full max-w-xl p-4 overflow-hidden text-gray-600 focus-within:text-gray-400">
                  <img class="w-10 h-10 object-cover rounded-full shadow mr-2 cursor-pointer" alt="User avatar" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=2000&amp;q=80">
                  <span class="absolute inset-y-0 right-0 flex items-center pr-6">
                      <button type="submit" class="p-1 focus:outline-none focus:shadow-none hover:text-blue-500">
                      <svg class="w-6 h-6 transition ease-out duration-300 hover:text-blue-500 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                      </svg>

                      </button>
                  </span>
                   <input type="search" class="w-full py-2 pl-4 pr-10 text-sm bg-gray-100 border border-transparent appearance-none rounded-tg placeholder-gray-400 focus:bg-white focus:outline-none focus:border-blue-500 focus:text-gray-900 focus:shadow-outline-blue" style="border-radius: 25px" placeholder="Post a comment..." autocomplete="off">
              </div>
          </div>
           
 </div>
  <div class="hidden md:block lg:block py-8  sticky top-6">


<card class=" w-96 rounded-lg shadow-lg">

    <header class="font-bold text-2xl px-5 py-4">
      Mas noticias
    </header>

    <main class="px-5">

      <content class="grid grid-cols-6">

        <div class="">
          <img src="../img/neega.jpeg" class="h-8 w-8 rounded-full">
        </div>

        <div class="col-span-3 px-1 font-semibold flex flex-col">
          <div class="text-sm">DB vs Rical 4-0 a favor del DB</div>
          <div class="text-xm text-gray-700 font-light"> Ricaldone </div>
        </div>

        <div class="col-span-2 py-2 justify-self-end">
          <button class=" text-blue-500 text-xs font-semibold text-md rounded-full py-1 px-4">
            Mas información
          </button>
        </div>

      </content>


         <content class="grid grid-cols-6 mt-6">

        <div class="">
          <img src="../img/juca.jpeg" class="h-8 w-8 rounded-full">
        </div>

        <div class="col-span-3 px-1 font-semibold flex flex-col ">
          <div class="text-sm">Padre Paneso es negro</div>
          <div class="text-xm text-gray-700 font-light">Don Bosco</div>
        </div>

        <div class="col-span-2 py-2 justify-self-end">
          <button class=" text-blue-500 text-xs font-semibold text-md rounded-full py-1 px-4">
            Mas información
          </button>
        </div>

      </content>


    </main>

  </card>

  <div class="max-w-sm rounded-lg overflow-hidden shadow-sm m-4 mt-5">
    <header class="font-bold text-2xl px-5 py-4">
        Categorias
      </header>

    <!--first trending tweet-->
    <div class="flex">
        <div class="flex-1">
           <!--  <p class="px-4 ml-2 mt-3 w-48 text-xs text-gray-400">1 . Trending</p>-->
            <h2 class="px-4 ml-2 w-48 font-bold ">Deporte</h2>
 

        </div>
        <div class="flex-1 px-4 py-2 m-2">
            <a href="" class=" text-2xl rounded-full text-gray-400 hover:bg-gray-800 hover:text-blue-300 float-right">
                <svg class="m-2 h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M19 9l-7 7-7-7"></path>
                </svg>
            </a>
        </div>
    </div>


    <!--second trending tweet-->

    <div class="flex">
        <div class="flex-1">

            <h2 class="px-4 ml-2 w-48 font-bold ">Cultura</h2>


        </div>
        <div class="flex-1 px-4 py-2 m-2">
            <a href="" class=" text-2xl rounded-full text-gray-400 hover:bg-gray-800 hover:text-blue-300 float-right">
                <svg class="m-2 h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M19 9l-7 7-7-7"></path>
                </svg>
            </a>
        </div>
    </div>


    <!--third trending tweet-->

    <div class="flex">
        <div class="flex-1">

            <h2 class="px-4 ml-2 w-48 font-bold ">Eventos</h2>


        </div>
        <div class="flex-1 px-4 py-2 m-2">
            <a href="" class=" text-2xl rounded-full text-gray-400 hover:bg-gray-800 hover:text-blue-300 float-right">
                <svg class="m-2 h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M19 9l-7 7-7-7"></path>
                </svg>
            </a>
        </div>
    </div>
    <!--show more-->
    <div class="flex">
        <div class="flex-1 p-4">
            <h2 class="px-4 ml-2 w-48 font-semibold text-sm text-blue-400">Show more</h2>
        </div>
    </div>

</div>
  </div>
</div>
        </main>
      </div>
    </div>
    <footer class="bg-neutral-800 dark:bg-gray-900 flex pt-10">
        <div class="container p-6 mx-auto">
            <div class="lg:flex">
                <div class="w-full -mx-6 lg:w-2/5">
                  <div class="flex mt-6 -mx-2">
                    <div class="px-6">
                        <a href="#">
                            
                            <h1 class="w-auto h-7 text-white font-semibold">Person Specter</h1>
                        </a>
    
                        <p class="max-w-sm mt-2 text-gray-500 dark:text-gray-400">Join 31,000+ other and never miss out on new tips, tutorials, and more.</p>
    
                       
                            
                        </div>
                    </div>
                </div>
    
                <div class="mt-6 lg:mt-0 lg:flex-1">
                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                        <div>
                            <h3 class="text-white uppercase dark:text-white">About</h3>
                            <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Company</a>
                            <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">community</a>
                            <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Careers</a>
                        </div>
    
                        <div>
                            <h3 class="text-white uppercase dark:text-white">Blog</h3>
                            <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Tec</a>
                            <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Music</a>
                            <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Videos</a>
                        </div>
    
                        <div>
                            <h3 class="text-white uppercase dark:text-white">Products</h3>
                            <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Mega cloud</a>
                            <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Aperion UI</a>
                            <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Meraki UI</a>
                        </div>
    
                        <div>
                            <h3 class="text-white uppercase dark:text-white">Contact</h3>
                            <span class="block mt-2 text-sm text-white dark:text-gray-400 hover:underline">+1 526 654 8965</span>
                            <span class="block mt-2 text-sm text-white dark:text-gray-400 hover:underline">example@email.com</span>
                        </div>
                    </div>
                </div>
            </div>
            
    
            <hr class="h-px my-6 bg-gray-200 border-none dark:bg-gray-700">
    
            <div>
                <p class="text-center text-white dark:text-gray-400">© spectre 2023 - All rights reserved</p>
            </div>
        </div>
    </footer>
</body>
</html>