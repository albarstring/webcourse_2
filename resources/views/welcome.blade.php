<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/output.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.4.1/flowbite.min.css" rel="stylesheet" />
</head>

<body>
<section>
    <nav class="border-gray-200 dark:bg-gray-900 border-2 fixed-top">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">ITQu</span>
            </a>

            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="font-medium flex flex-col md:p-0 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li class="py-2">
                        <a href="#"
                           class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500"
                           aria-current="page">Home</a>
                    </li>
                    <li  class="py-2">
                        <a href="#"
                           class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About</a>
                    </li>
                    <li  class="py-2">
                        <a href="#"
                           class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Services</a>
                    </li>
                    <li  class="py-2">
                        <a href="#"
                           class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Pricing</a>
                    </li>
                    <li  class="py-2">
                        <a href="#"
                           class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
                    </li>
                    <a href="{{ url('/login') }}"><button  class="bg-none py-1 px-5 rounded-2xl text-white bg-[#195753] hover:bg-white hover:text-black border-2 transition ease-in-out duration-300">login</button></a>
                    <a href="{{ url('/register') }}"></a><button class="bg-none py-1 px-5 rounded-2xl text-white bg-[#195753] hover:bg-white hover:text-black border-2 transition ease-in-out duration-300">Sign Up</button>
                </ul>
            </div>
        </div>
    </nav>
</section>

<section class="flex items-center py-10">
    <div class="w-full px-8 md:flex">
        <div class="w-5/12 space-y-4">
            <h1 class="text-4xl font-bold">Temukan cara belajar tanpa batas</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua.</p>
            <button type="button"
                    class="text-white bg-[#195753] hover:bg-opacity-90 focus:ring-4 focus:ring-blue-100 font-medium rounded-lg text-sm px-20 py-2.5 me-2 mb-2 dark:bg-[#195753] dark:hover:bg-[#195753] focus:outline-none dark:focus:ring-[#195753]">Dapatkan
                Kelas</button>
        </div>
        <div class="w-6/12 justify-end flex">
            <img src="image/hero.png" alt="" class="w-60">
        </div>
    </div>
</section>

<div id="animation-carousel" class="relative w-full" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
        <!-- Item 1 -->
        <div class="hidden duration-200 ease-linear" data-carousel-item>
            <img src="image/hero.png"
                 class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-200 ease-linear" data-carousel-item>
            <img src="image/hero.png"
                 class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-200 ease-linear" data-carousel-item="active">
            <img src="image/hero.png"
                 class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-200 ease-linear" data-carousel-item>
            <img src="image/hero.png"
                 class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-200 ease-linear" data-carousel-item>
            <img src="image/hero.png"
                 class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div>
    <!-- Slider controls -->
    <button type="button"
            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
    </button>
    <button type="button"
            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
    </button>
</div>

