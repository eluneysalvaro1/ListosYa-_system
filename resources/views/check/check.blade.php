<x-app-layout>

    
    <div style="margin: 3rem;" class="overflow-x-auto relative shadow-md sm:rounded-lg">
        @if($program !==null)
            {{ $program->name}} | {{ $program->place_event }} | {{ $program->finish_date}}
        @endif
        @if ($user->role_id!==3)
            <div class="text-center text-sm text-gray-500 sm:text-left">
                <div class="flex items-center ">
                    @livewire('qr-generator')
                </div>
            </div>
        @else
        <div class="w-full text-sm text-left text-gray-500 dark:text-gray-40">

            @if ($userProgram !== null )

            <h2>
                Hola {{ $user->name}}, {{ $user->surname}}
                en este momento para el programa  
                <td class="py-3 px-6 text-left whitespace-nowrap text-center">

                    @if($userProgram->asistance == 0 && $userProgram->asistance !== null)
                    <span
                        class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">
                        No asistió
                    </span>
                    @elseif ($userProgram->asistance == null)
                    <span
                        class="bg-yellow-100 text-yellow-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-200 dark:text-yellow-900">
                        No marcaste tu asistencia
                    </span>
                    @elseif($userProgram->asistance == 1)
                    <span
                        class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">
                        Ya marcaste tu Asistencia

                    </span>

                    @endif
                </td>
                </br>
                @if ($userProgram->asistance !== 1)
                <form method="post" action="{{route('staff.asistance', $userProgram->user_id)}}">
                    @csrf
                    @method('POST')
                    <input type="text" class="hidden" name="program_id" value="{{$userProgram->program_id}}">
                    <button type="submit"
                        class="focus:outline-none text-xs text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-2.5 py-2 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        Dar asistencia
                    </button>
                </form>
                @endif


            </h2>

            @else
            <h1>Corroba que estas estas inscripto en este programa y aceptado para participar</h1>

            @endif

        </div>
        @endif
    </div>
   





</x-app-layout>