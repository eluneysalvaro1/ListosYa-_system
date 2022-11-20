<x-app-layout>


@if ($userProgram == null)
    


<div style="margin: 3rem auto;width: 80%" >
        @php
            $sms = false;
            if($program->start_date !== $program->finish_date) {
                $sms = true;
            }

        @endphp

<div  class="w-full bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
    <a href="#">
        <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
    </a>
    <div class="p-5">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$program->name}}</h5>
        </a>
        @if ($sms)
                    <p
                    class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                        El programa se realizará entre los dias {{$program->start_date}} y el {{$program->finish_date}}
                    </p>
        @else
                    <p
                    class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    El programa se realizará el dia <strong>{{$program->start_date}}</strong>  y terminara el mismo dia.
                </p>

            @endif
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">En <strong>{{$program->place_event}}</strong> desde <strong>{{$program->start_time}}</strong> hasta <strong>{{$program->finish_time}}</strong> </p>
        @if ($program->duo)
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Este programa lo debe desarrollar en <strong>DUO / DUPLA </strong> Para la inscripcion vas a necesitar el DNI de tu dupla .</p>
        @else
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Este programa lo puede desarrollador <strong>SOLO</strong> </p>
        @endif

        @if ($program->turn)
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Este programa <strong>CUENTA</strong>  con turnos, por lo que deberá elegir correctamente</p>
        @else
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Este programa <strong>NO CUENTA</strong>  con turnos. </p>
        @endif

        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Este programa le otorgará una cantidad de <strong>{{$program->program_points}}</strong> que podrá canjear por futuros premios. Complete el formulario de abajo para inscribirse y preparese... <strong style="color: #21CB80;">Listo YA!</strong> </p>
    </div>
</div>


@if (Auth::check() == true)

@if (Auth::user()->telephone_number !== null && Auth::user()->dni !== null && Auth::user()->ciudad_id !== null &&
    Auth::user()->birthday !== null && Auth::user()->password !== null || Auth::user()->role_id == 1)


    @if ($program->turn == 1 && $program->duo == 1)
    <form method="POST" action="{{route('programs.inscription')}}">
        @csrf           
                <input type="number" class="hidden"  name="user_id" value="{{Auth::user()->id}}" >
                <input type="number" class="hidden" name="program_id" value="{{$program->id}}" >
                <div class="my-3 w-full">
                    <div class="px-1">
                        <label for="duo_id"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Número de documento de su acompañante:</label>
                        <input type="number" name="duo_id" id="duo_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="44003322" min="10000000" max="99999999" required>
                            <small class="text-sm text-gray-400">Si el usuario no se encuentra registrado en el sistema y con la información completa, no podrá ser su acompañante</small>
                    </div>
                </div>
                <div class="my-3 w-full">
                    <div class="px-1 ">
                        <label for="turn"
                            class="block   mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Turno:</label>
                            <select class="w-full mt-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" name="turn" required>
                                <option value="1">09:00 - 10:00</option>
                                <option value="2">10:00 - 11:00</option>
                                <option value="3">11:00 - 12:00</option>
                                <option value="4">12:00 - 13:00</option>
                                <option value="5">13:00 - 14:00</option>
                            </select>
                        </div>
                        <small class="text-sm text-gray-400">El sistema comprobará que no existan cierta cantidad de participantes para el mismo horario. </small>
                    </div>
                    <div class="my-5 w-full">
                        <button class="w-full focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" type="submit">Enviar</button>
                    </div>


            </form>
    @elseif($program->turn == 1)

    <form method="POST" action="{{route('programs.inscription')}}">
        @csrf           
                <input type="number" class="hidden"  name="user_id" value="{{Auth::user()->id}}" >
                <input type="number" class="hidden" name="program_id" value="{{$program->id}}" >
               
                <div class="my-3 w-full">
                    <div class="px-1 ">
                        <label for="turn"
                            class="block   mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Turno:</label>
                            <select class="w-full mt-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" name="turn" required>
                                <option value="1">09:00 - 10:00</option>
                                <option value="2">10:00 - 11:00</option>
                                <option value="3">11:00 - 12:00</option>
                                <option value="4">12:00 - 13:00</option>
                                <option value="5">13:00 - 14:00</option>
                            </select>
                        </div>
                        <small class="text-sm text-gray-400">El sistema comprobará que no existan cierta cantidad de participantes para el mismo horario. </small>
                    </div>
                    <div class="my-5 w-full">
                        <button class="w-full focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" type="submit">Enviar</button>
                    </div>


            </form>
          
            
            
    @elseif($program->duo == 1)

           
    <form method="POST" action="{{route('programs.inscription')}}">
        @csrf           
                <input type="number" class="hidden"  name="user_id" value="{{Auth::user()->id}}" >
                <input type="number" class="hidden" name="program_id" value="{{$program->id}}" >
                <div class="my-3 w-full">
                    <div class="px-1">
                        <label for="duo_id"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Número de documento de su acompañante:</label>
                        <input type="number" name="duo_id" id="duo_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="44003322" min="10000000" max="99999999" required>
                            <small class="text-sm text-gray-400">Si el usuario no se encuentra registrado en el sistema y con la información completa, no podrá ser su acompañante</small>
                    </div>
                </div>
                
                    <div class="my-5 w-full">
                        <button class="w-full focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" type="submit">Enviar</button>
                    </div>


            </form>

    @else

            <form method="POST"  action="{{route('programs.inscription')}}">
                @csrf    
                <input type="number" class="hidden" name="user_id" value="{{Auth::user()->id}}">
                <input type="number" class="hidden" name="program_id" value="{{$program->id}}">
                
                <div class="my-5 w-full">
                    <button class="w-full focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" type="submit">Enviar</button>
                </div>
            </form>

    @endif





@else
<div class="my-3 p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
    <span class="font-medium">Alerta!</span> Usted debe completar su registro para poder participar en cualquier programa.
  </div>
@endif

@else
<div class="my-3 p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
    <span class="font-medium">Alerta!</span> Usted no se encuentra logueado o no cuenta con una cuenta en la aplicación. Para poder participar de cualquier programa debe tener una cuenta.
  </div>
@endif
    
</div>
@else

<div class="m-5 p-4 mb-4 text-sm text-blue-700 bg-blue-100 rounded-lg dark:bg-blue-200 dark:text-blue-800" role="alert">
    <span class="font-medium">Información!</span> Su postulación ha sido enviada. Será avisad@ via email en caso de ser aprobada su postulación. Muchas gracias!
  </div>

@endif

</x-app-layout>