<section>
    <div class="py-12">
        <div class="px-8">
            <div>
                <h2 class="text-center text-2xl font-bold mb-4">Pilih kelas Favoritmu</h2>
                <p class="text-center mb-6">Temukan kepuasan belajar dengan memilih kelas favorit</p>
                <div class="flex justify-center mb-10">
                    <button
                        class="text-white bg-[#2A444E] hover:bg-opacity-90 focus:ring-4 focus:ring-blue-100 font-light rounded-lg text-sm px-9 py-2 me-2 mb-2 dark:bg-[#2A444E] dark:hover:bg-[#2A444E] focus:outline-none dark:focus:ring-[#2A444E]">Kelas
                        Terpopuler</button>
                    <button
                        class="text-white bg-[#12E0C7] hover:bg-opacity-90 focus:ring-4 focus:ring-blue-100 font-light rounded-lg text-sm px-9 py-2 me-2 mb-2 dark:bg-[#12E0C7] dark:hover:bg-[#12E0C7] focus:outline-none dark:focus:ring-[#12E0C7] ">Kelas
                        Terbaru</button>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden py-5">
                    <div class="space-y-5">
                        <img class="w-full h-48 object-cover" src="image/hero.png" alt="Product 1">
                        <div class="px-3 space-y-2">
                            <h3 class="text-xl font-bold">Kelas Design dan Animation</h3>
                            <div class="md:flex">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                     viewBox="0 0 24 24">
                                    <path fill="#ffcd3c"
                                          d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                     viewBox="0 0 24 24">
                                    <path fill="#ffcd3c"
                                          d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                     viewBox="0 0 24 24">
                                    <path fill="#ffcd3c"
                                          d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                     viewBox="0 0 24 24">
                                    <path fill="#ffcd3c"
                                          d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                     viewBox="0 0 24 24">
                                    <path fill="#ffcd3c"
                                          d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z" />
                                </svg>
                            </div>
                            <p class="text-gray-600">Dari kelas ini, belajar cara membuat animasi dari dasar hingga
                                siap diposting disosial media</p>
                            <button
                                class="text-white bg-[#195753] hover:bg-opacity-90 focus:ring-4 focus:ring-blue-100 font-medium rounded-xl text-sm w-full py-2.5 me-2 mb-2 dark:bg-[#195753] dark:hover:bg-[#195753] focus:outline-none dark:focus:ring-[#195753] ">Beli
                                Kelas</button>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden py-5">
                    <div class="space-y-5">
                        <img class="w-full h-48 object-cover" src="image/hero.png" alt="Product 1">
                        <div class="px-3 space-y-2">
                            <h3 class="text-xl font-bold">Kelas Design dan Animation</h3>
                            <div class="md:flex">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                     viewBox="0 0 24 24">
                                    <path fill="#ffcd3c"
                                          d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                     viewBox="0 0 24 24">
                                    <path fill="#ffcd3c"
                                          d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                     viewBox="0 0 24 24">
                                    <path fill="#ffcd3c"
                                          d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                     viewBox="0 0 24 24">
                                    <path fill="#ffcd3c"
                                          d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                     viewBox="0 0 24 24">
                                    <path fill="#ffcd3c"
                                          d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z" />
                                </svg>
                            </div>
                            <p class="text-gray-600">Dari kelas ini, belajar cara membuat animasi dari dasar hingga
                                siap diposting disosial media</p>
                            <button
                                class="text-white bg-[#195753] hover:bg-opacity-90 focus:ring-4 focus:ring-blue-100 font-medium rounded-xl text-sm w-full py-2.5 me-2 mb-2 dark:bg-[#195753] dark:hover:bg-[#195753] focus:outline-none dark:focus:ring-[#195753] ">Beli
                                Kelas</button>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden py-5">
                    <div class="space-y-5">
                        <img class="w-full h-48 object-cover" src="image/hero.png" alt="Product 1">
                        <div class="px-3 space-y-2">
                            <h3 class="text-xl font-bold">Kelas Design dan Animation</h3>
                            <div class="md:flex">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                     viewBox="0 0 24 24">
                                    <path fill="#ffcd3c"
                                          d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                     viewBox="0 0 24 24">
                                    <path fill="#ffcd3c"
                                          d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                     viewBox="0 0 24 24">
                                    <path fill="#ffcd3c"
                                          d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                     viewBox="0 0 24 24">
                                    <path fill="#ffcd3c"
                                          d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                     viewBox="0 0 24 24">
                                    <path fill="#ffcd3c"
                                          d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z" />
                                </svg>
                            </div>
                            <p class="text-gray-600">Dari kelas ini, belajar cara membuat animasi dari dasar hingga
                                siap diposting disosial media</p>
                            <button
                                class="text-white bg-[#195753] hover:bg-opacity-90 focus:ring-4 focus:ring-blue-100 font-medium rounded-xl text-sm w-full py-2.5 me-2 mb-2 dark:bg-[#195753] dark:hover:bg-[#195753] focus:outline-none dark:focus:ring-[#195753] ">Beli
                                Kelas</button>
                        </div>
                    </div>
                </div>
                <!-- card 4 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden py-5">
                    <div class="space-y-5">
                        <img class="w-full h-48 object-cover" src="image/hero.png" alt="Product 1">
                        <div class="px-3 space-y-2">
                            <h3 class="text-xl font-bold">Kelas Design dan Animation</h3>
                            <div class="md:flex">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                     viewBox="0 0 24 24">
                                    <path fill="#ffcd3c"
                                          d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                     viewBox="0 0 24 24">
                                    <path fill="#ffcd3c"
                                          d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                     viewBox="0 0 24 24">
                                    <path fill="#ffcd3c"
                                          d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                     viewBox="0 0 24 24">
                                    <path fill="#ffcd3c"
                                          d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                     viewBox="0 0 24 24">
                                    <path fill="#ffcd3c"
                                          d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z" />
                                </svg>
                            </div>
                            <p class="text-gray-600">Dari kelas ini, belajar cara membuat animasi dari dasar hingga
                                siap diposting disosial media</p>
                            <button
                                class="text-white bg-[#195753] hover:bg-opacity-90 focus:ring-4 focus:ring-blue-100 font-medium rounded-xl text-sm w-full py-2.5 me-2 mb-2 dark:bg-[#195753] dark:hover:bg-[#195753] focus:outline-none dark:focus:ring-[#195753] ">Beli
                                Kelas</button>
                        </div>
                    </div>
                </div>
                <!-- card 5 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden py-5">
                    <div class="space-y-5">
                        <img class="w-full h-48 object-cover" src="image/hero.png" alt="Product 1">
                        <div class="px-3 space-y-2">
                            <h3 class="text-xl font-bold">Kelas Design dan Animation</h3>
                            <div class="md:flex">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                     viewBox="0 0 24 24">
                                    <path fill="#ffcd3c"
                                          d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                     viewBox="0 0 24 24">
                                    <path fill="#ffcd3c"
                                          d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                     viewBox="0 0 24 24">
                                    <path fill="#ffcd3c"
                                          d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                     viewBox="0 0 24 24">
                                    <path fill="#ffcd3c"
                                          d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                     viewBox="0 0 24 24">
                                    <path fill="#ffcd3c"
                                          d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z" />
                                </svg>
                            </div>
                            <p class="text-gray-600">Dari kelas ini, belajar cara membuat animasi dari dasar hingga
                                siap diposting disosial media</p>
                            <button
                                class="text-white bg-[#195753] hover:bg-opacity-90 focus:ring-4 focus:ring-blue-100 font-medium rounded-xl text-sm w-full py-2.5 me-2 mb-2 dark:bg-[#195753] dark:hover:bg-[#195753] focus:outline-none dark:focus:ring-[#195753] ">Beli
                                Kelas</button>
                        </div>
                    </div>
                </div>
                <!-- card 6 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden py-5">
                    <div class="space-y-5">
                        <img class="w-full h-48 object-cover" src="image/hero.png" alt="Product 1">
                        <div class="px-3 space-y-2">
                            <h3 class="text-xl font-bold">Kelas Design dan Animation</h3>
                            <div class="md:flex">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                     viewBox="0 0 24 24">
                                    <path fill="#ffcd3c"
                                          d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                     viewBox="0 0 24 24">
                                    <path fill="#ffcd3c"
                                          d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                     viewBox="0 0 24 24">
                                    <path fill="#ffcd3c"
                                          d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                     viewBox="0 0 24 24">
                                    <path fill="#ffcd3c"
                                          d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                     viewBox="0 0 24 24">
                                    <path fill="#ffcd3c"
                                          d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z" />
                                </svg>
                            </div>
                            <p class="text-gray-600">Dari kelas ini, belajar cara membuat animasi dari dasar hingga
                                siap diposting disosial media</p>
                            <button
                                class="text-white bg-[#195753] hover:bg-opacity-90 focus:ring-4 focus:ring-blue-100 font-medium rounded-xl text-sm w-full py-2.5 me-2 mb-2 dark:bg-[#195753] dark:hover:bg-[#195753] focus:outline-none dark:focus:ring-[#195753] ">Beli
                                Kelas</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center py-10">
                <button
                    class="text-white bg-[#002333] hover:bg-opacity-90 focus:ring-4 focus:ring-blue-100 font-normal rounded-full text-sm px-5 py-2.5 me-2 mb-2 dark:bg-[#002333] dark:hover:bg-[#002333] focus:outline-none dark:focus:ring-[#002333]">Lihat
                    Semua Kelas</button>
            </div>
        </div>
    </div>
