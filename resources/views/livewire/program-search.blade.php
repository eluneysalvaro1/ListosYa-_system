<div>


    <div class="mx-5">
        <div class="min-w-screen  bg-gray-100 flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
            <div class="w-auto mx-10 ">
                <div class="flex justify-end pt-5 pr-10">
                    <div class="relative mt-1">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>

                        <input type="text"
                            class="block p-2 pl-10 w-80 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="ingrese el nombre del programa" wire:model="busqueda" />
                    </div>
                    <button
                        class=" float-right block focus:outline-none text-white  bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-2 py-1 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-green-900 "
                        type="button"> <a href=" {{ route('programs.create') }} ">Crear Programa</a>
                    </button>
                </div>
                <div class="bg-white shadow-md rounded my-6">

                    <table class="min-w-max w-full table-auto">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-center">Imagen</th>
                                <th class="py-3 px-6 text-center">Nombre del Programa</th>
                                <th class="py-3 px-6 text-center">Categoria</th>
                                <th class="py-3 px-6 text-center">Fecha de Inicio</th>
                                <th class="py-3 px-6 text-center">Limite de Voluntarios</th>
                                <th class="py-3 px-6 text-center">Puntos</th>
                                <th class="py-3 px-6 text-center">Estado</th>
                                <th class="py-3 px-6 text-right">Acciones</th>
                            </tr>
                        </thead>
                        @php
                            $count = 0;
                        @endphp

                        @forelse ($programs as $program)
                            @if ($count % 2 == 0)
                                <tbody class="text-gray-800 text-sm font-light bg-white">
                                @else
                                <tbody class="text-gray-800 text-sm font-light bg-gray-100">
                            @endif
                            @php
                                $count++;
                            @endphp
                            <tr class="border-b border-gray-200 hover:bg-gray-200">
                                <td class="py-3 px-6 text-left whitespace-nowrap text-center"><img
                                        src="/images/programs/{{ $program->program_image }}" width="100"
                                        height="100"> </td>
                                <td class="py-3 px-6 text-left whitespace-nowrap text-center">{{ $program->name }}</td>

                                <td class="py-3 px-6 text-left whitespace-nowrap text-center">

                                    @foreach ($categories as $category)
                                        @if ($category->id == $program->category_id)
                                            {{ $category->name }}
                                        @endif
                                    @endforeach

                                </td>
                                <td class="py-3 px-6 text-left whitespace-nowrap text-center">{{ $program->start_date }}
                                </td>
                                <td class="py-3 px-6 text-left whitespace-nowrap text-center">
                                    {{ $program->volunteer_limit }}</td>
                                <td class="py-3 px-6 text-left whitespace-nowrap text-center">
                                    {{ $program->program_points }}</td>
                                <td class="py-3 px-6 text-left whitespace-nowrap text-center">
                                    @if ($program->state == 'open_to_postulated')
                                        Abierto para Postularse
                                    @elseif ($program->state == 'close_to_postulated')
                                        Cerrado para Postularse
                                    @else
                                        Finalizado
                                    @endif

                                <td style="vertical-align: middle;"
                                    class="py-3 flex px-6 text-left whitespace-nowrap justify-end">

                                    <button
                                        class=" float-right block focus:outline-none text-white  bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-2 py-1 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-green-900 "
                                        type="button"> <a
                                            href=" {{ route('programs.edit', $program->id) }} ">Editar</a>
                                    </button>

                                </td>

                            </tr>
                            </tbody>


                        @empty
                        @endforelse
                    </table>
                </div>
            </div>

        </div>
        <div class="flex items-center justify-center bg-gray-100 font-sans overflow-hidden pb-10">
            {{ $programs->links() }}
        </div>
    </div>
</div>
