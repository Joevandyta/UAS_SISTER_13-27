<x-app-layout>
    <x-slot name="title">
        Statistic | Insert Data
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Student Data') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6  border-b border-gray-200">

                    <form action="{{ route('update', $student->id) }}" method="POST" class="text-black">
                        @csrf
                        @method('PATCH')
                        <div
                            class="relative bg-primaryblue text-2xl lg:text-3xl font-bold px-3 py-4 mb-3 border-b-2 rounded-t-lg ">
                            Edit Student Data
                        </div>

                        <div class="mx-3 mt-3  text-black">
                            <div class="flex flex-wrap">
                                <div class="w-full px-3 sm:w-1/2">
                                    <div class="mb-5">
                                        <label for="student_name" class="mb-3 block text-primaryblue font-semibold ">
                                            Nama Siswa
                                        </label>
                                        <input type="text" name="student_name" id="student_name"
                                            value="{{ $student->student_name }}"
                                            class=" w-full rounded-md border-b-2 bg-white py-3 px-6 font-medium  outline-none focus:border-second focus:shadow-md" />
                                        @error('student_name')
                                            <span class="text-red-500 ">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="w-full px-3 sm:w-1/2">
                                    <div class="mb-5">
                                        <label for="category" class="mb-3 block text-primaryblue font-semibold ">
                                            NIM
                                        </label>
                                        <input type="text" name="nim" id="nim" value="{{ $student->nim }}"
                                            class="w-full rounded-md border-b-2 bg-white py-3 px-6 font-medium  outline-none focus:border-second focus:shadow-md" />
                                        @error('nim')
                                            <span class="text-red-500 ">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="w-full px-3 sm:w-1/2">
                                    <div class="mb-5">
                                        <label for="point" class="mb-3 block text-primaryblue font-semibold ">
                                            Gender
                                        </label>
                                        <select name="gender" id="gender" className="block w-full mt-1 rounded-md"
                                            onChange={onHandleChange}
                                            class="w-full rounded-md border-b-2 bg-white py-3 px-6 font-medium  outline-none focus:border-second focus:shadow-md">
                                            <option value="pria">Pria</option>
                                            <option value="wanita">Wanita</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="w-full px-3 sm:w-1/2">
                                    <div class="mb-5">
                                        <label for="nilai" class="mb-3 block text-primaryblue font-semibold ">
                                            IPK
                                        </label>
                                        <input type="text" name="nilai" id="nilai" placeholder="IPK"
                                            value="{{ $student->nilai }}"
                                            class="w-full rounded-md border-b-2 bg-white py-3 px-6 font-medium  outline-none focus:border-second focus:shadow-md" />
                                        @error('nilai')
                                            <span class="text-red-500 ">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="w-full px-3 sm:w-1/2">

                                    <div class="mb-5">
                                        <label for="certificate" class="mb-3 block text-primaryblue font-semibold ">
                                            Kelas
                                        </label>
                                        <input type="text" name="kelas" id="kelas" placeholder="Kelas"
                                            value="{{ $student->kelas }}"
                                            class="w-full rounded-md border-b-2 bg-white py-3 px-6 font-medium  outline-none focus:border-second focus:shadow-md" />
                                        @error('kelas')
                                            <span class="text-red-500 ">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="px-3 py-3 flex justify-start mb-4">

                                <input type="submit" name="submit" value="Save"
                                    class="hover:shadow-form rounded-md bg-second hover:bg-primaryblue py-3 px-8 text-center text-base font-semibold text-white outline-none">

                            </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