</section>

<section class="space-y-6">
    <h1 class="text-3xl text-center font-bold">What our student say</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 px-8">
        <div>
            <a href="#"
               class=" space-y-2 block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <div class="flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                        <path fill="#ffcd3c"
                              d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                        <path fill="#ffcd3c"
                              d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                        <path fill="#ffcd3c"
                              d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                        <path fill="#ffcd3c"
                              d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                        <path fill="#ffcd3c"
                              d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z" />
                    </svg>
                </div>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                    technology acquisitions 2021</h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology
                    acquisitions of 2021 so far, in reverse chronological order.</p>
            </a>
        </div>
        <div>
            <a href="#"
               class=" space-y-2 block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <div class="flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                        <path fill="#ffcd3c"
                              d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                        <path fill="#ffcd3c"
                              d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                        <path fill="#ffcd3c"
                              d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                        <path fill="#ffcd3c"
                              d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                        <path fill="#ffcd3c"
                              d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z" />
                    </svg>
                </div>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                    technology acquisitions 2021</h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology
                    acquisitions of 2021 so far, in reverse chronological order.</p>
            </a>
        </div>
        <div>
            <a href="#"
               class=" space-y-2 block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <div class="flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                        <path fill="#ffcd3c"
                              d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                        <path fill="#ffcd3c"
                              d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                        <path fill="#ffcd3c"
                              d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                        <path fill="#ffcd3c"
                              d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                        <path fill="#ffcd3c"
                              d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z" />
                    </svg>
                </div>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                    technology acquisitions 2021</h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology
                    acquisitions of 2021 so far, in reverse chronological order.</p>
            </a>
        </div>
        <div>
            <a href="#"
               class=" space-y-2 block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <div class="flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                        <path fill="#ffcd3c"
                              d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                        <path fill="#ffcd3c"
                              d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                        <path fill="#ffcd3c"
                              d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                        <path fill="#ffcd3c"
                              d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                        <path fill="#ffcd3c"
                              d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z" />
                    </svg>
                </div>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                    technology acquisitions 2021</h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology
                    acquisitions of 2021 so far, in reverse chronological order.</p>
            </a>
        </div>
    </div>
