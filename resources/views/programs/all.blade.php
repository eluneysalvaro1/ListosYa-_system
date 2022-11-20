<x-app-layout>
    <div   class=" mt-8 bg-white dark:bg-green-800 overflow-hidden shadow sm:rounded-lg">
        <div class="grid grid-cols-1 md:grid-cols-2">
            @php
                $ruta = '/images/programs/';
            @endphp
            @forelse ($programs as $program)
                

                    <div class=" m-5 flex flex-col items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <img style="height: 100%" class="object-cover rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="{{ asset($ruta . $program->program_image) }}" alt="">
                        <div class=" w-full flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$program->name}}</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lugar del Programa: {{$program->place_event}}</p>
                            @if ($program->duo == True)
                                <h3 class="bg-yellow-100 font-normal text-yellow-800   mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-200 dark:text-yellow-900">
                                    Este programa es con Dupla, se realiza junto a otro voluntario, que tambien debe estar registrado. Para poder inscribirte vas a necesitar cargar el DNI de tu dupla.
                                </h3>
                            @endif
                            
                            <a href="{{route('programs.inscribe', $program->id)}}" id="{{$program->id}}" class=" w-full text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                                Ver programa
                            </a>

                        </div>
                    </div>
                
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
