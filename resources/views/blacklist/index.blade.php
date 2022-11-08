<x-app-layout>
    @php
        $count = 0;
    @endphp
    <div class="mx-2.5">
        <div class="flex align-center justify-center">

            <h1 class="mb-4 mt-4 text-4xl text-center font-extrabold tracking-tight leading-none text-black-900 md:text-5xl lg:text-6xl">Blacklist</h1>
            <img style="width: 3rem; margin: 0px 15px;" src="{{asset('../images/skull-icon.svg')}}" alt="">
        </div>
        <div class="min-w-screen  bg-gray-100 flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
            <div class="lg:w-5/6">
               
                <div class="bg-white shadow-md rounded my-6">
                    
                    <table class="min-w-max w-full table-auto">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-center">Nombre - Apellido - Dni</th>
                                <th class="py-3 px-6 text-center">Motivo</th>
                                <th class="py-3 px-6 text-center">Programa</th>
                                <th class="py-3 px-6 text-center">Severidad</th>

                                <th class="py-3 px-6 text-right">Acciones</th>
                            </tr>
                        </thead>
                    
                        @foreach ($blacklist as $black)

                        @if ($count % 2 == 0)
                            <tbody class="text-gray-800 text-sm font-light bg-white">
                            @else
                            <tbody class="text-gray-800 text-sm font-light bg-gray-100">
                        @endif
                        @php
                            $count++;
                        @endphp
                        <tr class="border-b border-gray-200 hover:bg-gray-200">
                            
                            <td class="py-3 px-6 text-left whitespace-nowrap text-center">{{ $black->userName }} - {{ $black->userSurname }} - {{ $black->userDni }}</td>
                            <td class="py-3 px-6 text-left whitespace-nowrap text-center">{{ $black->motive }}</td>
                            <td class="py-3 px-6 text-left whitespace-nowrap text-center">{{ $black->programName }}</td>
                            <td class="py-3 px-6 text-left whitespace-nowrap text-center"> 
                               @if ($black->severity == 'Baja')
                               <span class="bg-indigo-100 text-indigo-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-indigo-200 dark:text-indigo-900">{{$black->severity}}</span>
                               @elseif($black->severity == 'Intermedia')
                               <span class="bg-yellow-100 text-yellow-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-200 dark:text-yellow-900">{{$black->severity}}</span>
                               @else 
                                <span class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{$black->severity}}</span>
                               @endif
                                 
                            </td>
                            <td class="flex justify-items-end items-baseline py-3 px-6 whitespace-nowrap text-center">
                                
                                    <button onclick="blacklist({{$black->userId}} , {{$black->programId}})" data-modal-toggle="authentication-modal" type="button" class="btnBlacklist text-xs  text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80 font-medium rounded-lg text-sm px-2.5 py-2 text-center mb-2">
                                        Cambiar severidad
                                    </button>
                               
                            </td>
                        </tr>
                        @endforeach
                    
                    
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('blacklist.form')

    <script>
        
        function blacklist(id , program){
            let input = document.getElementById('userIdBlacklist'),
                input2 = document.getElementById('programIdBlacklist')

            input.value = id
            input2.value = program
            
        }


    </script>

</x-app-layout>