</section>

<section class="py-32">
    <div class="md:flex justify-center items-center px-8 ">
        <div
            class="block w-auto md:w-[65%] p-6 bg-white border border-gray-200 rounded-lg shadow  dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h1 class="font-bold text-center text-3xl py-5">FAQ</h1>
            <div class="flex justify-between">
                <a href="" class="py-5">
                    <h1 class="font-semibold text-sm">Apa itu ITQu?</h1>
                </a>
                <div class="py-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024">
                        <path fill="black"
                              d="M104.704 338.752a64 64 0 0 1 90.496 0l316.8 316.8l316.8-316.8a64 64 0 0 1 90.496 90.496L557.248 791.296a64 64 0 0 1-90.496 0L104.704 429.248a64 64 0 0 1 0-90.496" />
                    </svg>
                </div>
            </div>
            <div>
                <hr class="border-[1.2px] w-100">
            </div>
            <div class="flex justify-between">
                <a href="" class="py-5">
                    <h1 class="font-semibold text-sm">Bagaimana metode pembelajaran yang diterapkan di ITQu?</h1>
                </a>
                <div class="py-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024">
                        <path fill="black"
                              d="M104.704 338.752a64 64 0 0 1 90.496 0l316.8 316.8l316.8-316.8a64 64 0 0 1 90.496 90.496L557.248 791.296a64 64 0 0 1-90.496 0L104.704 429.248a64 64 0 0 1 0-90.496" />
                    </svg>
                </div>
            </div>
            <div>
                <hr class="border-[1.2px] w-100">
            </div>
            <div class="flex justify-between">
                <a href="" class="py-5">
                    <h1 class="font-semibold text-sm">Apa saja jenis program pelatihan yang disediakan ITQu?</h1>
                </a>
                <div class="py-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024">
                        <path fill="black"
                              d="M104.704 338.752a64 64 0 0 1 90.496 0l316.8 316.8l316.8-316.8a64 64 0 0 1 90.496 90.496L557.248 791.296a64 64 0 0 1-90.496 0L104.704 429.248a64 64 0 0 1 0-90.496" />
                    </svg>
                </div>
            </div>
            <div>
                <hr class="border-[1.2px] w-100">
            </div>
            <div class="flex justify-between">
                <a href="" class="py-5">
                    <h1 class="font-semibold text-sm">Bagaimana cara membuat akun member di ITQu?</h1>
                </a>
                <div class="py-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024">
                        <path fill="black"
                              d="M104.704 338.752a64 64 0 0 1 90.496 0l316.8 316.8l316.8-316.8a64 64 0 0 1 90.496 90.496L557.248 791.296a64 64 0 0 1-90.496 0L104.704 429.248a64 64 0 0 1 0-90.496" />
                    </svg>
                </div>
            </div>
            <div>
                <hr class="border-[1.2px] w-100">
            </div>
            <div class="flex justify-between">
                <a href="" class="py-5">
                    <h1 class="font-semibold text-sm">Apakah ITQu memberi jaminan akan mendapat pekerjaan?</h1>
                </a>
                <div class="py-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024">
                        <path fill="black"
                              d="M104.704 338.752a64 64 0 0 1 90.496 0l316.8 316.8l316.8-316.8a64 64 0 0 1 90.496 90.496L557.248 791.296a64 64 0 0 1-90.496 0L104.704 429.248a64 64 0 0 1 0-90.496" />
                    </svg>
                </div>
            </div>
            <div>
                <hr class="border-[1.2px] w-100">
            </div>
        </div>

    </div>
