<x-app-layout>
    <x-slot name="title">
        Statistic | About
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('About') }}
        </h2>
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container ">

                        <div class="flex flex-wrap">
                            <div class=" w-full px-10 mb-12 text-primary font-medium md:w-1/2">
                                <h2 class="font-bold text-2xl mb-5">Web Statistic</h2>
                                <h3 class="font-bold text-xl mb-2">Contact us</h3>
        
                                <a href="#home" class="flex items-center py-1 px-2 hover:text-second">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="32" height="32"
                                        viewBox="0 0 32 32" style=" fill:#10577a">
                                        <path
                                            d="M 6 7.03125 C 5.691406 7.03125 5.402344 7.089844 5.125 7.175781 L 8.039063 9.03125 L 23.960938 9.03125 L 26.875 7.175781 C 26.597656 7.089844 26.308594 7.03125 26 7.03125 Z M 4.113281 7.71875 C 3.4375 8.269531 3 9.097656 3 10.03125 L 3 23.03125 C 3 24.683594 4.347656 26.03125 6 26.03125 L 26 26.03125 C 27.652344 26.03125 29 24.683594 29 23.03125 L 29 10.03125 C 29 9.097656 28.5625 8.269531 27.886719 7.71875 L 16 15.28125 Z M 6 12.445313 L 16 18.8125 L 26 12.445313 L 26 24.03125 L 6 24.03125 Z">
                                        </path>
                                    </svg>
                                    <span class="font-bold text-primary-500 text-lg my-3  px-3">joe@undiksha.ac.id</span>
                                    <!--<img src="dist/img/undiksha.png" alt="logo Undiksha">-->
                                </a>
                                <a href="#home" class="flex items-center py-1 px-2 hover:text-second">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 512 512"
                                        style=" fill: #10577a">
                                        <title>ionicons-v5_logos</title>
                                        <path
                                            d="M349.33,69.33a93.62,93.62,0,0,1,93.34,93.34V349.33a93.62,93.62,0,0,1-93.34,93.34H162.67a93.62,93.62,0,0,1-93.34-93.34V162.67a93.62,93.62,0,0,1,93.34-93.34H349.33m0-37.33H162.67C90.8,32,32,90.8,32,162.67V349.33C32,421.2,90.8,480,162.67,480H349.33C421.2,480,480,421.2,480,349.33V162.67C480,90.8,421.2,32,349.33,32Z" />
                                        <path d="M377.33,162.67a28,28,0,1,1,28-28A27.94,27.94,0,0,1,377.33,162.67Z" />
                                        <path
                                            d="M256,181.33A74.67,74.67,0,1,1,181.33,256,74.75,74.75,0,0,1,256,181.33M256,144A112,112,0,1,0,368,256,112,112,0,0,0,256,144Z" />
                                    </svg>
                                    <span class="font-bold text-primary-500 text-lg my-3 px-3 ">@joevaandyta</span>
                                    <!--<img src="dist/img/undiksha.png" alt="logo Undiksha">-->
                                </a>
                                <h4 class="mt-"></h4>
                            </div>
        
                            <div class="w-full px-10  md:px-2 md:pt-16 mb-12 md:w-1/2">
                                <h3 class="font-semibold text-xl text-primary mb-5">Other</h3>
                                <ul class="text-slate-300 text-bold">
                                    <li>
                                        <a href="#" class="inline-block text-primary hover:text-second mb-3">Lorem, ipsum.</a>
                                    </li>
                                    <li>
                                        <a href="#" class="inline-block text-primary hover:text-second mb-3">Lorem, ipsum.</a>
                                    </li>
                                    <li>
                                        <a href="#" class="inline-block text-primary hover:text-second mb-3">Lorem, ipsum.</a>
                                    </li>
                                    <li>
                                        <a href="#" class="inline-block text-primary hover:text-second mb-3">Lorem, ipsum.</a>
                                    </li>
                                </ul>
                            </div>
        
        
                        </div>
                        <div class="w-full pt-10 border-t  border-white">
                            <h4 class="font-bold font-xl px-10 text-primary"> &#169; Copyright 2022 | Joe Aqilla Vandyta</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
