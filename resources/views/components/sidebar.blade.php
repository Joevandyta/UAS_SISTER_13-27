
<!-- Component Start -->
<div class="flex flex-col items-center h-full overflow-hidden text-gray-400 bg-white     rounded">
    <!-- Logo -->
    <div class=" pt-4 shrink-0 flex items-center">
        <a href="{{ route('dashboard') }}">
            <x-application-logo class="block h-10 w-auto fill-current text-gray-600 py-2" />
        </a>
    </div>
    <div class="w-full px-2">
        <div class="flex flex-col items-center w-full mt-3 border-t border-primary">
            <x-nav-link class="flex items-center w-full h-12 px-3 mt-2 rounded " :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                <svg class="w-6 h-6 stroke-current mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                {{ __('Dashboard') }}
            </x-nav-link>
            <x-nav-link class="flex items-center w-full h-12 px-3 mt-2 rounded " :href="route('data')" :active="request()->routeIs('data')">
                <svg class="w-6 h-6 stroke-current mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2" />
                </svg>
                {{ __('Data') }}
            </x-nav-link>

        </div>
        <div class="flex flex-col items-center w-full mt-2 border-t border-gray-700">

            <x-nav-link class="flex items-center w-full h-12 px-3 mt-2 rounded " :href="route('about')" :active="request()->routeIs('about')">
                <i class="text-2xl uil uil-question-circle mr-2"></i>
                {{ __('About') }}
            </x-nav-link>
        </div>
    </div>
    <div class="flex items-center justify-center w-full h-16 mt-auto bg-primary ">
        <div class="w-full  border-white">
            <h4 class="font-bold font-xl px-10 text-white"> &#169; Copyright 2022 | UAS SISTER</h4>
        </div>
    </div>
</div>
<!-- Component End  -->
