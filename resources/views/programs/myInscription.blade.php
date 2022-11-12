<x-app-layout>

    <div   class=" mt-8 bg-white dark:bg-green-800 overflow-hidden shadow sm:rounded-lg">
        <div class="grid grid-cols-1 md:grid-cols-2">
            @php
                $ruta = '/images/programs/';
            @endphp
            @forelse ($programs as $program)
                
                    @if ($program->postulation_state !== 'Baja')
                        
                    
                    <div class=" m-5 flex flex-col items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <img style="height: 100%" class="object-cover rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="{{ asset($ruta . $program->program_image) }}" alt="">
                        <div class=" w-full flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$program->program_name}}</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lugar del Programa: {{$program->program_place_event}}</p>
                            @if ($program->postulation_state == 'Espera')
                                <span class="m-2.5 bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">
                                    Espera
                                </span>
                                @elseif($program->postulation_state == 'Aceptada')
                                <span class=" m-2.5 bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">
                                    Aceptado</span>
                                @else
                                <span class=" m-2.5 bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">
                                    Rechazado
                                </span>
                                @endif
                                <a href="{{route('programs.inscribe', $program->program_id)}}" id="{{$program->program_id}}" class=" w-full mt-2.5 text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                                    Ver programa
                                </a>
                            @if ($program->postulation_state == 'Espera')
                                <form method="POST" action="{{route('programs.down')}}">
                                    @csrf
                                    @method('POST')
                                    <input type="number" class="hidden" name="program_id" value="{{$program->program_id}}">
                                    <input type="number" class="hidden" name="user_id" value="{{$program->user_id}}">
                                    <input type="text" class="hidden" name="postulation_state" value="Espera">
                                    <button type="submit" class=" w-full text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2" >
                                        Darme de baja - NO hay sanción
                                    </button>
                                </form>
                            @elseif($program->postulation_state == 'Aceptada')
                            <form method="POST" action="{{route('programs.down')}}">
                                @csrf
                                @method('POST')
                                <input type="number" class="hidden" name="program_id" value="{{$program->program_id}}">
                                <input type="number" class="hidden" name="user_id" value="{{$program->user_id}}">
                                <input type="text" class="hidden" name="postulation_state" value="Aceptada">
                                <button type="submit" class=" w-full text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                                    Darme de baja - HABRÁ sanción
                                </button>   
                            </form>
                            @endif
                            
                        </div>
                    </div>
                    @endif
                    @empty
                   
                    @endforelse
                </div>
            </div>
  
    @if (count($programs) == 0)
    <div style="width: 100%" class="p-4 text-sm m-7 text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
        <span class="font-medium">No hay programas!</span> propuestos por parte de la organización. Pronto habran!.
    </div>
    @endif


</x-app-layout>
