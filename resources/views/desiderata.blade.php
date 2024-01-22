<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Desiderata</title>
    <link rel="shortcut icon" href="{{ asset('img/lp3iwarna.png') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    {{-- DataTables --}}
    <link rel="stylesheet" href="{{ asset('css/jquery.dataTables.min.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

    <style>
        html,
        /* body {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Roboto Mono', monospace;
            font-family: 'Source Code Pro', monospace;
        } */

        td,
        th {
            white-space: nowrap;
        }

        .dataTables_length>label {
            font-size: 14px !important;
            color: #6b7280 !important;
        }

        .dataTables_info,
        .paginate_button {
            font-size: 14px !important;
            color: #6b7280 !important;
        }

        .dataTables_length>label>select {
            font-size: 14px !important;
            padding: 3px 20px 3px 15px !important;
            border-radius: 10px !important;
            margin: 5px !important;
        }

        .dataTables_filter>label {
            font-size: 14px !important;
        }

        .dataTables_filter>label>input {
            margin: 5px !important;
            border-radius: 10px !important;
        }

        /* .js-example-placeholder-single {
            height: 1000px;
        } */

        .select2-container .select2-selection--single {
            width: 100% !important;
            background-color: #f9fafb;
            border: 1px solid #d1d5db !important;
            padding: 0.5rem 0.75rem;
            font-size: 0.875rem;
            height: 43px;
            border-radius: 0.4rem;
            color: #1f2937;
        }

        .select2-container .select2-selection--single .select2-selection__arrow {
            top: 20% !important;
            right: 8px;
        }

        .select2-container .select2-selection--single .select2-selection__rendered {
            font-size: 14px !important;
            top: -2px;
            left: -6px;
            position: relative;
            color: #1f2937;
        }

        .select2-search__field {
            font-size: 14px !important;
            border-radius: 0.5rem;
        }

        .select2-results {
            font-size: 14px !important;
            border-radius: 0px 10px 0px 10px;
        }
    </style>


</head>

