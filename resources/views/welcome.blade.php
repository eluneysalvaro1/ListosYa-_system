<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Listos Ya</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity))
            }
        }
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
        <!-- Styles -->
        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    @livewireStyles
</head>

<body class="antialiased">

   <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Panel del Voluntario</a>
            @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Ingresar</a>
    
            @if (Route::has('register'))
            <a href="{{ route('register') }}"
                class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Registrarse</a>
            @endif
            @endauth
        </div>
        @endif
       
        

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <ul class="grid gap-6 w-full md:grid-cols-2">
                <li>
                    <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                        <img src="{{ asset('/images/billetera_vertical.png') }}" alt="" style="width:128px;">
                    </div>
                </li>
                <li>
                    <div class="max-w-lg text-3xl font-semibold leading-relaxed text-gray-900 dark:text-white">
                        <h1>
                            La Billetera del Voluntariado
                        </h1>
                        <p> Sistema de Gestion de Voluntarios de la Fundacion Listos Ya!</p>
                        </div>
                    <div class="item-center">
                        <div class="flex mt-10">
                            <a href="https://www.facebook.com/listosya.org"
                                class="text-green-500 hover:text-green-900 dark:hover:text-white">
                                <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="sr-only">Facebook page</span>
                            </a>
                            <a href="https://www.instagram.com/listosyaorg/"
                                class="text-green-500 hover:text-green-900 dark:hover:text-white">
                                <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="sr-only">Instagram page</span>
                            </a>
                            <a href="https://twitter.com/ListosyaO" class="text-green-500 hover:text-green-900 dark:hover:text-white">
                                <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path
                                        d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                                </svg>
                                <span class="sr-only">Twitter page</span>
                            </a>
                            <a href="https://ar.linkedin.com/company/listosya"
                                class="text-green-500 hover:text-green-900 dark:hover:text-white">
                                <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 50 50" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M20.9716667,33.5527338 L25.001,33.5527338 L25.001,27.1328007 C25.001,25.439485 25.3213333,23.7988354 27.4206667,23.7988354 C29.491,23.7988354 29.517,25.7351486 29.517,27.2404662 L29.517,33.5527338 L33.5506667,33.5527338 L33.5506667,26.4341413 C33.5506667,22.9381777 32.796,20.2505391 28.711,20.2505391 C26.7483333,20.2505391 25.432,21.3265278 24.8943333,22.3471839 L24.839,22.3471839 L24.839,20.5725357 L20.9716667,20.5725357 L20.9716667,33.5527338 Z M16.423,14.1202696 C15.1273333,14.1202696 14.0823333,15.1682587 14.0823333,16.4595785 C14.0823333,17.7508984 15.1273333,18.7992208 16.423,18.7992208 C17.7133333,18.7992208 18.761,17.7508984 18.761,16.4595785 C18.761,15.1682587 17.7133333,14.1202696 16.423,14.1202696 L16.423,14.1202696 Z M14.4026667,33.5527338 L18.4406667,33.5527338 L18.4406667,20.5725357 L14.4026667,20.5725357 L14.4026667,33.5527338 Z M9.76633333,40 C8.79033333,40 8,39.2090082 8,38.2336851 L8,9.76631493 C8,8.79065843 8.79033333,8 9.76633333,8 L38.234,8 C39.2093333,8 40,8.79065843 40,9.76631493 L40,38.2336851 C40,39.2090082 39.2093333,40 38.234,40 L9.76633333,40 Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="sr-only">Linkedin</span>
                            </a>
                            <a href="https://www.youtube.com/channel/UCbMwVGMLIPO65_ITNe3Y5Sg"
                                class="text-green-500 hover:text-green-900 dark:hover:text-white">
                                <svg class="w-16 h-16" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="sr-only">Youtube</span>
                            </a>
                    
                        </div>
                        
                    </div>
                </li>
          
            </ul>
           
         
            {{-- muestra programas --}}
            <div class="mt-8 bg-white dark:bg-green-800 overflow-hidden shadow sm:rounded-lg">
                <h3 class="text-xl  m-5 text-center font-bold tracking-tight text-gray-900 dark:text-white">
                    Proximos Programas
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-2">
                   
                    @php
                    $ruta = '/images/programs/';
                    $count=0;
                    @endphp
                    @foreach ($programs as $program)
                        @if ($count<4)
                            @if ($program->state!=="finish")
                                
                             
                            <a href="#"
                            class=" m-5 flex flex-col items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                            <img class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
                                src="{{ asset($ruta . $program->program_image) }}" alt="">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$program->name}}</h5>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lugar del Programa: {{$program->place_event}}
                                </p>
                            </div>
                            </a>
                            @endif
                        @endif
                        @php
                            $count
                        @endphp
                    @endforeach
                </div>
              
            </div>
            {{-- fin programas --}}

            {{-- landing descripcion de progamas --}}
            <section class="bg-green-700 dark:bg-green-900">
                <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6 ">
                    <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
                        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-white dark:text-white">Nuestros Programas</h2>
                        <p class="font-light text-white lg:mb-16 sm:text-xl dark:text-white">Trabajamos junto a nuestros voluntarios, empresas y ONG, en la construcción de una sociedad mas justa, cuidando y capacitando a las personas que donan su tiempo y espíritu solidario.</p>
                    </div> 
                    <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-2">
                        <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" src="{{ asset('/images/landing/formarte.png') }}" alt="Imagen formarte">
                            </a>
                            <div class="p-5">
                                <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    <a href="#">Formarte</a>
                                </h3>
                                
                                <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Programa del área de educación y cultura que cuyo fin es apadrinar escuelas en zonas de alta vulnerabilidad de Argentina, para la creación y dotación de un aula dedicada a las artes y la cultura. </p>
                                
                            </div>
                        </div> 
                        <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" src="{{ asset('/images/landing/radio.png') }}" alt="Jese Avatar">
                            </a>
                            <div class="p-5">
                                <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    <a href="#">Radio</a>
                                </h3>
                                <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Bloque de entrevistas online a los diferentes actores y Organizaciones de la sociedad civil, que nos inspiran a continuar construyendo voluntariado responsable y comprometido..</p>
                            </div>
                        </div> 
                        <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" src="https://scontent.fnqn2-1.fna.fbcdn.net/v/t1.6435-9/171856499_754533065207855_4116744289037402580_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=a26aad&_nc_eui2=AeHNdHihqtCiXZbix39w8psPKUJWzANHBu4pQlbMA0cG7iP9FN9dxZkmHSqLABnxiKQ&_nc_ohc=lRXwd9yi2JwAX9Gf9Xo&tn=50i0BICR_gdUsqtc&_nc_ht=scontent.fnqn2-1.fna&oh=00_AfCdnd3_X8RfwgjEw4DVQlAmQpRCgb9I-lQGpt00QZ8YTg&oe=638B5FC1" alt="imagen te llevo en la sangre">
                            </a>
                            <div class="p-5">
                                <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    <a href="#">Te llevo en la sangre</a>
                                </h3>
                                <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Como parte de nuestro programa de salud, llevamos adelante la campaña de captación de Donantes Voluntarios de Sangre. Es necesario entender el cambio de Paradigma del Donante de Sangre por Reposición al Donante de Sangre Voluntario y Reiterativo.</p>
                                
                            </div>
                        </div> 
                        <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" src="{{ asset('/images/landing/bicicleteada.png') }}" alt="Bicicleteada solidariar">
                            </a>
                            <div class="p-5">
                                <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    <a href="#">Bicicleteada solidaria</a>
                                </h3>
                                
                                <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Juanto a la organizacion Eleven Bike realimos bicicleteadas solidarias, pudiendo disfrutas la ciudad de otra manera, pero tambien colarobando con quien necesite.</p>
                                
                            </div>
                        </div> 
                        <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" src="{{ asset('/images/landing/capacitaciones.png') }}" alt="imagen capacitaciones">
                            </a>
                            <div class="p-5">
                                <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    <a href="#">Capacitaciones</a>
                                </h3>
                                <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Realizamos capacitaciones de distintas temáticas, predeterminadas y diseñadas en función de las necesidades, en el ámbito de las Organizaciones civiles y privado, para el fortalecimiento de un Voluntariado responsable, organizado y comprometido.</p>
                                
                            </div>
                        </div>
                        <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" src="https://listosya.org/images/2022/lolla2022seleccionados.png" alt="imagen musica y rock">
                            </a>
                            <div class="p-5">
                                <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    <a href="#">Musica y Reciclaje</a>
                                </h3>
                                <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Colaboramos con el medio ambiente, intentando que los recitales sean sustentables, que la generacion de residuos sea clasificado en el momento y concientizando la sociedad en la importancia de esto.</p>
                                
                            </div>
                        </div> 
                    </div>  
                </div>
              </section>
              {{-- SECCION DE NOTICIAS --}}
              
              <div class="mt-8 bg-white dark:bg-green-800 overflow-hidden shadow sm:rounded-lg">
                
                <h3 class="text-xl  m-5 text-center font-bold tracking-tight text-gray-900 dark:text-white">
                    Ultimas Noticias
                </h3>
               
                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center ">
                            @livewire('news')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
        
</body>
@include('footer')

   
@livewireScripts
<script src="../path/to/flowbite/dist/flowbite.js"></script>
</html>
