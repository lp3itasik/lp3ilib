<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Repo</title>
    <link rel="shortcut icon" href="{{asset('img/lp3iwarna.png')}}">
    <link rel="shortcut icon" href="{{asset('img/lp3iwarna.png')}}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

</head>

<body class=" mx-auto max-w-screen bg-center bg-no-repeat bg-[url('/img/pattern.svg')] bg-cover">
    {{-- Section Navbar Start --}}
    {{ view('components.navbar') }}
    {{-- Section Navbar End --}}


    {{-- Section Top Start --}}
    
    <div class="container px-4 mx-auto mt-12">
        <div>
            <section id="view" class="mb-32">
                <div class="container mx-auto">
                  <div class="flex flex-wrap">
                    <div class="w-full lg:w-2/3 px-4 mb-10 shadow-lg bg-white rounded-2xl">
                            <div>
                                <h4 class="text-blue-400 uppercase font-bold mb-3 text-2xl mt-5 ">
                                    {{$repositories->title}}
                                </h4>
                            </div>
                      <div class="flex">
                          <h2 class="text-slate-400 text-dark font-normal text-xs mb-5 mr-4 max-w-md">
                            <i class="fa-solid fa-eye"></i>
                            335 Views
                          </h2>
                      </div>

                      <hr class="my-2 border-t-8">

                      <div class="grid grid-cols-2">
                        <p class="text-gray-300 text-md">Penulis</p>
                        <p class="text-right text-blue-500 text-md">{{$repositories->user->name}}</p>
                      </div>

                      <hr class="my-2 border-t-8">

                      <div class="grid grid-cols-2">
                        <p class="text-gray-300 text-md">Kontributor/Dosen Pembimbing</p>
                        <p class="text-right text-blue-500 text-md">{{$repositories->userlec->name}}</p>
                      </div>

                      <hr class="my-2 border-t-8">

                      <div class="grid grid-cols-2">
                        <p class="text-gray-300 text-md">Jenis Koleksi</p>
                        <p class="text-right text-blue-500 text-md">{{$repositories->types->name}}</p>
                      </div>

                      <hr class="my-2 border-t-8">

                      <div class="grid grid-cols-2">
                        <p class="text-gray-300 text-md">Prodi</p>
                        <p class="text-right text-blue-500 text-md">{{$repositories->major}}</p>
                      </div>

                      <hr class="my-2 border-t-8">

                      {{-- <div class="grid grid-cols-2">
                        <p class="text-gray-300 text-md">Subject</p>
                        <p class="text-right text-blue-500 text-md">Internet of Things</p>
                      </div>

                      <hr class="my-2 border-t-8">

                      <div class="grid grid-cols-2">
                        <p class="text-gray-300 text-md">Kata Kunci</p>
                        <p class="text-right text-blue-500 text-md">Internet of Things, teknologi rumah pintar , perkantoran , 
                          Unified Theory of Acceptance and Use of Technology, 
                          Multiple Linear Regression</p>
                      </div> --}}

                      {{-- <hr class="my-2 border-t-8"> --}}

                      <div class="grid grid-cols-2">
                        <p class="text-gray-300 text-md">Staff Approve</p>
                        <p class="text-right text-blue-500 text-md">{!! $repositories->useroff ? $repositories->useroff->name : "<span class='bg-red-500 text-white m-4 px-2 py-1 rounded-md'>belum di approve</span>" !!}

                        </p>
                      </div>

                      <hr class="my-2 border-t-8">

                      <div class="grid grid-cols-2">
                        <p class="text-gray-300 text-md">File</p>
                        <p class="text-right text-blue-500 text-md">1 File</p>
                      </div>

                      <hr class="my-2 border-t-8">

                      <div class="grid grid-cols-2">
                        <p class="text-gray-300 text-md">Tanggal Input</p>
                        <p class="text-right text-blue-500 text-md">{{$repositories->created_at}}</p>
                      </div>

                      <div class="flex justify-center items-center my-4">
                          <button onclick="slideNext(1)" id="page-1-title" type="submit" class="flex justify-center w-5 items-center gap-2 mx-3 text-black font-semibold text-xl rounded-lg shadow-lg px-16 py-3 transition-all duration-200 hover:bg-gray-400">
                            Files
                          </button>

                          <button onclick="slideNext(2)" id="page-2-title" class="flex justify-center w-5 items-center gap-2 text-black font-semibold text-xl rounded-lg shadow-lg  px-16 py-3 transition-all duration-200 hover:bg-gray-400">
                            Abstrak
                          </button>
                      </div>

                      <div class="my-10 bg-gray-300 rounded-lg hidden shadow-lg" id="page-1">
                        <p class=" px-4 py-4">{{$repositories->abstract}}</p>
                      </div>

                      <div class="flex mt-10" id="page-2">
                        <a href="#">
                          <i class="text-gray-500 fa-solid fa-file-pdf fa-2x"></i>
                        </a>
                        <a href="#" class="ml-3 text-blue-400 uppercase font-bold mb-3 text-md ">
                          {{$repositories->title}}
                        </a>
                      </div>


                    </div>
          
                    <div class="max-w-lg lg:w-1/3 mx-auto items-center">
                      <h3
                        class="font-semibold text-black text-xl mb-4 lg:text-2xl text-center">
                        Jenis Koleksi
                      </h3>
                      <div class="container max-w-lg lg:w-1/3 mx-auto flex flex-col justify-center items-center">
                        <a href="{{route('inputrepo.index')}}" class="w-64 text-white flex text-md justify-center items-center bg-red-400 rounded-lg px-1 py-3 shadow-lg  mb-3">
                          <i class="fa-solid fa-file-lines"></i>
                          <p class="ml-3">
                            Tugas Akhir
                          </p>
                        </a>
                        <div class="w-64 text-white flex text-md justify-center items-center bg-red-400 rounded-lg px-1 py-3 shadow-lg  mb-3">
                          <i class="fa-solid fa-file-lines"></i>
                          <p class="ml-3">
                            Laporan KKN
                          </p>
                        </div>
                        <div class="w-64 text-white flex text-md justify-center items-center bg-red-400 rounded-lg px-1 py-3 shadow-lg mb-3">
                          <i class="fa-solid fa-file-lines"></i>
                          <p class="ml-3">
                            Laporan KKI
                          </p>
                        </div>
                        <div class="w-64 text-white flex text-md justify-center items-center bg-red-400 rounded-lg px-1 py-3 shadow-lg mb-16">
                          <i class="fa-solid fa-file-lines"></i>
                          <p class="ml-3">
                            Laporan PKM
                          </p>
                        </div>

                        <h3
                        class="font-semibold text-black text-xl mb-4">
                        Program Studi
                      </h3>
                      <div class="">
                        <div class="w-64 text-white text-md flex flex-col text-center justify-center items-center bg-white rounded-lg px-1 py-3 shadow-lg  mb-3">
                          <div class="bg-primary h-[252px] w-[230px] rounded-lg shadow-md relative mx-auto mb-5">
                            <img src="{{asset('img/Rounded.png')}}" alt="" class="ml-10">
                            <div class="absolute text-xl top-24 z-10 text-center font-semibold  justify-center">
                                Manajemen Pemasaran
                            </div>
                          </div>

                          <div class="bg-[#ECF0D1] h-[252px] w-[230px] rounded-lg shadow-md relative mx-auto">
                            <img src="{{asset('img/Rounded2.png')}}" alt="" class="ml-[60px]">
                            <div class="absolute text-xl top-24 z-10 text-black font-semibold text-center items-center justify-center">
                                Manajemen Keuangan Perbankan
                            </div>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </section>
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

        const dropdownMaster = () => {
            let content = document.getElementById('masterNavbar');
            let nonactive = content.classList.contains('hidden');
            if(nonactive){
                content.classList.remove('hidden');
            }else{
                content.classList.add('hidden');
            }
        }

        const dropdownRepository = () => {
            let content = document.getElementById('repositoryNavbar');
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

        const slideNext = (page) => {
        switch (page) {
            case 1:
                document.getElementById('page-1').style.display = 'none';
                document.getElementById('page-2').style.display = 'flex';

                document.getElementById('page-1-title').style.background = '#1E90FF';
                document.getElementById('page-2-title').style.background = '#DCDCDC';

                document.getElementById('page-1-title').style.color = '#FFFFFF';
                document.getElementById('page-2-title').style.color = '#000000';
                break;
            case 2:
                document.getElementById('page-1').style.display = 'flex';
                document.getElementById('page-2').style.display = 'none';

                document.getElementById('page-1-title').style.background = '#DCDCDC';
                document.getElementById('page-2-title').style.background = '#1E90FF';
                
                document.getElementById('page-1-title').style.color = '#000000';
                document.getElementById('page-2-title').style.color = '#FFFFFF';
                break;
            }
        }
    </script>
</body>

</html>
