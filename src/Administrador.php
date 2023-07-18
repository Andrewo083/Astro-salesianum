<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/tailwind.css">
    <title>Adminsitrador</title>
</head>

<body>

    <!--<aside
        class="flex flex-col w-64 h-screen px-5 py-8 overflow-y-auto bg-white border-r rtl:border-r-0 rtl:border-l dark:bg-gray-900 dark:border-gray-700">-->
        <div class="flex flex-col justify-between flex-1 mt-6">
            <nav class="-mx-3 space-y-6">
                <!-- component -->
                <script defer src="https://unpkg.com/alpinejs@3.10.2/dist/cdn.min.js"></script>
                <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" />

                <!-- page -->
                <main class="min-h-screen w-full bg-gray-100 text-gray-700" x-data="layout">
                    <!-- header page -->
                    <header class="flex w-full items-center justify-between border-b-2 border-gray-200 bg-white p-2">
                        <!-- logo -->
                        <div class="flex items-center space-x-2">
                            <button type="button" class="text-3xl" @click="asideOpen = !asideOpen"><i
                                    class="bx bx-menu"></i></button>
                            <div>Logo</div>
                        </div>
                
                        <!-- button profile -->
                        <div>


                            <!-- dropdown profile -->
                            <div class="absolute right-2 mt-1 w-48 divide-y divide-gray-200 rounded-md border border-gray-200 bg-white shadow-md"
                                x-show="profileOpen" x-transition>
                                <div class="flex items-center space-x-2 p-2">
                                    <img src="https://plchldr.co/i/40x40?bg=111111" alt="plchldr.co"
                                        class="h-9 w-9 rounded-full" />
                                    <div class="font-medium">Hafiz Haziq</div>
                                </div>


                                <div class="p-2">
                                    <button class="flex items-center space-x-2 transition hover:text-blue-600">
                                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                            </path>
                                        </svg>
                                        <div>Log Out</div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </header>

                    <div class="flex">
                        <!-- aside -->
                        <aside class="flex w-72 flex-col space-y-2 border-r-2 border-gray-200 bg-white p-2"
                            style="height: 90.5vh" x-show="asideOpen">
                            <a href="#"
                                class="flex items-center space-x-1 rounded-md px-2 py-3 hover:bg-gray-100 hover:text-blue-600">
                                <span class="text-2xl"><i class="bx bx-home"></i></span>
                                <span>Inicio</span>
                            </a>

                            <a href="#"
                                class="flex items-center space-x-1 rounded-md px-2 py-3 hover:bg-gray-100 hover:text-blue-600">
                                <span class="text-2xl"><i class="bx bx-cart"></i></span>
                                <span>Reporteros</span>
                            </a>

                            <a href="#"
                                class="flex items-center space-x-1 rounded-md px-2 py-3 hover:bg-gray-100 hover:text-blue-600">
                                <span class="text-2xl"><i class="bx bx-shopping-bag"></i></span>
                                <span>Noticias</span>
                            </a>
                        </aside>

                        <!-- main content page -->
                        <div class="w-full p-4">

                            <form action="../src/PHP/CRUD_journalist.php" method="post">
                                <h1 class="text-center">Formulario para ingreso de Reporteros</h1>

                                <!--DIV PARA INOT-->
                                <div class="my-5">
                                    <label for="email" class="mb-3 block text-base font-medium text-[#07074D]"> Correo Electronico [ID]*
                                    </label>
                                    <input required type="email" name="email" id="name" placeholder="Correo Electronico"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </div>

                                <div class="my-5">
                                    <label for="password" class="mb-3 block text-base font-medium text-[#07074D]"> Contraseña
                                    </label>
                                    <input required type="password" name="password" id="name" placeholder="Contraseña"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </div>


                                <div class="my-5">
                                    <label for="name" class="mb-3 block text-base font-medium text-[#07074D]"> Nombres
                                    </label>
                                    <input required type="text" name="name" id="name" placeholder="Nombre Completo"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </div>

                                <div class="my-5">
                                    <label for="lastnames" class="mb-3 block text-base font-medium text-[#07074D]"> Apellidos
                                    </label>
                                    <input required type="text" name="lastname" id="name" placeholder="Apellidos"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </div>

                                

                                <div class="my-5">
                                    <label for="phonenumber" class="mb-3 block text-base font-medium text-[#07074D]"> Numero Telefonico
                                    </label>
                                    <input required type="number" name="phonenumber" id="email" placeholder="Correo electronico"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" max="8" />
                                </div>

                                

                                




                              <input type="submit" name="Enviar" value="ENVIAR">

                            </form>


                        </div>
                    </div>
        </div>
        </main>

        <script>
            document.addEventListener("alpine:init", () => {
                Alpine.data("layout", () => ({
                    profileOpen: false,
                    asideOpen: true,
                }));
            });
        </script>
        </nav>
        </div>
    </aside>