<x-app-layout>


    @if (Auth::user()->role_id == 1)
        <style>
            #img {
                width: 750px;
                height: 150px;
                object-fit: cover;
                border-radius: 10px 10px 0px 0px;
            }

            #container {
                display: flex;
                justify-content: space-evenly;
            }

            #card {
                margin-top: 3rem;
                width: 25%;
                max-width: 400px;
                border-radius: 10px;
                box-shadow: -1px 0px 12px -3px rgba(0, 0, 0, 0.75);
                -webkit-box-shadow: -1px 0px 12px -3px rgba(0, 0, 0, 0.75);
                -moz-box-shadow: -1px 0px 12px -3px rgba(0, 0, 0, 0.75);
            }

            .gestion {
                padding: 15px 25px;
                background: #12AA8670;
                text-align: center;
                font-weight: 700;
                cursor: pointer;
                border-radius: 0px 0px 10px 10px;
                width: 100%;
            }

            .gestion:hover {
                background: #12AA86;
            }

            .contenedor {
                max-width: 450px;
                margin: auto;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                align-items: center;
                height: 100%;
            }

            @media (max-width: 1000px) {
                #container {
                    display: flex;
                    margin: auto;
                    align-items: center;
                    justify-content: space-evenly;
                    flex-direction: column;
                }
                #card {
                margin-top: 3rem;
                width: 65%;
                max-width: 400px;
                border-radius: 10px;
                box-shadow: -1px 0px 12px -3px rgba(0, 0, 0, 0.75);
                -webkit-box-shadow: -1px 0px 12px -3px rgba(0, 0, 0, 0.75);
                -moz-box-shadow: -1px 0px 12px -3px rgba(0, 0, 0, 0.75);
            }
            }


        </style>

        <div id="container" class="flex justify-center">

            <div id="card">
                <div class="contenedor">
                    <img id="img" src=" {{ asset('../images/people.jpg') }} " alt="">
                    <div class="p-6 flex flex-col justify-start">
                        <h5 class="text-gray-900 text-xl font-medium mb-2">Gestionar usuarios</h5>
                        <p class="text-gray-700 text-base aling-center">
                            Apartado creado para gestionar la información general de todos los usuarios del sistema.
                        </p>
                    </div>
                    <div class="gestion">
                        <a href=" {{ route('users.index') }} ">Gestionar</a>
                    </div>
                </div>
            </div>


            <div id="card" class="">

                <div class="contenedor" width="100px">
                    <img id="img" src=" {{ asset('../images/team.jpg') }} " alt="">
                    <div class="p-6 flex flex-col justify-start">
                        <h5 class="text-gray-900 text-xl font-medium mb-2">Gestionar programas</h5>
                        <p class="text-gray-700 text-base aling-center">
                            Apartado creado para gestionar los diferentes programas propuestos desde la organizacion.
                        </p>
                    </div>
                    <div class="gestion">

                        <a href=" {{ route('programs.index') }} ">Gestionar</a>
                    </div>
                </div>
            </div>


            <div id="card" class="">
                <div class="contenedor">
                    <img id="img" src=" {{ asset('../images/black.jpg') }} " alt="">
                    <div class="p-6 flex flex-col justify-start">
                        <h5 class="text-gray-900 text-xl font-medium mb-2">Blacklist</h5>
                        <p class="text-gray-700 text-base aling-center">
                            Gestione a los usuarios ingresados en el apartado de la blacklist.
                        </p>
                    </div>
                    <div class="gestion">
                        <a href=" {{ route('blacklist.index') }} ">Gestionar</a>
                    </div>
                </div>
            </div>
        </div>


        <div style="margin-top: 7rem; margin-bottom: 3.5rem; " class="w-1/2 p-2.5 mx-auto flex">
            <div class="w-1/2 mx-auto">
                <h1 class="text-center"><strong>{{ $chart->options['chart_title'] }}</strong></h1>
                {!! $chart->renderHtml() !!}
            </div>
            <div class="w-1/2 mx-auto">
                <h1 class="text-center"><strong>{{ $chart2->options['chart_title'] }}</strong></h1>
                {!! $chart2->renderHtml() !!}
            </div>
        </div>
    
        
    
        @section('scripts')
        {!! $chart->renderChartJsLibrary() !!}
        {!! $chart->renderJs() !!}
        {!! $chart2->renderJs() !!}
        @endsection



    @elseif(Auth::user()->role_id == 3)
        <style>

            @media (max-width: 600px){
                #container{
                    display: flex;
                    flex-direction: column;
                }
            }


        </style>
         <div id="container" class="mx-4 my-4 flex justify-center p-5 m-5">
            <div
                class="w-full max-w-6xl bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <h3 class="mt-2 mb-2 text-center text-2xl font-bold tracking-tight text-gray-900 dark:text-white p-5 m-5">
                    Sistema de Puntos: El sistema de puntos esta relacionado, con el programa, la cantidad horas de
                    volluntariado
                    y el nivel de responsabilidad llevado en el mismo</h3>
                <h5 class="mt-2 mb-2 text-center text-lg font-bold tracking-tight text-gray-900 dark:text-white p-5 m-5">
                Se tendran en cuenta, asistencia, baja en tiempo y forma, horario de ingreso pactado, si la tarea asignada fue cumplida, etc.</h5>
    

            </div>
        </div>
        <div id="container" class="mx-4 my-4 flex justify-center">
           
            <div
                class="w-full max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <h3 class="mt-2 mb-2 text-center text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    Puntaje Total</h3>
                <div class="flex flex-col items-center pb-10">
                    <h1 class="mb-2 text-9xl font-bold text-gray-900 dark:text-white">{{ Auth::user()->points }}</h1>
                    <div class="flex mt-4 space-x-3 md:mt-6">
                        <a href="{{ route('programs.all') }}"
                            class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Sumar
                            mas puntos</a>
                    </div>
                </div>
            </div>
            <div
                class="w-full max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <h3 class="mt-2 mb-2 text-center text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    Puntaje</h3>
                <div class="flex flex-col items-center pb-10">
                    <h1 class="mb-2 text-9xl font-bold text-gray-900 dark:text-white">{{ Auth::user()->points }}</h1>
                    <div class="flex mt-4 space-x-3 md:mt-6">
                        <a href="{{ route('programs.all') }}"
                            class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Sumar
                            mas puntos</a>
                    </div>
                </div>
            </div>
            <div
                class="w-full max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <h3 class="mt-2 mb-2 text-center text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    Programas</h3>
                <div class="flex flex-col items-center pb-10">
                    <h1 class="mb-2 text-9xl font-bold text-gray-900 dark:text-white">{{$count}}</h1>
                    <div class="flex mt-4 space-x-3 md:mt-6">
                        <a href="{{ route('programs.all') }}"
                            class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Sumar
                            mas puntos</a>
                    </div>
                </div>
            </div>
        </div>
        @php
            $count = 0;
        @endphp
        <div style="" class="overflow-x-auto relative w-1/2 mx-auto">
            <h2 class="mb-3 text-center text-3xl font-bold tracking-tight p-2.5 text-gray-900 dark:text-white">Participantes con mas puntos</h2>
            <table class="w-full text-sm text-left mx-28 mt-2.5 text-gray-500 dark:text-gray-400">
                <thead style="background: #2B2B2B;" class="text-xs  uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                  <tr >
                    <th style="font-size: 16px;" class="py-3 px-6 text-light">Nombre y apellido</th>
                    <th style="font-size: 16px;" class="py-3 px-6 text-light">Puntos</th>
                  </tr>
                </thead>
                @foreach ($usersWithPoints as $user)
                @if ($count % 2 == 0)
                <tbody style="background:#C6C6C6;" class="text-gray-800 text-sm font-light bg-white">
                @else
                <tbody style="background:#C6C6C690;"  class="text-gray-800 text-sm font-light bg-gray-100">
                @endif
                @php
                    $count++;
                @endphp
               
                        <tr>
                            <td style="font-weight: 700" class="py-3 px-6">{{$user->name}} {{$user->surname}}</td>    
                            <td style="font-weight: 700" class="py-3 px-6">{{$user->points}}</td>    
                        </tr>
                        
                        
                    </tbody>
                    @endforeach
              </table>
        </div>

    @else
    
    <style>
        #img {
            width: 750px;
            height: 150px;
            object-fit: cover;
            border-radius: 10px 10px 0px 0px;
        }

        #container {
            display: flex;
            justify-content: space-evenly;
        }

        #card {
            margin-top: 3rem;
            width: 25%;
            max-width: 400px;
            border-radius: 10px;
            box-shadow: -1px 0px 12px -3px rgba(0, 0, 0, 0.75);
            -webkit-box-shadow: -1px 0px 12px -3px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: -1px 0px 12px -3px rgba(0, 0, 0, 0.75);
        }

        .gestion {
            padding: 15px 25px;
            background: #12AA8670;
            text-align: center;
            font-weight: 700;
            cursor: pointer;
            border-radius: 0px 0px 10px 10px;
            width: 100%;
        }

        .gestion:hover {
            background: #12AA86;
        }

        .contenedor {
            max-width: 450px;
            margin: auto;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            height: 100%;
        }
    </style>

    <div id="container" class="flex">

        <div id="card">
            <div class="contenedor">
                <img id="img" src=" {{ asset('../images/people.jpg') }} " alt="">
                <div class="p-6 flex flex-col justify-start">
                    <h5 class="text-gray-900 text-xl font-medium mb-2">Gestionar usuarios</h5>
                    <p class="text-gray-700 text-base aling-center">
                        Apartado creado para gestionar la información general de todos los usuarios del sistema.
                    </p>
                </div>
                <div class="gestion">
                    <a href=" {{ route('users.index') }} ">Gestionar</a>
                </div>
            </div>
        </div>


        <div id="card" class="">

            <div class="contenedor" width="100px">
                <img id="img" src=" {{ asset('../images/team.jpg') }} " alt="">
                <div class="p-6 flex flex-col justify-start">
                    <h5 class="text-gray-900 text-xl font-medium mb-2">Gestionar programas</h5>
                    <p class="text-gray-700 text-base aling-center">
                        Apartado creado para gestionar los diferentes programas propuestos desde la organizacion.
                    </p>
                </div>
                <div class="gestion">

                    <a href=" {{ route('programs.index') }} ">Gestionar</a>
                </div>
            </div>
        </div>


        <div id="card" class="">
            <div class="contenedor">
                <img id="img" src=" {{ asset('../images/black.jpg') }} " alt="">
                <div class="p-6 flex flex-col justify-start">
                    <h5 class="text-gray-900 text-xl font-medium mb-2">Blacklist</h5>
                    <p class="text-gray-700 text-base aling-center">
                        Gestione a los usuarios ingresados en el apartado de la blacklist.
                    </p>
                </div>
                <div class="gestion">
                    <a href=" {{ route('blacklist.index') }} ">Gestionar</a>
                </div>
            </div>
        </div>
    </div>


    

    @endif



</x-app-layout>
