<x-app-layout>
    <x-slot name="title">
        UAS | Dashboard
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="flex">

        <main class="container mx-auto h-screen">

            <!-- Card row 2-->
            <div class="pt-16 flex flex-wrap">
                <div class="flex-row w-full sm:flex-auto sm:w-7/12 rounded-2xl p-2">
                    <div class="flex flex-row rounded-2xl bg-white h-full p-6">
                        <div class="flex-none my-auto  w-9/12">
                            <h2 class="text-slate-900 text-sm md:text-lg">Admin Dashboard :</h2>
                            <p class="font-semibold text-sm lg:text-2xl text-slate-500 w-28 lg:w-full">{{ Auth::user()->name }}</p>
                        </div>

                        <div class="md:px-3 my-auto ml-auto">
                            <div class="flex w-14 h-14 sm:w-30 sm:h-20 lg:w-28 lg:h-28 text-center rounded-xl bg-gradient-to-tl from-primary to-second">
                                <i class="text-7xl text-white m-auto uil uil-user-circle"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-row w-full sm:flex-auto sm:w-5/12 rounded-2xl p-2">
                    <div  class="bg-gradient-to-r from-primary to-sky-300  h-full rounded-2xl bg-center bg-cover b">
                        <div class="flex flex-row h-full p-6">
                            <div class="flex-none my-auto">
                                <h2 class="text-slate-100 text-2xl font-semibold">Total Mahasiswa</h2>
                                <p class="px-2 font-semibold text-slate-200 text-3xl">{{$totalStudent->count()}}</p>
                            </div>

                            <div class="md:px-3 my-auto ml-auto">
                                <div class="flex w-14 h-14 sm:w-30 sm:h-20 lg:w-28 lg:h-28 text-center rounded-xl bg-gradient-to-tl from-primary to-second">
                                    <i class="text-7xl text-white m-auto uil uil-users-alt"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- EndCard row 2-->

            <div class="p-2">
                <div style="overflow-x:auto;" class=" rounded-lg">
                    <table class="min-w-full text-center">
                        <thead class="bg-primary">
                            <tr>

                                <th scope="col"
                                    class="py-4 px-5 w-8 text-xs font-bold tracking-wider text-white uppercase ">
                                    No
                                </th>
                                <th scope="col"
                                    class="py-3 px-6 text-xs font-bold tracking-wider text-white uppercase ">
                                    Nama
                                </th>
                                <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-white uppercase ">
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
                            </tr>
                        </thead>

                        <tbody class=" bg-white divide-y divide-gray-200 ">
                            @foreach($student as $s)
                            <tr class="">

                                <td class="py-4 w-8 text-sm font-medium text-black whitespace-nowrap">
                                    {{$s->id}}
                                </td>
                                <td class="py-4 px-6 text-sm font-medium text-black whitespace-nowrap">
                                    {{$s->student_name}}
                                </td>
                                <td class="overflow-hidden py-4 px-6 text-sm font-medium text-black whitespace-nowrap ">
                                    {{$s->nim}}
                                </td>
                                <td class="py-4 px-6 text-sm font-medium text-black whitespace-nowrap">
                                    {{$s->gender}}
                                </td>
                                <td class="py-4 px-6 text-sm font-medium text-black whitespace-nowrap">
                                    {{$s->nilai}}
                                </td>
                                <td class="py-4 px-6 text-sm font-medium text-black whitespace-nowrap">
                                    {{$s->kelas}}
                                </td>

                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </main>
    </div>
</x-app-layout>
