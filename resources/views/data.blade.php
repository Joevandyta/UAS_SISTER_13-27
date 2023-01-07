<x-app-layout>
    <x-slot name="title">
        Statistic | Data Siswa
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Mahasiswa') }}
        </h2>

    </x-slot>

    @auth
        <div class="py-12 ">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-transparent   overflow-hidden shadow-sm sm:rounded-lg">

                    <div class=" bg-transparent border-b border-gray-200 ">

                        <div class=" w-full my-4 py-4 rounded-2xl bg-sky-300 shadow-lg px-4 ">
                            <a>
                                <button
                                    class="mb-4 mr-6 h-10 w-20 rounded-lg bg-gradient-to-r from-primary to-second text-white hover:from-second hover:to-primary show-modalImport">
                                    <span class=" font-bold ">{{ __('Import') }} </span>
                                </button>
                            </a>

                            <a href="{{ route('exportdata') }}" onclick="return confirm('Download File?')">
                                <button
                                    class="mb-4 mr-6 h-10 w-20 rounded-lg bg-gradient-to-r from-primary to-second text-white hover:from-second hover:to-primary">
                                    <span class=" font-bold ">{{ __('Export') }}</span>
                                </button>

                            </a>

                            <!-- Modal -->
                            <div
                                class="modal fixed top-0 left-0 w-full h-full  outline-none bg-gray-900 bg-opacity-50 hidden">
                                <div class="relative flex justify-center my-10 pointer-events-none">
                                    <div
                                        class=" w-1/4 border-none shadow-lg relative flex flex-col  pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                                        <form action="{{ route('importdata') }}" method="POST"
                                            enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <div
                                                class="flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                                                <h5 class="text-xl font-medium leading-normal text-gray-800">Import Student
                                                    Data
                                                </h5>
                                                <button type="button"
                                                    class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline close-modalImport"></button>
                                            </div>
                                            <div class="relative p-4">

                                                <div class="form-group">
                                                    <input type="file" name="file" required="required">
                                                </div>

                                            </div>
                                            <div
                                                class=" flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">

                                                <button type="Submit"
                                                    class="px-6 py-2.5 bg-primary text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-primary hover:shadow-lg focus:bg-primary focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary active:shadow-lg transition duration-150 ease-in-out ml-1">Save
                                                    changes</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="flex h-12">
                                <div class="flex  w-full  h-full ">
                                    <a href="#search" class="rounded-l-md  bg-primary flex justify-center ">
                                        <i class="text-3xl text-white py-1 px-3 uil uil-search"></i>
                                    </a>
                                    <input type="text"
                                        class="w-full rounded-r-md px-4 hover:bg-gray-100  focus:outline-0"
                                        placeholder=" Search">
                                </div>
                                <a href="{{ route('insert') }}"
                                    class="flex h-full ml-2 px-4 justify-center items-center rounded-md bg-gradient-to-r from-primary to-second hover:from-second hover:to-primary text-white">
                                    <span class=" font-bold ">{{ __('ADD') }}</span>

                                </a>

                            </div>
                        </div>
                        <div style="overflow-x:auto;" class=" rounded-lg">
                            <table class="min-w-full text-center  ">
                                <thead class="bg-primary ">
                                    <tr>

                                        <th scope="col"
                                            class="py-3 px-5 w-8 text-xs font-bold tracking-wider text-white uppercase ">
                                            No
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-xs font-bold tracking-wider text-white uppercase ">
                                            Nama
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-xs font-bold tracking-wider text-white uppercase ">
                                            NIM
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-xs font-bold tracking-wider text-white uppercase ">
                                            Gender
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-xs font-bold  tracking-wider text-white uppercase ">
                                            IPK
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-xs font-bold  tracking-wider text-white uppercase ">
                                            Kelas
                                        </th>
                                        <th scope="col" class=" p-4">
                                            <span class="text-white">Action</span>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody class=" bg-white divide-y divide-gray-200 ">
                                    @foreach ($student as $s)
                                        <tr class="">

                                            <td class="py-4 w-8 text-sm font-medium text-black whitespace-nowrap">
                                                {{ $s->id }}
                                            </td>
                                            <td class="py-4 px-6 text-sm font-medium text-black whitespace-nowrap">
                                                {{ $s->student_name }}
                                            </td>
                                            <td
                                                class="overflow-hidden py-4 px-6 text-sm font-medium text-black whitespace-nowrap ">
                                                {{ $s->nim }}
                                            </td>
                                            <td class="py-4 px-6 text-sm font-medium text-black whitespace-nowrap">
                                                {{ $s->gender }}
                                            </td>
                                            <td class="py-4 px-6 text-sm font-medium text-black whitespace-nowrap">
                                                {{ $s->nilai }}
                                            </td>
                                            <td class="py-4 px-6 text-sm font-medium text-black whitespace-nowrap">
                                                {{ $s->kelas }}
                                            </td>
                                            <td class=" text-sm font-medium whitespace-nowrap">
                                                <a href="{{ route('editsiswa', $s->id) }}"
                                                    class=" text-green-900 hover:underline">Edit</a>
                                                {{-- delete  button --}}
                                                <form action="{{ route('deletesiswa', $s->id) }}"
                                                    onclick="return confirm('Apa Kamu Yakin ingin menghapus Data dengan No.{{ $s->id }} dan nama {{ $s->student_name }} ?')"
                                                    method="POST">
                                                    @csrf   
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class=" text-red-700 hover:underline">Delete</button>
                                                </form>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="py-12 ">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    You are not login
                </div>
            </div>
        </div>
    @endauth
    <script>
        const modal = document.querySelector('.modal');
        const showModalImport = document.querySelector('.show-modalImport');
        const closeModalImport = document.querySelector('.close-modalImport');

        showModalImport.addEventListener('click', function() {
            modal.classList.remove('hidden')
        });
        closeModalImport.addEventListener('click', function() {
            modal.classList.add('hidden')
        });
    </script>
</x-app-layout>
