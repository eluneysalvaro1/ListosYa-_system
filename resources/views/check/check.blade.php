<x-app-layout>
 
    
    <div style="margin: 3rem;" class="overflow-x-auto relative shadow-md sm:rounded-lg">
       
        @if ($user->role_id!==3)
            
            <div class="text-center text-sm text-gray-500 sm:text-left">
                QR Asitencia Programa {{ $program->name}} 
                <div class="flex items-center ">
                   
                    @livewire('qr-generator')
                </div>
            </div>
        @else
        <div class="w-full text-sm text-left text-gray-500 dark:text-gray-40">

            @if ($userProgram !== null )
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="{{ asset("/images/programs/". $program->program_image) }}" alt="" />
                </a>
                <div class="p-5">
                    
                        <span class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            Hola {{ $user->name}}, {{ $user->surname}} 
                            en este momento para el programa {{ $program->name}} 
                            @if($userProgram->asistance == 0 && $userProgram->asistance !== null)
                                <h3
                                    class="bg-red-100 text-red-800  font-normal mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">
                                    No asistió
                                </h3>
                                @elseif ($userProgram->asistance == null)
                                <h3
                                    class="bg-yellow-100 font-normal text-yellow-800   mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-200 dark:text-yellow-900">
                                    No marcaste tu asistencia
                                </h3>
                                @elseif($userProgram->asistance == 1)
                                <span
                                    class="bg-green-100 font-normal text-green-800  font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">
                                    Ya marcaste tu Asistencia

                                </span>

                                @endif
                            </span>
                 
                    @if ($userProgram->asistance !== 1)
                    <form method="post" action="{{route('check.asistance', $userProgram->user_id)}}">
                        @csrf
                        @method('POST')
                        <input type="text" class="hidden" name="program_id" value="{{$userProgram->program_id}}">
                        <button type="submit"
                            class="focus:outline-none font-normal text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-2.5 py-2 m-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                            Dar asistencia
                        </button>
                    </form>
                    @endif
                </div>
            </div>
         

            @else
            <h1>Corroba que estas estas inscripto en este programa y aceptado para participar</h1>

            @endif

        </div>
        @endif
    </div>
   





</x-app-layout>