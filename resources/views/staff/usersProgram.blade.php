<x-app-layout>

{{-- {{dd($userProgram)}} --}}

<div style="margin: 3rem;" class="overflow-x-auto relative shadow-md sm:rounded-lg">
    
    <div class="w-full text-sm text-left text-gray-500 dark:text-gray-40">
        
            
                
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th class="py-3 px-6 text-center">Nombre participante</th>
                            <th class="py-3 px-6 text-center">Nombre duo</th>
                            <th class="py-3 px-6 text-center">Turno</th>
                            <th class="py-3 px-6 text-center">Estado de postulación</th>
                            <th class="py-3 px-6 text-center">Asistencia</th>
                            <th class="py-3 px-6 text-center">Observación</th>
                            <th class="py-3 px-6 text-right">Acciones</th>
                        </tr>
                    </thead>
                    @php
                        $count = 0;
                    @endphp
                    @forelse ($userProgram as $user)
                        @if ($count % 2 == 0)
                            <tbody class="text-gray-800 text-sm font-light bg-white">
                        @else
                            <tbody class="text-gray-800 text-sm font-light bg-gray-100">
                        @endif
                        @php
                            $count++;
                        @endphp
                        <tr class="border-b border-gray-200 hover:bg-gray-200">
                            <td class="py-3 px-6 text-left whitespace-nowrap text-center">{{ $user->userName }}</td>
                            <td class="py-3 px-6 text-left whitespace-nowrap text-center">{{ $user->duoName }}</td>
                            <td class="py-3 px-6 text-left whitespace-nowrap text-center">
                              @if ($user->turn == null)
                                  No hay turno seleccionador
                              @else
                                   {{$user->turn}} 
                              @endif
                               
                            </td>
                            <td class="py-3 px-6 text-left whitespace-nowrap text-center">

                                {{ $user->postulation_state }}
                            </td>
                            <td class="py-3 px-6 text-left whitespace-nowrap text-center">
                                
                                @if ($user->asistance == null)
                                    <span class="bg-yellow-100 text-yellow-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-200 dark:text-yellow-900">
                                        No se ha marcado Asistencia        
                                    </span>
                                @elseif($user->asistance == 1)
                                    <span class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">
                                        Asistió
                                    </span>
                                @elseif($user->asistance == 0)
                                    <span class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">
                                        No asistió
                                    </span>
                                @endif
                            </td>
                            <td class="py-3 px-6 text-left whitespace-nowrap text-center">
                                {{$user->observation}}
                            </td>
                            <td>
                                <form method="post" action="{{route('staff.asistance', $user->user_id)}}">
                                    @csrf
                                    @method('POST')
                                    <input type="text" class="hidden" name="program_id" value="{{$user->program_id}}" >
                                    <button type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                        Marcar asistencia
                                    </button>
                                </form>
                            </td>
                        </tr>
                        </tbody>

                    @empty
                        <tbody>
                            <tr>
                                <td class="py-3 px-6 text-left whitespace-nowrap text-center" colspan="7">No hay
                                    resultados disponibles</td>
                            </tr>
                        </tbody>
                    @endforelse

                </table>
            
            
        </div>
       
    </div>

</x-app-layout>