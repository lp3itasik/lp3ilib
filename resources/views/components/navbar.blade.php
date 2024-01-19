 {{-- Section Navbar Start --}}
 <nav class=" mx-auto bg-primary  py-2 w-full z-20 top-0 start-0 dark:border-gray-600">
     <div class="bg-[#ECAE30] w-full py-4 -mt-6 ">
     </div>
     <div class=" flex flex-wrap items-center justify-between mx-auto p-3">
         <a href="{{ route('welcome.index') }}" class="mx-8">
             <img src="{{ asset('img/lp3ipanjang.png') }}" alt="logo lp3i" width="200">
         </a>


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

             <button onclick="hamburgerMenu()" type="button"
                 class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-slate-200 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                 aria-controls="navbar-sticky" aria-expanded="false">
                 <span class="sr-only">Open main menu</span>
                 <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 17 14">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                         d="M1 1h15M1 7h15M1 13h15" />
                 </svg>
             </button>
         </div>
         <div class="items-center justify-between hidden w-full ml-8 md:flex md:w-auto md:order-1" id="navbarHamburger">
             <ul
                 class="flex flex-col p-4 md:p-0 mt-4 font-medium -ml-14 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:ml-0">
                 @php
                     $userRole = Auth::user()->role ; // Replace this with the actual user role logic or data from your application
                 @endphp
                 @if ($userRole === 'M')
                     <li>
                         <a href="{{ route('welcome.index') }}"
                             class="block py-2 px-3 mx-6 md:ml-0 md:mr-6 text-white rounded md:bg-transparent md:hover:text-[#ECAE30] md:text-white md:p-0 md:dark:text-blue-500">Beranda</a>
                     </li>
                 @endif
                 <li>
                     <button onclick="dropdownTentang()"
                         class="flex relative items-center justify-between w-full py-2 px-3 mx-6 text-white rounded md:hover:bg-transparent md:border-0 md:hover:text-[#ECAE30] md:p-0 md:w-auto">Tentang
                         Kami <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                             fill="none" viewBox="0 0 10 6">
                             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 d="m1 1 4 4 4-4" />
                         </svg></button>
                     <!-- Dropdown menu -->
                     <div id="tentangNavbar"
                         class="z-10 hidden absolute mt-5 font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                         <ul class="py-2 text-sm text-gray-700 dark:text-gray-400"
                             aria-labelledby="dropdownLargeButton">
                             <li>
                                 <a href="{{ route('visimisi.index') }}"
                                     class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Visi
                                     Misi</a>
                             </li>
                             <li>
                                 <a href="{{ route('pustakawan.index') }}"
                                     class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Pustakawan</a>
                             </li>
                             <li>
                                 <a href="{{ route('about.index') }}"
                                     class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Jam
                                     Pelayanan</a>
                             </li>
                         </ul>
                     </div>
                 </li>
                 <li>
                 <li>
                     <button onclick="dropdownDigital()"
                         class="flex relative items-center justify-between w-full py-2 px-3 mx-6 text-white rounded md:hover:bg-transparent md:border-0 md:hover:text-[#ECAE30] md:p-0 md:w-auto">Digital
                         <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                             fill="none" viewBox="0 0 10 6">
                             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 d="m1 1 4 4 4-4" />
                         </svg></button>
                     <!-- Dropdown menu -->
                     <div id="digitalNavbar"
                         class="z-10 hidden absolute mt-5 font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                         <ul class="py-2 text-sm text-gray-700 dark:text-gray-400"
                             aria-labelledby="dropdownLargeButton">
                             <li>
                                 <a href="https://jurnal.plb.ac.id/index.php/ekobima/index"
                                     class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Jurnal
                                     (Ekobima)</a>
                             </li>
                             <li>
                                 <a href="https://opac.politekniklp3i-tasikmalaya.ac.id/"
                                     class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Opac</a>
                             </li>
                         </ul>
                     </div>
                 </li>
                 <li>
                     <a href="{{ route('service.index') }}"
                         class="block py-2 px-3 mx-6 text-white rounded md:hover:bg-transparent md:hover:text-[#ECAE30] md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Pelayanan</a>
                 </li>
                 <li>
                     <a href="{{ route('pedoman.index') }}"
                         class="block py-2 px-3 mx-6 text-white rounded md:hover:bg-transparent md:hover:text-[#ECAE30] md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Pedoman</a>
                 </li>
                 <li>
                     <a href="{{ route('arsip.index') }}"
                         class="block py-2 px-3 mx-6 text-white rounded md:hover:bg-transparent md:hover:text-[#ECAE30] md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Arsip</a>
                 </li>
                 <li>
                     <a href="#"
                         class="block py-2 px-3 mx-6 text-white rounded md:hidden md:hover:bg-transparent md:hover:text-[#ECAE30] md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Profile</a>
                 </li>
                 <li>
                     <a href="#"
                         class="block py-2 px-3 mx-6 text-white rounded md:hidden md:hover:bg-transparent md:hover:text-[#ECAE30] md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Logout</a>
                 </li>
             </ul>
         </div>
     </div>
 </nav>
 {{-- Section Navbar End --}}
