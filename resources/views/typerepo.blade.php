    <x-landing-layout>
        <div class="container mx-auto mt-14">
            <div>
                <div class="px-4 text-center items-center">
                    <p class="font-bold text-black text-xl md:text-2xl mb-5">Type Repository</p>
                </div>
                <section id="inputrepo" class="px-4 mb-32">
                    <div class="container md:flex md:flex-row gap-6 mx-auto">
                        <div class="w-full md:w-1/2 mx-auto px-6 py-6 mb-10 shadow-lg bg-white rounded-2xl border">
                            <form action="{{ route('types.store') }}" method="post">
                                @csrf
                                <div class="mb-5 font-bold text-lg ">
                                    <h1>Form Input Type</h1>
                                </div>
                                <div class="mb-6">
                                    <label for="name"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type</label>
                                    <input type="text" name="name"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Masukan Type..." required>
                                    <span class="text-sm m-l text-red-500">{{ $errors->first('name') }}</span>
                                </div>
                                <div>
                                    <button href="#" type="submit"
                                        class="text-white mx-auto shadow-lg bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-6 py-3 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Simpan
                                        <i class="fa-solid fa-floppy-disk ml-3"></i>
                                    </button>
                                </div>

                            </form>
                        </div>

                        <div class=" w-full md:w-1/2 overflow-x-auto bg-white p-4 shadow-lg rounded-2xl">
                            <table class="table table-bordered" id="types-datatables">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Type</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>

                        <div class="fixed inset-0 items-center justify-center z-50 hidden" id="sourceModal">
                            <div class="fixed inset-0 bg-black opacity-50"></div>
                            <div class="fixed inset-0 flex items-center justify-center">
                                <div class="w-full md:w-1/2 relative bg-white rounded-lg shadow mx-5">
                                    <div class="flex items-start justify-between p-4 border-b rounded-t">
                                        <h3 class="text-xl font-semibold text-gray-900" id="title_source">
                                            Tambah Sumber Database
                                        </h3>
                                        <button type="button" onclick="sourceModalClose(this)"
                                            data-modal-target="sourceModal"
                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center"
                                            data-modal-hide="defaultModal">
                                            <i class="fa-solid fa-xmark"></i>
                                        </button>
                                    </div>
                                    <form method="POST" action="{{ route('types.store') }}" id="formSourceModal">
                                        @csrf
                                        <div class="p-4 space-y-6">
                                            <div>
                                                <label for="text"
                                                    class="block mb-2 text-sm font-medium text-gray-900">Type</label>
                                                <input type="text" id="name" name="name"
                                                    class="px-3 py-2 border shadow rounded w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 peer hover:shadow-lg"
                                                    id="" placeholder="Masukan Type...">
                                            </div>
                                        </div>
                                        <div class="flex items-center p-4 space-x-2 border-t border-gray-200 rounded-b">
                                            <button type="submit" id="formSourceButton"
                                                class="bg-green-400 m-2 w-40 h-10 rounded-xl hover:bg-green-500">Simpan</button>
                                            <button type="button" data-modal-target="sourceModal"
                                                onclick="changeSourceModal(this)"
                                                class="bg-red-500 m-2 w-40 h-10 rounded-xl text-white hover:shadow-lg hover:bg-red-600">Batal</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>


                    </div>
                </section>
            </div>
        </div>
    </x-landing-layout>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            console.log('RUN!');
            $('#types-datatables').DataTable({
                ajax: {
                    url: 'api/types',
                    dataSrc: 'types'
                },
                columns: [{
                    data: 'no',
                    render: (data, type, row, meta) => {
                        return meta.row + 1;
                    }
                }, {
                    data: 'name',
                }, {
                    data: {
                        no: 'no',
                        name: 'name'
                    },
                    render: (data) => {
                        let editUrl =
                            `<button type="button" data-id="${data.id}"
                                                    data-modal-target="sourceModal" data-name="${data.name}"
                                                    onclick="editSourceModal(this)"
                                                    class="bg-amber-500 hover:bg-amber-600 px-3 py-1 rounded-md text-xs text-white">
                                                   Edit
                                                </button>`;
                        let deleteUrl =
                            `<button onclick="return typesDelete('${data.id}')" class="bg-red-500 hover:bg-bg-red-300 px-3 py-1 rounded-md text-xs text-white">Delete</button>`;
                        return `${editUrl} ${deleteUrl}`;
                    }
                }, ],
            });
        });
        const typesDelete = async (id) => {
            let tanya = confirm('Leres bade dihapus?');
            if (tanya) {
                await axios.post(`/types/${id}`, {
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

        const editSourceModal = (button) => {
            const formModal = document.getElementById('formSourceModal');
            const modalTarget = button.dataset.modalTarget;
            const id = button.dataset.id;
            const name = button.dataset.name;
            let url = "{{ route('types.update', ':id') }}".replace(':id', id);
            let status = document.getElementById(modalTarget);
            document.getElementById('title_source').innerText = `Edit Type ${name}`;
            document.getElementById('name').value = name;
            document.getElementById('formSourceButton').innerText = 'Simpan perubahan';
            document.getElementById('formSourceModal').setAttribute('action', url);
            let csrfToken = document.createElement('input');
            csrfToken.setAttribute('type', 'hidden');
            csrfToken.setAttribute('name', '_token');
            csrfToken.setAttribute('value', '{{ csrf_token() }}');
            formModal.appendChild(csrfToken);

            let methodInput = document.createElement('input');
            methodInput.setAttribute('type', 'hidden');
            methodInput.setAttribute('name', '_method');
            methodInput.setAttribute('value', 'PATCH');
            formModal.appendChild(methodInput);

            status.classList.toggle('hidden');
        }

        const sourceModalClose = (button) => {
            const modalTarget = button.dataset.modalTarget;
            let status = document.getElementById(modalTarget);
            status.classList.toggle('hidden');
        }
    </script>
