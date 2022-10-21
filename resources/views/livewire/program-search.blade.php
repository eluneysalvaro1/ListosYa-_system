
<div class="overflow-x-auto relative shadow-md sm:rounded-lg p-3">
    <div class="flex justify-between items-center pb-4 mt-3">
        <div>
            <button
            class=" float-right block focus:outline-none text-white  bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-2 py-1 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-green-900 "
            type="button"> <a href=" {{ route('programs.create') }} ">Crear Programa</a>
        </button>
        </div>
        <div>
            <select wire:model="categoryFilter" class="form-control">
                <option value="">Categoria</option>
                @foreach ($categories as $category )
                <option value="{{ $category->id }}">
                    {{ $category->name }}
                </option>
                    
                @endforeach

            </select>
            {{ $categoryFilter }}
        </div>
        <div>
            <select wire:model="stateFilter" >
                <option value="">Estado</option>
               
                <option value="open_to_postulated">
                    Abierto para Postularse
                </option>
                <option value="close_to_postulated">
                    Cerrado para Postularse
                </option>
                <option value="finish">
                    Finalizado
                </option>
            </select>
           {{ $stateFilter }}
        </div>
      
        <label for="table-search" class="sr-only">Search</label>
        <div class="relative">
            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
            </div>
          
            <input type="text"
                                class="block p-2 pl-10 w-80 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="ingrese el nombre del programa" wire:model="busqueda" />
            
        </div>
    </div>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">Imagen</th>
                <th scope="col" class="py-3 px-6">Nombre del Programa</th>
                <th scope="col" class="py-3 px-6">Categoria</th>
                <th scope="col" class="py-3 px-6">Fecha de Inicio</th>
                <th scope="col" class="py-3 px-6">Limite de Voluntarios</th>
                <th scope="col" class="py-3 px-6">Puntos</th>
                <th scope="col" class="py-3 px-6">Estado</th>
                <th class="py-3 px-6 text-right">Acciones</th>
                
            </tr>
        </thead>
        <tbody>
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
                        
        </tbody>
    </table>
    @if(count($programs) !== 0)
    <div class="flex items-center justify-center bg-gray-100 font-sans overflow-hidden pb-10">
        {{ $programs->links() }}
    </div>
    @endif
</div>

