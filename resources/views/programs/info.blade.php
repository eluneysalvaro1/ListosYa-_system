<x-app-layout>

{{$program}}
<div style="margin: auto;width: 80%" >
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
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Este programa lo debe desarrollar en <strong>DUO</strong> .</p>
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


    @if ($program->duo)
        <form action="">
            <input type="number" class="hidden" name="user_id" value="{{Auth::user()->id}}">
            <input type="number" class="hidden" name="program_id" value="{{$program->id}}">
            <input type="number" class="" name="duo_id">
            <input type="number" class="hidden" name="user_id" value="{{Auth::user()->id}}">
        </form>
    @elseif($program->turn)

    <form action="">

                <input type="number" class="hidden" name="user_id" value="{{Auth::user()->id}}" disabled>
                <input type="number" class="hidden" name="program_id" value="{{$program->id}}" disabled>
                <div class="my-3 w-full">
                    <div class="px-1">
                        <label for="duo_id"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Número de documento de su acompañante:</label>
                        <input type="number" name="duo_id" id="duo_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="44003322" required>
                            <small class="text-sm text-gray-400">Si el usuario no se encuentra registrado en el sistema y con la información completa, no podrá ser su acompañante</small>
                    </div>
                </div>
                <div class="my-3 w-full">
                    <div class="px-1">
                        <label for="duo_id"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Turno:</label>
                            <select name="" id="">
                                
                            
                                
                                
                            </select>
                            <small class="text-sm text-gray-400">El sistema comprobará que no existan cierta cantidad de participantes para el mismo horario. </small>
                        </div>
                    </div>
                    

            </form>
            @forelse ($available as $it)
            {{dd($it->date)}} 
            {{-- <option value="">{{$it}}</option> --}}
            @empty
            
            @endforelse
    @elseif($program->turn && $program->duo)

            <form action="">
                <input type="number" class="hidden" name="user_id" value="{{Auth::user()->id}}">
                <input type="number" class="hidden" name="program_id" value="{{$program->id}}">
                <input type="number" class="" name="duo_id">
                <input type="number" class="hidden" name="user_id" value="{{Auth::user()->id}}">
            </form>

    @else

            <form action="">
                <input type="number" class="hidden" name="user_id" value="{{Auth::user()->id}}">
                <input type="number" class="hidden" name="program_id" value="{{$program->id}}">
                <input type="number" class="" name="duo_id">
                <input type="number" class="hidden" name="user_id" value="{{Auth::user()->id}}">
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
    <form action="{{ route('programs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

    </form>

</div>


</x-app-layout>