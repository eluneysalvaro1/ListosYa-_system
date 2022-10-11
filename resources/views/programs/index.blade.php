<x-app-layout>

    @php
        $count = 0;
    @endphp


    <div class="mx-5">
        <div class="min-w-screen  bg-gray-100 flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
            <div class="w-auto mx-10 ">
                <div class="flex justify-end pt-5 pr-10">
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
                                    @if ($program->state == "open_to_postulated")
                                        Abierto para Postularse
                                    @elseif ($program->state == "close_to_postulated") 
                                        Cerrado para Postularse
                                    @else
                                        Finalizado
                                    @endif
                                    
                                <td class="py-3 flex px-6 text-left whitespace-nowrap justify-end">
                                    <button
                                        class="block focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-2 py-1 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900"
                                        type="button" data-modal-toggle="modal{{$program->id}}">Editar</button>
                                    {{-- <button type="button"
                                        class="block focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-2 py-1 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"
                                        data-modal-toggle="popup{{ $program->id }}">Borrar</button> --}}
                                </td>
                            </tr>
                            </tbody>

                            @include('programs.edit', ['program' => $program])
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
</x-app-layout>
