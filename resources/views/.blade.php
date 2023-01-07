<x-app-layout>
    <x-slot name="title">
        Protofolio | Dashboard
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6  border-b border-gray-200">

                    <form action="https://formbold.com/s/FORM_ID" method="POST" class="text-black">
                        <div class="relative bg-primaryblue text-xl lg:text-xl font-bold px-3 py-4 mb-3 border-b-2
                                rounded-t-lg ">
                            Insert New Portofolio
                        </div>

                        <div class="mx-3 mt-3 flex flex-wrap text-black">
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label for="fName" class="mb-3 block text-primaryblue font-semibold ">
                                        Portofolio Name
                                    </label>
                                    <input type="text" name="fName" id="fName" placeholder="Portofolio" class="w-full rounded-md border-b-2 bg-white py-3 px-6 font-medium  outline-none focus:border-second focus:shadow-md" />
                                </div>
                            </div>
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label for="lName" class="mb-3 block text-primaryblue font-semibold ">
                                        Category
                                    </label>
                                    <input type="text" name="lName" id="lName" placeholder="Category" class="w-full rounded-md border-b-2 bg-white py-3 px-6 font-medium  outline-none focus:border-second focus:shadow-md" />
                                </div>
                            </div>
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label for="lName" class="mb-3 block text-primaryblue font-semibold ">
                                        Point
                                    </label>
                                    <input type="text" name="lName" id="lName" placeholder="Point" class="w-full rounded-md border-b-2 bg-white py-3 px-6 font-medium  outline-none focus:border-second focus:shadow-md" />
                                </div>
                            </div>
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label for="lName" class="mb-3 block text-primaryblue font-semibold ">
                                        Organizer
                                    </label>
                                    <input type="text" name="lName" id="lName" placeholder="Last Name" class="w-full rounded-md border-b-2 bg-white py-3 px-6 font-medium  outline-none focus:border-second focus:shadow-md" />
                                </div>
                            </div>
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label for="lName" class="mb-3 block text-primaryblue font-semibold ">
                                        Certificate
                                    </label>
                                    <input type="text" name="lName" id="lName" placeholder="Certificate" class="w-full rounded-md border-b-2 bg-white py-3 px-6 font-medium  outline-none focus:border-second focus:shadow-md" />
                                </div>
                            </div>
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label for="date" class="mb-3 block text-primaryblue font-semibold ">
                                        Date
                                    </label>
                                    <input type="date" name="date" id="date" class="w-full rounded-md border  bg-white py-3 px-6 font-medium  outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-center mb-4">

                            <button class="hover:shadow-form rounded-md bg-second hover:bg-primaryblue py-3 px-8 text-center text-base font-semibold text-white outline-none">
                                Submit
                            </button>
                        </div>
                    </form>




                </div>
            </div>
        </div>
    </div>
</x-app-layout>