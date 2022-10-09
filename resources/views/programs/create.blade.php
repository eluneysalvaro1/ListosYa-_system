<x-app-layout>
    <div class="mx-5">
        <div class="  bg-gray-100 flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
            <div class="w-1/2">
                <div class="bg-white shadow-md rounded my-6">
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="flex flex-col justify-center items-center">
                            
                                <h2>Crear un Programa</h2>
                            </div>
                            <div class="flex flex-col justify-end items-end">
                                <a class="btn btn-primary" href="{{ route('programs.index') }}"> Volver</a>
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
                            <div class="mb-2 flex">
                                <div class="mb-2 ">
                                    <div class="px-1">
                                        <label for="start_date"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Fecha
                                            de
                                            Inicio</label>
                                        <input type="date" name="start_date" id="start_date"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                            placeholder="" required>
                                        @error('start_date')
                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-2 ">
                                    <div class="px-1">
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
                            <div class="mb-2 flex">
                                <div class="mb-2 ">
                                    <div class="px-1">
                                        <label for="finish_date"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Fecha
                                            de
                                            fin</label>
                                        <input type="date" name="finish_date" id="finish_date"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                            placeholder="" required>
                                        @error('finish_date')
                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-2 ">
                                    <div class="px-1">
                                        <label for="finish_time"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Hora
                                            de
                                            Fin</label>
                                        <input type="time" name="finish_time" id="finish_time"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                            placeholder="" required>
                                        @error('finish_time')
                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
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
                            <div class="mb-2 flex">

                            <div class="mb-2 ">
                                <div class="px-1">
                                    <label for="program_points"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">puntos
                                        para este programa:</label>
                                    <input type="text" name="program_points" id="program_points"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="1" required>
                                    @error('program_points')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-2 ">
                                <div class="px-1">
                                    <label for="program_image"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Subir
                                        imagen</label>
                                    <input type="file" name="program_image" id="program_image"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="1" required>
                                    @error('program_image')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            </div>

                            <div class="mb-2 flex">
                                <div class="mb-2">
                                    <label for="state"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Estado</label>
                                    <select name="state" id="">

                                        <option value="open_to_postulated">Abierto para Postulaciones</option>
                                        <option value="close_to_postulated">Cerrado para Postulaciones</option>
                                        <option value="finish">Finalizado</option>
                                    </select>
                                </div>
                                <div class="mb-2 flex flex-col justify-end items-end" >
                                    <label for="category_id"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Categoria</label>
                                    <select name="category_id" id="">
                                        @forelse ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                            <div class="flex flex-col justify-center items-center">
                            <button type="submit"
                                class=" float-right block focus:outline-none text-white  bg-green-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-2 py-1 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900 ">Crear</button>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
