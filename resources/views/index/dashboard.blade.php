<x-layout>
    <div class="text-center px-8 py-12">
        <h1>Welcome to SoP</h1>
        <p>This is the dashboard page.</p>
        <p>Current date and time: {{ now() }}</p>
        <p>Current user: {{ auth()->user()->name ?? 'Guest' }}</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 justify-items-center">
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src={{ asset('img/genshin.jpg') }} alt="" />
            </a>
            <div class="p-5">
                <a href={{ route('game',['id' => '1']) }}>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Genshin Impact</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Smash or Pass every character on this list.</p>
                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src={{ asset('img/hsr.jpg') }} alt="" />
            </a>
            <div class="p-5">
                <a href={{ route('game',['id' => '2']) }}>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Honkai Star Rail</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Smash or Pass every character on this list.</p>
                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src={{ asset('img/zzz.webp') }} alt="" />
            </a>
            <div class="p-5">
                <a href={{ route('game',['id' => '3']) }}>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Zenless Zone Zero</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Smash or Pass every character on this list.</p>
                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src={{ asset('img/wuthering_waves.jpg') }} alt="" />
            </a>
            <div class="p-5">
                <a href={{ route('game',['id' => '4']) }}>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Wuthering Waves</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Smash or Pass every character on this list.</p>
                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    

</x-layout>
