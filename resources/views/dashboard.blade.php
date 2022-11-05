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
    @elseif(Auth::user()->role_id == 3)
        <style>

            @media (max-width: 600px){
                #container{
                    display: flex;
                    flex-direction: column;
                }
            }


        </style>



        <div id="container" class="mx-4 my-4 flex justify-center">
            <div
                class="w-full max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <h3 class="mt-2 mb-2 text-center text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    Puntaje Total</h3>
                <div class="flex flex-col items-center pb-10">
                    <h1 class="mb-2 text-9xl font-bold text-gray-900 dark:text-white">{{ Auth::user()->points }}</h1>
                    <div class="flex mt-4 space-x-3 md:mt-6">
                        <a href="{{ route('programs.index') }}"
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
                        <a href="{{ route('programs.index') }}"
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
                        <a href="{{ route('programs.index') }}"
                            class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Sumar
                            mas puntos</a>
                    </div>
                </div>
            </div>
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




<button type="button" id="btnSearch" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Enviar</button>



@php

    $url = "https://www.facebook.com/";


    $apikey = "ab3a23801c8021ca6390d925740a937acd48491ccec4";
    $width  = 640;
    //--- Make the call -------------------//
    $fetchUrl = "https://api.thumbnail.ws/api/".$apikey ."/thumbnail/get?url=".urlencode($url)."&width=".$width;
    $jpeg = file_get_contents($fetchUrl);
    //--- Do something with the image -----//
    /* file_put_contents("screenshot.jpg", $jpeg); */
    header("Content-type: image/jpeg");

    $jpeg;
@endphp

    <img src="{{$fetchUrl}}" alt="">
<script>
    let btnSearch = document.getElementById('btnSearch'),
        responseInsert = document.getElementById('response')

    btnSearch.addEventListener('click' , e => {
       let url = document.getElementById('url').value,
            apiKey = 'ab3a23801c8021ca6390d925740a937acd48491ccec4'
        console.log("https://api.thumbnail.ws/api/"+apiKey+"/thumbnail/get?url="+url+"&width=500")
      let date = fetch("https://api.thumbnail.ws/api/"+apiKey+"/thumbnail/get?url="+url+"&width=500")
            .then((response) => responseInsert.innerHTML = `<iframe src="${"https://api.thumbnail.ws/api/"+apiKey+"/thumbnail/get?url="+url+"&width=500"}" frameborder="0">
        
    </iframe>`)
            


    })



</script>


</x-app-layout>
