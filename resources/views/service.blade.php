<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelayanan</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

</head>

<body class="mx-auto max-w-screen bg-center bg-[url('/img/gedung.png')] bg-slate-900 h-screen">
     {{-- Section Navbar Start --}}
<nav class="bg-primary dark:bg-gray-900 py-3 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
    <div class="bg-[#ECAE30] w-full py-5 -mt-6 ">
    </div>
    <div class=" flex flex-wrap items-center justify-between mx-auto p-4">
        <div class="mx-8">
            <img src="{{asset('img/lp3ipanjang.png')}}" alt="logo lp3i" width="200">
        </div>


    <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse ">
        <div class="flex">
            <a href="#" target="_blank"
                    class="w-7 h-7 rounded-full mr-9 justify-center items-center text-white hover:text-slate-300 hidden md:block">
                    <i class="fa-solid fa-right-from-bracket fa-2x"></i>
            </a>
            <a href="#" target="_blank"
                        class="w-7 h-7 rounded-full mr-9 justify-center items-center text-white hover:text-slate-300 hidden md:block">
                        <i class="fa-solid fa-circle-user fa-2x"></i>
            </a>
        </div>
        
    <button onclick="hamburgerMenu()"  type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-slate-200 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
    </div>
    <div class="items-center justify-between hidden w-full ml-8 md:flex md:w-auto md:order-1" id="navbarHamburger">
      <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium ml-44 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:ml-0">
        <li>
          <a href="{{route('welcome.index')}}" class="block py-2 px-3 mx-6 md:ml-0 md:mr-6 text-white rounded md:bg-transparent md:hover:text-[#ECAE30] md:text-white md:p-0 md:dark:text-blue-500">Beranda</a>
        </li>
        <li>
          <a href="{{route('about.index')}}" class="block py-2 px-3 mx-6 text-white rounded md:hover:bg-transparent md:hover:text-[#ECAE30] md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Tentang Kami</a>
        </li>
        <li>
            <button onclick="dropdownDigital()" class="flex relative items-center justify-between w-full py-2 px-3 mx-6 text-white rounded md:hover:bg-transparent md:border-0 md:hover:text-[#ECAE30] md:p-0 md:w-auto">Digital <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
              </svg></button>
                        <!-- Dropdown menu -->
                        <div id="digitalNavbar" class="z-10 hidden absolute mt-5 font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                              <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Repository</a>
                              </li>
                              <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Jurnal (Ekobima)</a>
                              </li>
                              <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Opac</a>
                              </li>
                            </ul>
                        </div>
        </li>
        <li>
          <a href="{{ route('service.index') }}" class="block py-2 px-3 mx-6 text-white rounded md:hover:bg-transparent md:hover:text-[#ECAE30] md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Pelayanan</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 mx-6 text-white rounded md:hover:bg-transparent md:hover:text-[#ECAE30] md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Pedoman</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 mx-6 text-white rounded md:hover:bg-transparent md:hover:text-[#ECAE30] md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Arsip</a>
        </li>  
        <li>
            <a href="#" class="block py-2 px-3 mx-6 text-white rounded md:hidden md:hover:bg-transparent md:hover:text-[#ECAE30] md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Profile</a>
          </li>
        <li>
        <a href="#" class="block py-2 px-3 mx-6 text-white rounded md:hidden md:hover:bg-transparent md:hover:text-[#ECAE30] md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Logout</a>
        </li>
      </ul>
    </div>
    </div>
  </nav>
    {{-- Section Navbar End --}}


    {{-- Section Top Start --}}

    <div class="container mx-auto mt-36 mb-20">
            <div class="px-4 pt-16 text-center items-center md:pt-10">
                <p class="font-bold text-white text-xl md:text-2xl mb-12">PEMINJAMAN</p>
                <p class="mb-1 text-white ">Perpusatakaan Politeknik LP3I Kampus Tasikmalaya memiliki:</p>
                <div class="w-full px-4 pt-5 mb-16">
                    <div class="flex flex-wrap text-center text-white font-light items-center justify-center">
                        <p class="mr-8">Buku Fiksi : 100000</p>
                        <p class="mr-8">Buku Non-Fiksi : 100000</p>
                        <p class="mr-8">Buku Keilmuan : 100000</p>
                        <p>Buku Religi : 100000</p>
                    </div>
                </div>
            </div>
            <div class="text-center mb-8 text-white ">
                <p class="font-bold text-xl mb-2">Alur Peminjaman</p>
                <p class="text-md font-light">Berikut ini adalah alur peminjaman gan!</p>
            </div>

            <div class="container mx-auto px-10 grid grid-cols-1 md:grid-cols-2 gap-5">
                <div class="flex justify-end items-end">
                    <div class="w-1/3 p-2 rounded-xl">
                        <img src="{{ asset('img/1.png') }}" alt="Image Caption" width="100%" class="ronded-xl shadow-xl">
                    </div>
                    <div class="w-2/3 p-2">
                        <div class="py-10 w-80 rounded-md shadow-lg bg-primary flex flex-col justify-end relative justify-items-center items-center">
                            <div class="w-10 h-10 bg-[#F15C67] rounded-full flex absolute -top-5 -right-5 animate-bounce">
                                <span class="text-2xl m-auto text-white">1</span>
                            </div>
                            <p
                                class="text-white group-hover:text-white selection:bg-lime-300 selection:text-slate-900 md:text-md px-4 hover:block">
                                Pemustaka datang ke perpustakaan LP3I Tasikmalaya untuk membaca dan belajar.</p>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end items-end">
                    <div class="w-1/3 p-2 rounded-xl">
                        <img src="{{ asset('img/2.png') }}" alt="Image Caption" width="100%" class="ronded-xl shadow-xl">
                    </div>
                    <div class="w-2/3 p-2">
                        <div class="py-10 w-80 rounded-md shadow-lg bg-primary flex flex-col justify-end relative justify-items-center items-center">
                            <div class="w-10 h-10 bg-[#F15C67] rounded-full flex absolute -top-5 -right-5 animate-bounce">
                                <span class="text-2xl m-auto text-white">2</span>
                            </div>
                            <p
                                class="text-white group-hover:text-white selection:bg-lime-300 selection:text-slate-900 md:text-md px-4 hover:block">Pengguna melakukan pencarian buku menggunakan komputer OPAC di perpustakaan kampus.</p>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end items-end">
                    <div class="w-1/3 p-2 rounded-xl">
                        <img src="{{ asset('img/3.png') }}" alt="Image Caption" width="100%" class="ronded-xl shadow-xl">
                    </div>
                    <div class="w-2/3 p-2">
                        <div class="py-10 w-80 rounded-md shadow-lg bg-primary flex flex-col justify-end relative justify-items-center items-center">
                            <div class="w-10 h-10 bg-[#F15C67] rounded-full flex absolute -top-5 -right-5 animate-bounce">
                                <span class="text-2xl m-auto text-white">3</span>
                            </div>
                            <p
                                class="text-white group-hover:text-white selection:bg-lime-300 selection:text-slate-900 md:text-md px-4 hover:block">Pengguna bawa buku, KTA, ingin meminjam di perpustakaan LP3I Tasikmalaya.</p>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end items-end">
                    <div class="w-1/3 p-2 rounded-xl">
                        <img src="{{ asset('img/4.png') }}" alt="Image Caption" width="100%" class="ronded-xl shadow-xl">
                    </div>
                    <div class="w-2/3 p-2">
                        <div class="py-10 w-80 rounded-md shadow-lg bg-primary flex flex-col justify-end relative justify-items-center items-center">
                            <div class="w-10 h-10 bg-[#F15C67] rounded-full flex absolute -top-5 -right-5 animate-bounce">
                                <span class="text-2xl m-auto text-white">4</span>
                            </div>
                            <p
                                class="text-white group-hover:text-white selection:bg-lime-300 selection:text-slate-900 md:text-md px-4 hover:block">Pengguna mencari buku di rak dengan memanfaatkan mesin pencarian yang tersedia.</p>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end items-end">
                    <div class="w-1/3 p-2 rounded-xl">
                        <img src="{{ asset('img/5.png') }}" alt="Image Caption" width="100%" class="ronded-xl shadow-xl">
                    </div>
                    <div class="w-2/3 p-2">
                        <div class="py-10 w-80 rounded-md shadow-lg bg-primary flex flex-col justify-end relative justify-items-center items-center">
                            <div class="w-10 h-10 bg-[#F15C67] rounded-full flex absolute -top-5 -right-5 animate-bounce">
                                <span class="text-2xl m-auto text-white">5</span>
                            </div>
                            <p
                                class="text-white group-hover:text-white selection:bg-lime-300 selection:text-slate-900 md:text-md px-4 hover:block">Petugas perpustakaan sirkulasi buku, data peminjaman pengguna dilakukan.</p>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end items-end">
                    <div class="w-1/3 p-2 rounded-xl">
                        <img src="{{ asset('img/6.png') }}" alt="Image Caption" width="100%" class="ronded-xl shadow-xl">
                    </div>
                    <div class="w-2/3 p-2">
                        <div class="py-10 w-80 rounded-md shadow-lg bg-primary flex flex-col justify-end relative justify-items-center items-center">
                            <div class="w-10 h-10 bg-[#F15C67] rounded-full flex absolute -top-5 -right-5 animate-bounce">
                                <span class="text-2xl m-auto text-white">6</span>
                            </div>
                            <p
                                class="text-white group-hover:text-white selection:bg-lime-300 selection:text-slate-900 md:text-md px-4 hover:block">Buku sudah dapat dipinjam di perpustakaan, manfaatkan kesempatan ini sekarang juga.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mb-8 text-white mt-16">
                <p class="font-bold text-xl mb-2">Pengajuan Pengadaan Buku</p>
                <p class="text-md font-light">Berikut ini adalah menu untuk pengadaan buku.</p>
            </div>

            <div class="container mx-auto px-6 sm:flex sm:flex-wrap sm:gap-6 sm:justify-evenly">
                <div>
                    <input type="text" id="judul_buku" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block h-12 w-[550px] p-2.5" placeholder="Tulis judul buku disini..." required>
                </div>
                <div>
                    <input type="text" id="pengarang" class="-ml-8 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block h-12 w-[650px] p-2.5" placeholder="Tulis Nama Pengarang disini..." required>
                </div>
                <button type="button" class="-ml-8 text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-full text-sm px-9 py-2.5 text-center inline-flex items-center">
                    Ajukan
                    <i class="fa-solid fa-circle-up ml-3"></i>
                </button>
            </div>
    </div>
    {{-- Section Top End --}}



    {{-- Section Footer Start --}}
    <section class="bg-primary pt-16 pb-12 px-5">
        <div class="container">
            <div class="flex flex-wrap items-center justify-center mb-8">
                <img src="{{ asset('img/logolp3i.png') }}" alt="logo lp3i" width="200px" class="mx-4 mb-5">
                <img src="{{ asset('img/taglinelp3i.png') }}" alt="tagline lp3i" width="160px" class="mx-4">
            </div>

            <div>
                <p class="text-white text-center text-md">Jl. Ir. H. Juanda No.KM. 2, RW.No. 106, Panglayungan, Kec.
                    Cipedes, Kab. Tasikmalaya, Jawa Barat 46151</p>
            </div>
        </div>

        <div class="flex flex-wrap">
            <div class="w-full pt-5">
                <div class="flex flex-wrap items-center justify-center mb-5">

                    <!-- Tiktok Simple Icon -->
                    <a href="https://www.tiktok.com/@lp3i.tasik" target="_blank"
                        class="w-7 h-7 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-secondary hover:bg-secondary hover:text-white">
                        <svg role="img" width="15" class="fill-current" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <title>TikTok</title>
                            <path
                                d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z" />
                        </svg>
                    </a>

                    <!-- Instagram Simple Icon -->
                    <a href="https://www.instagram.com/lp3i.tasik" target="_blank"
                        class="w-7 h-7 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-secondary hover:bg-secondary hover:text-white">
                        <svg role="img" width="15" class="fill-current" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <title>Instagram</title>
                            <path
                                d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                        </svg>
                    </a>

                    <p class="text-white text-center text-md mr-4 hidden md:block">@lp3i.tasik</p>

                    <!-- Youtube Simple Icon -->
                    <a href="https://www.youtube.com/@lp3itasik" target="_blank"
                        class="w-7 h-7 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-secondary hover:bg-secondary hover:text-white">
                        <svg role="img" width="15" class="fill-current" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <title>YouTube</title>
                            <path
                                d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                        </svg>
                    </a>

                    <!-- Facebook Simple Icon -->
                    <a href="https://www.facebook.com/lp3i.tasik" target="_blank"
                        class="w-7 h-7 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-secondary hover:bg-secondary hover:text-white">
                        <svg role="img" width="15" class="fill-current" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <title>Facebook</title>
                            <path
                                d="M9.101 23.691v-7.98H6.627v-3.667h2.474v-1.58c0-4.085 1.848-5.978 5.858-5.978.401 0 .955.042 1.468.103a8.68 8.68 0 0 1 1.141.195v3.325a8.623 8.623 0 0 0-.653-.036 26.805 26.805 0 0 0-.733-.009c-.707 0-1.259.096-1.675.309a1.686 1.686 0 0 0-.679.622c-.258.42-.374.995-.374 1.752v1.297h3.919l-.386 2.103-.287 1.564h-3.246v8.245C19.396 23.238 24 18.179 24 12.044c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.628 3.874 10.35 9.101 11.647Z" />
                        </svg>
                    </a>

                    <p class="text-white text-center text-md mr-4 hidden md:block">Politeknik LP3I Kampus Tasikmalaya
                    </p>

                </div>
            </div>
        </div>
        </div>
    </section>
    {{-- Section Footer End --}}

    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        const dropdownDigital = () => {
            let content = document.getElementById('digitalNavbar');
            let nonactive = content.classList.contains('hidden');
            if (nonactive) {
                content.classList.remove('hidden');
            } else {
                content.classList.add('hidden');
            }
        }

        const hamburgerMenu = () => {
            let content = document.getElementById('navbarHamburger');
            let nonactive = content.classList.contains('hidden');
            if (nonactive) {
                content.classList.remove('hidden');
            } else {
                content.classList.add('hidden');
            }
        }
    </script>
</body>

</html>
