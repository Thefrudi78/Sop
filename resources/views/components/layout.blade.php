<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SoP</title>
  
    @vite('resources/css/app.css')
    @vite('resources/css/fade-in.css')
    @vite('resources/js/app.js')
    <script>
        function fadeOutAndRemove(element) {
            if (!element) return;
            element.classList.remove('animate-fade-in');
            element.classList.add('animate-fade-out');
            setTimeout(function () {
                element.remove();
            }, 500); // match fade-out duration
        }
        document.addEventListener('DOMContentLoaded', function () {
            setTimeout(function () {
                fadeOutAndRemove(document.getElementById('notif-success'));
                fadeOutAndRemove(document.getElementById('notif-error'));
            }, 5000);
            var closeBtns = document.querySelectorAll('#notif-success .btn-close, #notif-error .btn-close, #notif-success button[aria-label="Close"], #notif-error button[aria-label="Close"]');
            closeBtns.forEach(function(btn) {
                btn.addEventListener('click', function(e) {
                    var notif = btn.closest('#notif-success, #notif-error');
                    fadeOutAndRemove(notif);
                });
            });
        });
    </script>

</head>
<body class="min-h-screen flex flex-col">
    <header>
        <nav class="bg-white border-gray-200 dark:bg-gray-800">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="{{ route('dashboard') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Smash or Pass</span>
            </a>
            <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-800 dark:border-gray-700">
                <li>
                <a href={{ route('dashboard') }}
                class="block py-2 px-3 rounded-sm md:bg-transparent md:p-0 {{ request()->routeIs('dashboard') ? 'text-white bg-blue-700 md:text-blue-700 md:dark:text-blue-500' : 'text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent' }}"
                aria-current="page">
                    Home
                </a>
                </li>
                <li>
                <a href={{ route('game',['id' => '1']) }} 
                class="block py-2 px-3 rounded-sm md:bg-transparent md:p-0 {{ Str::contains(request()->path(), 'game') && request()->route('id') == 1 ? 'text-white bg-blue-700 md:text-blue-700 md:dark:text-blue-500' : 'text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent' }}">
                    Genshin Impact
                </a>
                </li>
                <li>
                <a href={{ route('game',['id' => '2']) }} 
                class="block py-2 px-3 rounded-sm md:bg-transparent md:p-0 {{ Str::contains(request()->path(), 'game') && request()->route('id') == 2 ? 'text-white bg-blue-700 md:text-blue-700 md:dark:text-blue-500' : 'text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent' }}">
                    Honkai Star Rail
                </a>
                </li>
                <li>
                <a href={{ route('game',['id' => '3']) }} 
                class="block py-2 px-3 rounded-sm md:bg-transparent md:p-0 {{ Str::contains(request()->path(), 'game') && request()->route('id') == 3 ? 'text-white bg-blue-700 md:text-blue-700 md:dark:text-blue-500' : 'text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent' }}">
                    ZZZ
                </a>
                </li>
                <li>
                <a href={{ route('game',['id' => '4']) }} 
                class="block py-2 px-3 rounded-sm md:bg-transparent md:p-0 {{ Str::contains(request()->path(), 'game') && request()->route('id') == 4 ? 'text-white bg-blue-700 md:text-blue-700 md:dark:text-blue-500' : 'text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent' }}">
                    WuWa
                </a>
                </li>
                <li>
                <a href="#"
                class="block py-2 px-3 rounded-sm md:bg-transparent md:p-0 {{ request()->routeIs('statistics') ? 'text-white bg-blue-700 md:text-blue-700 md:dark:text-blue-500' : 'text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent' }}">
                    Statistics
                </a>
                </li>
            </ul>
            </div>
        </div>
        </nav>
    </header> 
    @if(session('success'))
    <div id="notif-success" class="fixed top-4 right-4 z-50">
        <div class="flex items-center bg-blue-600 text-white rounded shadow-lg px-4 py-3 min-w-[300px] animate-fade-in">
            <div class="flex-1 flex items-center">
                <svg class="w-5 h-5 mr-2 text-white" fill="currentColor" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM7 11.414l5.207-5.207-1.414-1.414L7 8.586 5.207 6.793 3.793 8.207 7 11.414z"/></svg>
                <span>{{ session('success') }}</span>
            </div>
            <button type="button" class="ml-4 text-white hover:text-gray-200 focus:outline-none" onclick="this.closest('#notif-success').remove()" aria-label="Close">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>
    </div>
    @endif
    @if(session('error'))
    <div id="notif-error" class="fixed top-4 right-4 z-50">
        <div class="flex items-center bg-red-600 text-white rounded shadow-lg px-4 py-3 min-w-[300px] animate-fade-in">
            <div class="flex-1 flex items-center">
                <svg class="w-5 h-5 mr-2 text-white" fill="currentColor" viewBox="0 0 16 16"><path d="M8.982 1.566a1.13 1.13 0 0 0-1.964 0L.165 13.233c-.457.778.091 1.767.982 1.767h13.707c.89 0 1.438-.99.982-1.767L8.982 1.566zm-.982 4.434a.905.905 0 1 1 1.81 0l-.082 3.002a.823.823 0 0 1-1.646 0L8 6zm.002 5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/></svg>
                <span>{{ session('error') }}</span>
            </div>
            <button type="button" class="ml-4 text-white hover:text-gray-200 focus:outline-none" onclick="this.closest('#notif-error').remove()" aria-label="Close">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>
    </div>
    @endif   
    <main class='bg-white border-gray-200 dark:bg-gray-900 pb-8 flex-1'>
        <div class="container">
            {{ $slot }}
        </div>
    </main>
    <footer class="bg-gray-800 text-white py-4 mt-auto">
        <div class="container text-center">
            <p>&copy; {{ date('Y') }} Smash or Pass. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>