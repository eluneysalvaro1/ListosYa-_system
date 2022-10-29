<x-app-layout>
    <div class="mx-5 w-full">
        <div class="p-10  bg-gray-100 flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
            <div class="w-1/2 p-5">
                <div class="bg-white shadow-md rounded my-6">
                    <div class="flex flex-col justify-center items-center pt-5">
                        <h2>Crear un Programa</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="flex flex-col justify-end items-end">
                                <a class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                                    href="{{ route('programs.index') }}"> Volver</a>
                            </div>
                        </div>
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success mb-1 mt-1">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ route('programs.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">

                                <div class="mb-2 ">
                                    <div class="px-1">
                                        <label for="name"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nombre
                                            del Programa</label>
                                        <input type="text" name="name" id="name"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                            placeholder="Nombre" required>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2 flex w-full" >
                                <div class="mb-2 w-1/2">
                                    <div class="px-1">
                                        <label for="start_date"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Fecha
                                            de
                                            Inicio</label>
                                        <input type="date" name="start_date" id="date-1"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                            placeholder="" required>

                                        <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 hidden"
                                            role="alert" id="error-1">
                                            <span class="font-medium">Alerta!</span> Recorda que la fecha de Fin debe
                                            ser igual o mayor a la de inicio.
                                        </div>

                                    </div>
                                </div>
                                <div class="mb-2  w-1/2 ">
                                    <div class="px-1 ">
                                        <label for="start_time"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Hora
                                            de
                                            Inicio</label>
                                        <input type="time" name="start_time" id="start_time"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                            placeholder="" required>
                                        @error('start_time')
                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2 flex w-full">
                                <div class="mb-2 w-1/2">
                                    <div class="px-1">
                                        <label for="finish_date"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Fecha
                                            de
                                            fin</label>
                                        <input type="date" name="finish_date" id="date-2"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                            placeholder="" required>
                                        <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 hidden"
                                            role="alert" id="error-2">
                                            <span class="font-medium">Alerta!</span> La fecha de Fin debe ser igual o
                                            mayor a la de inicio.
                                        </div>


                                    </div>
                                </div>
                                <div class="mb-2 w-1/2">
                                    <div class="px-1">
                                        <label for="finish_time"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Hora
                                            de
                                            Fin</label>
                                        <input type="time" name="finish_time" id="finish_time"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                            placeholder="" required>
                                        @error('finish_time')
                                            <div class="">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2 ">
                                <div class="px-1">
                                    <label for="place_event"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ubicacion</label>
                                    <input type="text" name="place_event" id="place_event"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="lugar y direccion del programa" required>
                                    @error('place_event')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-2 flex w-full">

                                <div class="mb-2 w-1/2">
                                    <div class="px-1">
                                        <label for="program_points"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">puntos
                                            para este programa:</label>
                                        <input type="number" name="program_points" id="program_points"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                            placeholder="1" required>
                                        @error('program_points')
                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="px-1 w-1/2">
                                    <div>
                                        <label for="volunteer_limit"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">puntos
                                            para este programa:</label>
                                        <input type="number" name="volunteer_limit" id="volunteer_limit"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                            placeholder="1" required>
                                        @error('volunteer_limit')
                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                            <div class="px-1">
                                <label for="program_image"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Subir
                                    imagen</label>
                                <input type="file" name="program_image" id="program_image"
                                    accept=".png, .jpg, .jpeg"
                                    class="block w-full text-sm text-gray-900 bg-green-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-green-700 dark:border-gray-600 dark:placeholder-green-400"
                                    placeholder="1" required>

                                @error('program_image')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-2 flex w-full m-2 p-2">
                                <div class="mb-2 px-2 w-1/2">
                                    <label for="state"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Estado</label>
                                    <select name="state" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">

                                        <option value="open_to_postulated">Abierto para Postulaciones</option>
                                        <option value="close_to_postulated">Cerrado para Postulaciones</option>
                                        <option value="finish">Finalizado</option>
                                    </select>
                                </div>
                                @if (count($categories) > 0)
                                    <div class="mb-2 w-1/2 flex-col justify-end items-end">
                                        <label for="category_id"
                                            class="block mb-2 w-1/2 text-sm font-medium text-gray-900 dark:text-gray-300">Categoria</label>
                                        <select name="category_id" id="" class="w-1/2 p-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                            @forelse ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @empty
                                            @endforelse
                                        </select>
                                    </div>
                                @else
                                    <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800"
                                        role="alert">
                                        <span class="font-medium">Ups faltan categorias!</span> Cree categorias para
                                        asignar a sus programas.
                                    </div>
                                @endif


                            </div>
                            <div class="flex flex-col justify-center items-center">
                                @if (count($categories) > 0)
                                    <button type="submit"
                                        class=" float-right block focus:outlinhidden text-white  bg-green-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-2 py-1 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900"
                                        id="button_submit">Crear
                                    </button>
                                @else
                                    <button type="" disabled
                                        class=" float-right block focus:outlinhidden text-white  bg-green-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-2 py-1 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900"
                                        id="button_submit">Crear
                                    </button>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




    <script>
        let startDate = document.getElementById('date-1')
        let finishDate = document.getElementById('date-2')

        let error1 = document.getElementById('error-1')
        let error2 = document.getElementById('error-2')

        let buttonSubmit = document.getElementById('button_submit')

        startDate.addEventListener('change', e => {

            if (startDate.value > finishDate.value) {
                error1.classList.remove('hidden')
                buttonSubmit.setAttribute('disabled', "")
            } else {
                error1.classList.add('hidden')
                error2.classList.add('hidden')
                buttonSubmit.removeAttribute('disabled')
            }

        })

        finishDate.addEventListener('change', e => {
            if (startDate.value > finishDate.value) {
                error2.classList.remove('hidden')
                buttonSubmit.setAttribute('disabled', "")
            } else {
                error2.classList.add('hidden')
                error1.classList.add('hidden')
                buttonSubmit.removeAttribute('disabled')
            }
        })
    </script>

</x-app-layout>