</section>



<footer class="bg-white dark:bg-gray-900">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0">
                <a href="https://flowbite.com/" class="flex items-center">
                    <span class="self-center text-3xl font-bold whitespace-nowrap dark:text-white">ITQU</span>
                </a>
            </div>
            <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Resources</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="https://flowbite.com/" class="hover:underline">Flowbite</a>
                        </li>
                        <li>
                            <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow us</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Github</a>
                        </li>
                        <li>
                            <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <div class="sm:flex sm:items-center sm:justify-between">
          <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">©️ 2024 <a href="https://flowbite.com/" class="hover:underline">ITQu</a>. All Rights Reserved.
          </span>
            <div class="flex mt-4 sm:justify-center sm:mt-0">
                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                        <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
                    </svg>
                    <span class="sr-only">Facebook page</span>
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 21 16">
                        <path d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z"/>
                    </svg>
                    <span class="sr-only">Discord community</span>
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17">
                        <path fill-rule="evenodd" d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z" clip-rule="evenodd"/>
                    </svg>
                    <span class="sr-only">Twitter page</span>
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z" clip-rule="evenodd"/>
                    </svg>
                    <span class="sr-only">GitHub account</span>
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z" clip-rule="evenodd"/>
                    </svg>
                    <span class="sr-only">Dribbble account</span>
                </a>
            </div>
        </div>
    </div>
</footer>



<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.4.1/flowbite.min.js"></script>
</body>

</html>
