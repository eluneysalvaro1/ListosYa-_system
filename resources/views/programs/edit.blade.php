<x-app-layout>
    <div class="mx-5 w-full">
        <div style="overflow-x: scroll;" class="p-10  bg-gray-100 flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
            <div style="width: 80%" class="p-10">
                <div class="bg-white shadow-md rounded my-6 p-5">
                    <div>
                        <div class="flex flex-col justify-center items-center pt-5">
                            <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Actualizar datos de
                            {{ $program->name }}</h3>
                        </div>
                        <td class="py-3 px-6 text-left whitespace-nowrap text-center"><img
                            src="/images/programs/{{ $program->program_image }}" width="100" height="100"> </td>
                    </div>
    <form id="mainForm" class="space-y-6" method="get" action="{{ route('programs.update', $program->id) }}">
        @method('GET')
        @csrf
       

        <div class="mb-2 ">
            <div class="px-1">
                <label for="name"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nombre</label>
                <input type="text" name="name" id="name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    placeholder="" value="{{ $program->name }}" required>
            </div>
        </div>

        <div class="my-3 flex w-full">
            <div class="mb-3 w-1/2">
                <label for="start_date"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Fecha de
                    inicio</label>
                <input type="date" name="start_date" id="start_date"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    value="{{ $program->start_date }}" required>
            </div>
            <div class="mb-3 w-1/2">
                <label for="start_time"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Hora de
                    inicio</label>
                <input type="time" name="start_time" id="start_time"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    value="{{ $program->start_time }}" required>
            </div>
        </div>

        <div class="my-3 flex w-full">
            <div class="mb-3 w-1/2">
                <label for="finish_date"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Fecha de
                    fin</label>
                <input type="date" name="finish_date" id="finish_date"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    value="{{ $program->finish_date }}" required>
            </div>
            <div class="mb-3 w-1/2">
                <label for="finish_time"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Hora de
                    fin</label>
                <input type="time" name="finish_time" id="finish_time"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    value="{{ $program->finish_time }}" required>
            </div>
        </div>

        

        <div class="my-3 flex w-full">
            <div class="mb-3 w-1/2">
                <label for="volunteer_limit"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Max
                    Voluntari@is</label>
                <input type="number" name="volunteer_limit" id="volunteer_limit" min="1"
                    max="3000"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    value="{{ $program->volunteer_limit }}" required>
            </div>
            <div class="mb-3 w-1/2">
                <label for="program_points"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                    Puntos</label>
                <input type="number" name="program_points" id="program_points" min="1"
                    max="3000"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    value="{{ $program->program_points }}" required>
            </div>
        </div>
        <div class="mb-2">
            <label for="place_event"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ubicacion</label>
            <x-input type="text" name="place_event" id="place_event"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                value="{{ $program->place_event }}" required />
        </div>


 <div class="mb-2">
                <label for="state"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Estado</label>
                <select name="state" class="w-1/2 p-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                    @if ($program->state == 'finish')
                        <option value="finish" selected>Finalizado</option>
                        <option value="open_to_postulated">Abierto para Postulaciones</option>
                        <option value="close_to_postulated">Cerrado para Postulaciones</option>
                    @elseif($program->state == 'open_to_postulated')
                        <option value="finish">Finalizado</option>
                        <option value="open_to_postulated" selected>Abierto para Postulaciones</option>
                        <option value="close_to_postulated">Cerrado para Postulaciones</option>
                    @else
                        <option value="finish">Finalizado</option>
                        <option value="open_to_postulated">Abierto para Postulaciones</option>
                        <option value="close_to_postulated" selected>Cerrado para Postulaciones</option>
                    @endif
                </select>
            </div>


        <div class="mb-2">
            <label for="state"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Categoría</label>
            <select name="category_id" id=""  class="w-1/2 p-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                @forelse ($categories as $category)
                @if ($category->id == $program->category_id)
                    <option value="{{$category->id}}" selected>{{$category->name}}</option>
                @else
                <option value="{{$category->id}}" >{{$category->name}}</option>
                @endif
                    
                @empty
                    
                @endforelse
                    
            </select>
            </div>


           



            @php
                $count = 0; 
            @endphp
        <div class="mb-2 w-full">
            <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Usuarios staff - administradores</label>
                @forelse ($staffUsers as $staffUser)
                @if ($count % 2 == 0)
                <div style="background: #DDDDDD; display:flex; justify-content:space-between; align-items:center ;box-shadow: 9px 7px 19px -7px rgba(125,125,125,0.75);" id="toast-success" class=" p-4 mb-4 w-full text-gray-500 rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
                @else
                <div style="background: #DDDDDD95; display:flex; justify-content:space-between; align-items:center ;box-shadow: 9px 7px 19px -7px rgba(125,125,125,0.75);" id="toast-success" class=" p-4 mb-4 w-full text-gray-800 rounded-lg shadow dark:text-gray-800 dark:bg-gray-800" role="alert">       
                @endif
                @php
                    $count++;
                @endphp
                    <div class="ml-3 text-sm font-normal"><strong>{{$staffUser->userName}} {{$staffUser->userSurname}} </strong></div>
                    <form id="form{{$count}}" method="GET" action="{{route('staff.userDelete', $staffUser->userId)}}">
                        @csrf
                        @method('GET')
                        <input class="hidden" type="number" name="program_id" value="{{$staffUser->program_id}}" >
                        <input class="hidden" type="number" name="user_id" value="{{$staffUser->userId}}" >
                        <button onclick="submitForm({{$count}})" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5  dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">X</button>
                    </form>
                </div>
                @empty
                    
                @endforelse
        </div>
               
        
                    <button type="submit" onclick="submitMainForm('mainForm')" class="w-full text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">ActualizarPrograma</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function submitForm(id){
        let form = document.getElementById('form'+id)
        
        form.submit()
    
    }

    function submitMainForm(id){
        let form = document.getElementById(id)
        
        form.submit()
    }


</script>


</x-app-layout>