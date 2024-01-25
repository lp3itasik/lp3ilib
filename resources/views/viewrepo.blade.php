<x-landing-layout>
    <div class="container px-4 mx-auto mt-12">
        <section id="view" class="mb-32">
            <div class="container mx-auto">
                <div class="flex flex-wrap">
                    <div class="w-full lg:w-2/3 space-y-5 px-4 mb-10 shadow-lg bg-white rounded-2xl">
                        <div>
                            <h4 class="text-blue-400 text-wrap uppercase font-bold mb-3 text-2xl mt-5 ">
                                {{ $repositories->title }}
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
                            <p class="text-right text-blue-500 text-md">{{ $repositories->user->name }}</p>
                        </div>

                        <hr class="my-2 border-t-8">

                        <div class="grid grid-cols-2">
                            <p class="text-gray-300 text-md">Kontributor/Dosen Pembimbing</p>
                            <p class="text-right text-blue-500 text-md">{{ $repositories->userlec->name }}</p>
                        </div>

                        <hr class="my-2 border-t-8">

                        <div class="grid grid-cols-2">
                            <p class="text-gray-300 text-md">Jenis Koleksi</p>
                            <p class="text-right text-blue-500 text-md">{{ $repositories->types->name }}</p>
                        </div>

                        <hr class="my-2 border-t-8">

                        <div class="grid grid-cols-2">
                            <p class="text-gray-300 text-md">Prodi</p>
                            <p class="text-right text-blue-500 text-md">{{ $repositories->major }}</p>
                        </div>


                        <hr class="my-2 border-t-8">

                        <div class="grid grid-cols-2">
                            <p class="text-gray-300 text-md">Staff Approve</p>
                            <p class="text-right text-blue-500 text-md">{!! $repositories->useroff
                                ? $repositories->useroff->name
                                : "<span class='bg-red-500 text-white px-2 py-1 rounded-md'>belum di approve</span>" !!}

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
                            <p class="text-right text-blue-500 text-md">{{ $repositories->created_at }}</p>
                        </div>

                        <div class="flex justify-center items-center my-4">
                            <button onclick="slideNext(1)" id="page-1-title" type="submit"
                                class="flex justify-center w-5 items-center gap-2 mx-3 text-black font-semibold text-xl rounded-lg shadow-lg px-16 py-3 transition-all duration-200 hover:bg-gray-400">
                                Files
                            </button>

                            <button onclick="slideNext(2)" id="page-2-title"
                                class="flex justify-center w-5 items-center gap-2 text-black font-semibold text-xl rounded-lg shadow-lg  px-16 py-3 transition-all duration-200 hover:bg-gray-400">
                                Abstrak
                            </button>
                        </div>

                        <div class="my-10 bg-gray-300 rounded-lg hidden shadow-lg" id="page-1">
                            <p class=" px-4 py-4">{{ $repositories->abstract }}</p>
                        </div>

                        <div class="flex mt-10" id="page-2">
                            <a href="#">
                                <i class="text-gray-500 fa-solid fa-file-pdf fa-2x"></i>
                            </a>
                            <a href="https://opac.politekniklp3i-tasikmalaya.ac.id:8444/download?identity={{ $repositories->student }}&filename={{ $repositories->Det->file_name }}-{{ $repositories->Det->id }}{{ $repositories->Det->typefile }}" class="ml-3 text-wrap text-blue-400 uppercase font-bold mb-3 text-md ">
                                {{ $repositories->title }}
                            </a>
                        </div>
                    </div>

                    <div class="max-w-lg lg:w-1/3 mx-auto items-center">
                        <h3 class="font-semibold text-black text-xl mb-4 lg:text-2xl text-center">
                            Jenis Koleksi
                        </h3>
                        <div class="container max-w-lg lg:w-1/3 mx-auto flex flex-col justify-center items-center">
                            <a href="{{ route('searchrepo.edit', '6') }}"
                                class="w-64 text-white flex text-md justify-center items-center bg-red-400 rounded-lg px-1 py-3 shadow-lg  mb-3">
                                <i class="fa-solid fa-file-lines"></i>
                                <p class="ml-3">
                                    Tugas Akhir
                                </p>
                            </a>
                            <a href="{{ route('searchrepo.edit', '7') }}"
                                class="w-64 text-white flex text-md justify-center items-center bg-red-400 rounded-lg px-1 py-3 shadow-lg  mb-3">
                                <i class="fa-solid fa-file-lines"></i>
                                <p class="ml-3">
                                    Laporan KKN
                                </p>
                            </a>
                            <a href="{{ route('searchrepo.edit', '8') }}"
                                class="w-64 text-white flex text-md justify-center items-center bg-red-400 rounded-lg px-1 py-3 shadow-lg mb-3">
                                <i class="fa-solid fa-file-lines"></i>
                                <p class="ml-3">
                                    Laporan KKI
                                </p>
                            </a>
                            <a href="{{ route('searchrepo.edit', '16') }}"
                                class="w-64 text-white flex text-md justify-center items-center bg-red-400 rounded-lg px-1 py-3 shadow-lg mb-16">
                                <i class="fa-solid fa-file-lines"></i>
                                <p class="ml-3">
                                    Laporan PKM
                                </p>
                            </a>

                            <h3 class="font-semibold text-black text-xl mb-4">
                                Program Studi
                            </h3>
                            <div class="text-wrap">
                                <div
                                    class="w-64 text-white text-md flex flex-col text-center justify-center items-center bg-white rounded-lg px-1 py-3 shadow-lg  mb-3">
                                    <div
                                        class="bg-primary h-[252px] w-[230px] rounded-lg shadow-md relative mb-5">
                                        <img src="{{ asset('img/Rounded.png') }}" alt="" class="absolute right-0">
                                        <div
                                            class="h-full flex text-xl top-24 z-10 font-semibold items-center justify-center">
                                            Manajemen Pemasaran
                                        </div>
                                    </div>

                                    <div class="bg-[#ECF0D1] h-[252px] w-[230px] rounded-lg shadow-md relative mx-auto">
                                        <img src="{{ asset('img/Rounded2.png') }}" alt="" class="absolute right-0">
                                        <div
                                            class="h-full flex text-xl top-24 z-10 text-black font-semibold items-center justify-center">
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
</x-landing-layout>
