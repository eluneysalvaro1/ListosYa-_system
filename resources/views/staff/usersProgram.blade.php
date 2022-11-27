<x-app-layout>
    

<div style="margin: 3rem;" class="overflow-x-auto relative shadow-md sm:rounded-lg">
    
    <div class="w-full text-sm text-left text-gray-500 dark:text-gray-40">
        <div class="flex justify-center text-center">
            
            <h1 style="font-size: 40px; font-weight: 700;padding: 25px;margin-bottom:15px;" class="text-center">Programa: {{$program->name}}</h1>
            <h1 style="font-size: 40px; font-weight: 700;padding: 25px;margin-bottom:15px;" class="text-center">Estado: 
                @if ($program->state == 'finish')
                    <strong style="color:red;">FINALIZADO</strong>
                @elseif($program->state == 'open_to_postulated')
                    <strong style="color:green;">ABIERTO</strong>
                @else
                    <strong style="color:blue;">CERRADO</strong>
                @endif
                
            </h1>
        </div>
            @if ($return !== null )
         
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th class="py-3 px-6 text-center">Datos participante</th>
                            @if ($duo)
                                <th class="py-3 px-6 text-center">Datos duo</th>
                            @endif
                            @if ($return[0]->turn !== null)
                                <th class="py-3 px-6 text-center">Turno</th>
                            @endif
                            <th class="py-3 px-6 text-center">Estado de postulación</th>
                            <th class="py-3 px-6 text-center">Asistencia</th>
                            @if ($return[0]->state !== 'finish')
                                <th class="py-3 px-6 text-right">Acciones</th>
                            @endif
                        </tr>
                    </thead>
                    @php
                        $count = 0;
                    @endphp
                    @forelse ($return as $user)
                    @if (!$user->qualified || ($return[0]->state == 'finish' && $user->qualified ))
                        
                    
                        @if ($count % 2 == 0)
                            <tbody class="text-gray-800 text-sm font-light bg-white">
                        @else
                            <tbody class="text-gray-800 text-sm font-light bg-gray-100">
                        @endif
                        @php
                            $count++;
                        @endphp
                        
                        <tr class="border-b border-gray-200 hover:bg-gray-200">
                            <td class="py-3 px-6 text-left whitespace-nowrap text-center">{{$user->userName}} {{$user->userSurname}} - {{ $user->userDni}}
                                
                                    @if ($user->blacklist)
                                    <span class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">
                                        Blacklist - {{$user->severity}}
                                    </span>
                                    @endif
                               
                            </td>
                           
                            @if ($duo)
                                <td class="py-3 px-6 text-left whitespace-nowrap text-center">{{$user->duoName}} {{$user->duoSurname}} - {{$user->duoDni}}</td>   
                            @endif
                            @if ($user->turn !== null)
                            <td class="py-3 px-6 text-left whitespace-nowrap text-center">
                                @if($user->turn == 1)
                                    09:00 - 10:00
                                @elseif ($user->turn == 2)
                                    10:00 - 11:00
                                @elseif($user->turn == 3)
                                    11:00 - 12:00                                
                                @elseif($user->turn == 4)
                                    12:00 - 13:00
                                @elseif($user->turn == 5)
                                    13:00 - 14:00
                                @endif
                              
                                
                            </td>
                            @endif
                            <td class="py-3 px-6 text-left whitespace-nowrap text-center">
                                @if ($user->postulation_state == 'Espera')
                                <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">
                                    Espera
                                </span>
                                @elseif($user->postulation_state == 'Aceptada')
                                <span class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">
                                    Aceptado</span>
                                @else
                                <span class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">
                                    Rechazado
                                </span>
                                @endif
                                
                            </td>
                            <td class="py-3 px-6 text-left whitespace-nowrap text-center">
                                
                                @if($user->asistance == 0 && $user->asistance !== null)
                                    <span class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">
                                        No asistió
                                    </span>
                                @elseif ($user->asistance == null)
                                    <span class="bg-yellow-100 text-yellow-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-200 dark:text-yellow-900">
                                        No se ha marcado asistencia        
                                    </span>
                                @elseif($user->asistance == 1)
                                    <span class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">
                                        Asistió
                                    </span>
        
                                @endif
                            </td>
                            @if ($return[0]->state !== 'finish')
                            <td class="flex justify-end mt-2.5">
                                
                                @if ($user->postulation_state !== 'Espera' && $user->postulation_state !== 'Rechazada')
                                @if (!$user->blacklist)
                                    
                                <form method="post" action="{{route('staff.asistance', $user->user_id)}}">
                                    @csrf
                                    @method('POST')
                                    <input type="text" class="hidden" name="program_id" value="{{$user->program_id}}" >
                                    <button type="submit" class="focus:outline-none text-xs text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-2.5 py-2 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                        Asis.
                                    </button>
                                </form>
                                @endif
                                @endif
                                <form method="post" action="{{route('staff.state', $user->user_id)}}">
                                    @csrf
                                    @method('POST')
                                    <input type="text" class="hidden" name="program_id" value="{{$user->program_id}}" > 
                                    <input type="text" class="hidden" name="action" value="reject" >       
                                    <button type="submit" class="text-white text-xs bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-2.5 py-2 text-center mr-2 mb-2">Rechazar</button>       
                                </form>
                                @if (!$user->blacklist)
                                    
                                <form method="post" action="{{route('staff.state', $user->user_id)}}">
                                    @csrf
                                    @method('POST')
                                    <input type="text" class="hidden" name="program_id" value="{{$user->program_id}}" >    
                                    <input type="text" class="hidden" name="action" value="acept" >    
                                    <button type="submit" class="text-white text-xs bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-2.5 py-2 text-center mr-2 mb-2">Aceptar</button>            
                                </form>
                                @endif
                                
                                    <button onclick="blacklist({{$user->user_id}} , {{$user->program_id}})" id="{{$user->user_id}}" data-modal-toggle="authentication-modal" class="btnBlacklist text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-2.5 py-2 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"> 
                                        <svg xmlns="http://www.w3.org/2000/svg" style="width: 15px;" viewBox="0 0 512 512"><path d="M416 398.9c58.5-41.1 96-104.1 96-174.9C512 100.3 397.4 0 256 0S0 100.3 0 224c0 70.7 37.5 133.8 96 174.9c0 .4 0 .7 0 1.1v64c0 26.5 21.5 48 48 48h48V464c0-8.8 7.2-16 16-16s16 7.2 16 16v48h64V464c0-8.8 7.2-16 16-16s16 7.2 16 16v48h48c26.5 0 48-21.5 48-48V400c0-.4 0-.7 0-1.1zM224 256c0 35.3-28.7 64-64 64s-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64zm128 64c-35.3 0-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64s-28.7 64-64 64z"/></svg>
                                    </button>
                                    @if (!$user->blacklist)
                                        
                                    <form method="post" action="{{route('staff.asignate' , $user->user_id)}}">
                                        @csrf
                                        @method('POST')
                                        <input type="text" class="hidden" name="program_id" value="{{$user->program_id}}" >    
                                        <button type="submit" 
                                        class="text-xs text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 shadow-lg shadow-lime-500/50 dark:shadow-lg dark:shadow-lime-800/80 font-medium rounded-lg text-sm px-2.5 py-2 text-center mr-2 mb-2"
                                        @if (($user->asistance == 0 && $user->asistance !== null || $user->asistance == null) ||  $user->postulation_state == 'Espera' || $user->postulation_state !== 'Aceptada') )
                                        
                                        disabled
                                        @endif   
                                        >
                                        Asignar puntos
                                    </button>
                                </form>
                                @endif
                                
                                
                            </td>
                        </tr>
                        @endif
                        </tbody>
                    @endif    
                    @empty
                        <tbody>
                            <tr>
                                <td class="py-3 px-6 text-left whitespace-nowrap text-center" colspan="7">No hay
                                    resultados disponibles</td>
                            </tr>
                        </tbody>
                    @endforelse

                </table>
                @include('blacklist.form')

                <script>
                    
                    function blacklist(id , program){
                        let input = document.getElementById('userIdBlacklist'),
                            input2 = document.getElementById('programIdBlacklist')
            
                        input.value = id
                        input2.value = program
                        
                    }
            
            
                </script>
        @else
        
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th class="py-3 px-6 text-center">Datos participante</th>
                   
                        <th class="py-3 px-6 text-center">Datos duo</th>
                    
                   
                        <th class="py-3 px-6 text-center">Turno</th>
                   
                    <th class="py-3 px-6 text-center">Estado de postulación</th>
                    <th class="py-3 px-6 text-center">Asistencia</th>
                   
                        <th class="py-3 px-6 text-right">Acciones</th>
                  
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="py-3 px-6 text-left whitespace-nowrap text-center" colspan="7">No hay
                        resultados disponibles</td>
                </tr>
            </tbody>
        </table>
        
        @endif
            
        </div>
    </div>
</x-app-layout>