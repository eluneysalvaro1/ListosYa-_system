<x-app-layout>
    @if (count($staffPrograms) > 0)
    
    <div   class=" mt-8 bg-white dark:bg-green-800 overflow-hidden shadow sm:rounded-lg">
        <div class="grid grid-cols-1 md:grid-cols-2">
            @php
                $ruta = '/images/programs/';
            @endphp
            @forelse ($staffPrograms as $program)
       
               
                    <div class=" m-5 flex flex-col items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <img style="height: 100%" class="object-cover rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="{{ asset($ruta . $program->program_image) }}" alt="">
                        <div class=" w-full flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$program->name}}</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lugar del Programa: {{$program->place_event}}</p>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Estado del programa: 
                                @if ($program->state == 'open_to_postulated')
                                   <strong class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900"> Programa abierto para postulaciones</strong>
                                @elseif($program->state == 'close_to_postulated')  
                                  <strong class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">Programa cerrado para postulaciones</strong>   
                                @else 
                                   <strong class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">Programa finalizado</strong>  
                                @endif
                            </p>
                            <a href="{{route('staff.postulant', $program->id)}}" id="{{$program->id}}" class=" w-full text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                                Ver postulantes
                            </a>
                        </div>
                    </div>
                        
                

                
                    @empty
                   
                    @endforelse
                </div>
            </div>
    @else
    <div style="width: 80%; margin:3rem auto" class="p-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
        <span class="font-medium">No tienes programas asignados!</span> espera a que un administrador te asigne programas para administrar.
    </div>
    @endif


</x-app-layout>