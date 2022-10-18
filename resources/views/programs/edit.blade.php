
<!-- Main modal -->
<div id="modal{{$program->id}}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-10 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="relative my-4 p-4 w-full max-w-md h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
          
            {{-- FORMULARIO --}}
            <div class="py-6 px-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Actualizar datos de
                    {{ $program->name }}</h3>
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

                    <div class="mb-2 flex">
                        <div>
                            <label for="start_date"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Fec de
                                Inicio</label>
                            <input type="date" name="start_date" id="start_date"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                value="{{ $program->start_date }}" required>
                        </div>
                        <div>
                            <label for="start_time"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Hora de
                                Inicio</label>
                            <input type="time" name="start_time" id="start_time"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                value="{{ $program->start_time }}" required>
                        </div>
                    </div>

                    <div class="mb-2 flex">
                        <div>
                            <label for="finish_date"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Fec de
                                Fin</label>
                            <input type="date" name="finish_date" id="finish_date"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                value="{{ $program->finish_date }}" required>
                        </div>
                        <div>
                            <label for="finish_time"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Hora de
                                Fin</label>
                            <input type="time" name="finish_time" id="finish_time"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                value="{{ $program->finish_time }}" required>
                        </div>
                    </div>

                    

                    <div class="mb-2 flex">
                        <div class="px-1">
                            <label for="volunteer_limit"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Max
                                Voluntari@is</label>
                            <input type="number" name="volunteer_limit" id="volunteer_limit" min="1"
                                max="3000"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                value="{{ $program->volunteer_limit }}" required>
                        </div>
                        <div>
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
                        <select name="state" id="">
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