<body class=" mx-auto max-w-screen bg-center bg-no-repeat bg-[url('/img/pattern.svg')] bg-cover">
    {{ view('components.navbar') }}

    <div class="container px-4 mx-auto">
        <div>
            <div class="px-4 pt-10 text-center items-center mb-8">
                <p class="font-bold text-black text-xl md:text-2xl">Pengajuan Buku</p>
            </div>

            <div class="w-full px-4 mb-10 bg-white shadow-lg rounded-2xl">
                <div
                    class="flex flex-column p-4 sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4">
                    <div>

                    </div>
                    <label for="table-search" class="sr-only">Search</label>
                    <div class="relative">
                        <div
                            class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input type="text" id="table-search"
                            class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Cari Judul Buku...">
                    </div>
                </div>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-8">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="font-bold text-lg px-6 py-3">
                                    Judul Buku
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row"
                                    class="px-6 py-4 text-blue-400 font-bold text-xl whitespace-nowrap dark:text-white">
                                    HUJAN
                                    <div class="flex">
                                        <h2 class="text-slate-400 text-dark font-normal md:mr-4 text-sm">
                                            <i class="fa-solid fa-user"></i>
                                            Tere Liye
                                        </h2>
                                    </div>
                                </th>

                                <td class="flex justify-end items-center gap-4 px-6 py-4 text-center">
                                    <a href="#"
                                        class="bg-green-400 hover:bg-green-500 text-white text-sm w-28 rounded-full px-3 py-1 shadow-lg">Realisasi</a>
                                    <a onclick="konfirmasiHapus()" href="#"
                                        class="bg-red-400 hover:bg-red-500 text-white text-sm rounded-full px-10 py-1 shadow-lg">Hapus</a>
                                </td>
                            </tr>

                            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-8">
                                <table id="coba-datatable"
                                    class="table table-bordered w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <thead
                                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="font-bold text-lg px-6 py-3">
                                                Judul Buku
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                <span class="sr-only">Edit</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($desiderata as $d)
                                            <tr class="book-row bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600"
                                                data-title="{{ strtolower($d->book) }}">
                                                <th scope="row"
                                                    class="px-6 py-4 text-blue-400 font-bold text-xl whitespace-nowrap dark:text-white">
                                                    {{ $d->book }}
                                                    <div class="flex">
                                                        <h2
                                                            class="text-slate-400 text-dark font-normal md:mr-4 text-sm">
                                                            <i class="fa-solid fa-user"></i>
                                                            {{ $d->author }}
                                                        </h2>
                                                    </div>
                                                </th>

                                                <td class="flex justify-end items-center gap-4 px-6 py-4 text-center">
                                                    <a onclick="return desiderataUpdate('{{ $d->id }}','{{ $d->book }}')"
                                                        href="#"
                                                        class="bg-green-400 hover:bg-green-500 text-white text-sm w-28 rounded-full px-3 py-1 shadow-lg">Realisasi</a>
                                                    <a onclick="return desiderataDelete('{{ $d->id }}','{{ $d->book }}')"
                                                        href="#"
                                                        class="bg-red-400 hover:bg-red-500 text-white text-sm rounded-full px-10 py-1 shadow-lg">Hapus</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function() {
                $('#coba-datatable').DataTable();
            });
        </script>


        {{-- Section Footer Start --}}
        {{ view('components.footer') }}
        {{-- Section Footer End --}}

        <script src="{{ asset('js/app.js') }}"></script>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const searchInput = document.getElementById("table-search");
                const bookRows = document.querySelectorAll(".book-row");

                searchInput.addEventListener("input", function() {
                    const searchTerm = searchInput.value.toLowerCase();

                    bookRows.forEach(function(row) {
                        const bookTitle = row.dataset.title.toLowerCase();
                        if (bookTitle.includes(searchTerm)) {
                            row.style.display = "table-row";
                        } else {
                            row.style.display = "none";
                        }
                    });
                });

                // Optional: Handle pagination links
                const paginationLinks = document.querySelectorAll('.pagination a');

                paginationLinks.forEach(function(link) {
                    link.addEventListener('click', function(e) {
                        e.preventDefault();

                        // Use AJAX to fetch the next page of data and update the table
                        // You can make a new AJAX request to the server endpoint that returns paginated data
                    });
                });
            });
        </script>
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

            const dropdownMaster = () => {
                let content = document.getElementById('masterNavbar');
                let nonactive = content.classList.contains('hidden');
                if (nonactive) {
                    content.classList.remove('hidden');
                } else {
                    content.classList.add('hidden');
                }
            }

            const dropdownRepository = () => {
                let content = document.getElementById('repositoryNavbar');
                let nonactive = content.classList.contains('hidden');
                if (nonactive) {
                    content.classList.remove('hidden');
                } else {
                    content.classList.add('hidden');
                }
            }

            const dropdownTentang = () => {
                let content = document.getElementById('tentangNavbar');
                let nonactive = content.classList.contains('hidden');
                if (nonactive) {
                    content.classList.remove('hidden');
                } else {
                    content.classList.add('hidden');
                }
            }

            const dropdownRadioButton = () => {
                let content = document.getElementById('dropdownRadio');
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


            function konfirmasiHapus() {
                var konfirmasi = confirm("Apakah Anda yakin ingin menghapus data?");

                if (konfirmasi) {
                    // Proses penghapusan data dapat ditambahkan di sini
                    alert("Data berhasil dihapus!");
                } else {
                    alert("Penghapusan data dibatalkan.");
                }
            }
        </script>
        <script>
            const desiderataDelete = async (id, book) => {
                let check = $('meta[name="csrf-token"]').attr('content');
                let tanya = confirm(`Apakah anda yakin untuk menghapus Buku ${book} ?`);
                if (tanya) {
                    await axios.post(`/desideratas/${id}`, {
                            '_method': 'DELETE',
                            '_token': $('meta[name="csrf-token"]').attr('content')
                        })
                        .then(function(response) {
                            // Handle success
                            location.reload();
                        })
                        .catch(function(error) {
                            // Handle error
                            alert('Error deleting record');
                            console.log(error);
                        });
                }
            }

            const desiderataUpdate = async (id, book) => {
                let tanya = confirm(`Realisasikan buku ${book}?`);
                if (tanya) {
                    const csrftoken = $('meta[name="csrf-token"]').attr('content');
                    await axios.post(`/desiderata/${id}`, {
                            '_method': 'PATCH',
                            '_token': $('meta[name="csrf-token"]').attr('content')
                        })
                        .then(function(response) {
                            // Handle success
                            // location.reload();
                            console.log(response);
                        })
                        .catch(function(error) {
                            // Handle error
                            alert('Error deleting record');
                            console.log(error);
                        });
                }
                // try {
                //     const response = await axios({
                //         method: 'post',
                //         url: `/desideratas/${id}`,
                //         headers: {
                //             'X-CSRF-Token': csrfToken,
                //         },
                //         data: {
                //             '_method': 'PATCH',
                //         },
                //     });

                //     console.log(response);

                //     // Handle success
                //     // alert('Record updated successfully');
                //     // location.reload();
                // } catch (error) {
                //     // Handle error
                //     // alert('Error Ai Kamu ihhhh... Ada yang salah kata gw mahhhhh');
                //     console.error(error);
                // }

            };
        </script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const searchInput = document.getElementById("table-search");
                const bookRows = document.querySelectorAll(".book-row");

                searchInput.addEventListener("input", function() {
                    const searchTerm = searchInput.value.toLowerCase();

                    bookRows.forEach(function(row) {
                        const bookTitle = row.dataset.title.toLowerCase();
                        if (bookTitle.includes(searchTerm)) {
                            row.style.display = "table-row";
                        } else {
                            row.style.display = "none";
                        }
                    });
                });
            });
        </script>
</body>

</html>
