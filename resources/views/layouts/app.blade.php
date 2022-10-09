<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
        <!-- Styles -->
        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')
        <footer class="p-4 bg-white md:p-8 lg:p-10 dark:bg-gray-800">
            <div class="mx-auto max-w-screen-xl text-center">
                <a href="#" class="flex justify-center items-center text-2xl font-semibold text-gray-900 dark:text-white">
                    <img src=" {{asset('../images/logolistosya.png')}} " alt="listosya" width="50">
                    Fundacion Listos Ya    
                </a>
                <p class="my-6 text-gray-500 dark:text-gray-400">Gestion de Voluntarios</p>
                <ul class="flex flex-wrap justify-center items-center mb-6 text-gray-900 dark:text-white">
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6 ">La fundacion</a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6">Programas</a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6 ">Contacto</a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6">Registrarse</a>
                    </li>
                    
                </ul>
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2022 <a href="#" class="hover:underline">Listos Ya</a>. Derechos Reservados. Programacion Grupo Witrun</span>
            </div>
          </footer>
        @livewireScripts
    </body>
</html>
