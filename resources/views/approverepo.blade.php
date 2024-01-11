<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Approve Repo</title>
    <link rel="shortcut icon" href="{{asset('img/lp3iwarna.png')}}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

</head>

<body class=" mx-auto max-w-screen  bg-center bg-no-repeat bg-[url('/img/pattern.svg')] bg-cover">
    {{-- Section Navbar Start --}}
    {{ view('components.navbar') }}
    {{-- Section Navbar End --}}


    {{-- Section Top Start --}}
    
    <div class="container mx-auto mt-8 mb-20">
        <div class="container mx-auto">
          <div class="px-4 text-center items-center">
            <p class="font-bold text-black text-xl md:text-2xl mb-12">View Approve</p>
          </div>
            <section id="inputrepo" class="px-4 mb-32">
                <div class="container mx-auto">
                    <div class="w-full mx-auto px-6 py-6 mb-10 shadow-md bg-white rounded-2xl border">
                      <form>
                        <div class="grid gap-6 mb-6 md:grid-cols-3">
                            <div>
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                                <input type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" readonly>
                            </div>
                            <div>
                                <label for="nim" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIM</label>
                                <input type="number" id="nim" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" readonly>
                            </div>
                            <div>
                                <label for="nim" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Prodi</label>
                                <input type="number" id="nim" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" readonly>
                            </div>
                          </div>
                        
                        <div class="mb-6">
                            <label for="judul" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul Repository</label>
                            <input type="text" id="judul" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" readonly>
                        </div> 

                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div class="mb-6">
                                <label for="judul" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Koleksi</label>
                                <input type="text" id="judul" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" readonly>
                            </div> 
                          <div>
                            <label for="namapembimbing" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Pembimbing</label>
                            <input type="text" id="namapembimbing" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" readonly>
                        </div>
                        </div>
                        <div class="mb-6">
                            <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Subject</label>
                            <input type="text" id="subject" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" readonly>
                        </div> 
                        <div class="mb-6">
                            <label for="keyword" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kata Kunci</label>
                            <input type="text" id="keyword" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" readonly>
                        </div> 
                        <div class="mb-6">
                            <label for="keyword" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Abstrak</label>
                            <textarea type="text" id="keyword" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" readonly>
                            </textarea>
                        </div>
                        
                        <div class="flex justify-center mx-auto items-center">
                          <button type="submit" class="flex justify-center  items-center gap-2 text-white mx-3 shadow-lg bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-5 px-16 py-3 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Approve
                            <i class="fa-solid fa-square-check md:ml-5"></i>
                          </button>

                          <button type="submit" class="flex justify-center items-center gap-2 text-white mx-3 shadow-lg bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-5 px-16 py-3 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Denied
                            <i class="fa-solid fa-ban md:ml-5"></i>
                          </button>
                        </div>
                      </form>
                    </div>
                </div>
            </section>
          </div>
        </div>
    </div>
    {{-- Section Top End --}}

    

    {{-- Section Footer Start --}}
    {{ view('components.footer') }}
    {{-- Section Footer End --}}

    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        const dropdownDigital = () => {
            let content = document.getElementById('digitalNavbar');
            let nonactive = content.classList.contains('hidden');
            if(nonactive){
                content.classList.remove('hidden');
            }else{
                content.classList.add('hidden');
            }
        }

        const dropdownTentang = () => {
            let content = document.getElementById('tentangNavbar');
            let nonactive = content.classList.contains('hidden');
            if(nonactive){
                content.classList.remove('hidden');
            }else{
                content.classList.add('hidden');
            }
        }
        
        const hamburgerMenu = () => {
            let content = document.getElementById('navbarHamburger');
            let nonactive = content.classList.contains('hidden');
            if(nonactive){
                content.classList.remove('hidden');
            }else{
                content.classList.add('hidden');
            }
        }

        const abstrakMenu = () => {
          let content = document.getElementById('isiAbstrak');
          let nonactive = content.classList.contains('hidden');
          if(nonactive){
            content.classList.remove('hidden');
          }else{
            content.classList.add('hidden');
          }
        }
    </script>
</body>

</html>