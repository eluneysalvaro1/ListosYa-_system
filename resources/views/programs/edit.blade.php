<x-app-layout>
    <div class="mx-5 w-full">
        <div class="p-10  bg-gray-100 flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
            <div class="w-1/2 p-10">
                <div class="bg-white shadow-md rounded my-6 p-5">
                    <div class="flex flex-col justify-center items-center pt-5">
                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Actualizar datos de
                        {{ $program->name }}</h3>
                    </div>
    <form class="space-y-6" method="get" action="{{ route('programs.update', $program->id) }}">
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
            <select name="state" id=""  class="w-1/2 p-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
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

                    <button type="submit"
                    class="w-full text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Actualizar
            Programa</button>
                </form>
            </div>
        </div>
    </div>
</div>
</x-app-layout>