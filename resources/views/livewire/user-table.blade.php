<div class="mx-5 overflow-x-auto relative shadow-md sm:rounded-lg p-3 ">
    <div class="bg-gray-100 flex items-center justify-center bg-gray-100 font-sans">
        <div class="lg:w-5/6">
            <div class="relative shadow-md sm:rounded-lg">
                <div class="p-4 bg-white dark:bg-gray-900">
                    <label for="table-search" class="sr-only">Buscar</label>
                    <div class="relative mt-1">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>

                        <input type="text" wire:model="busqueda"
                            class="block p-2 pl-10 w-80 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Buscar por nombre o apellido o dni" />
                    </div>
                </div>
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th class="py-3 px-6 text-center">Dni</th>
                            <th class="py-3 px-6 text-center">Nombre</th>
                            <th class="py-3 px-6 text-center">Apellido</th>
                            <th class="py-3 px-6 text-center">Email</th>
                            
                            <th class="py-3 px-6 text-center">Número de teléfono</th>
                            <th class="py-3 px-6 text-center">Rol</th>
                            <th class="py-3 px-6 text-right">Acciones</th>
                        </tr>
                    </thead>
                    @php
                        $count = 0;
                    @endphp
                    @forelse ($users as $user)
                        @if ($count % 2 == 0)
                            <tbody class="text-gray-800 text-sm font-light bg-white">
                            @else
                            <tbody class="text-gray-800 text-sm font-light bg-gray-100">
                        @endif
                        @php
                            $count++;
                        @endphp
                        <tr class="border-b border-gray-200 hover:bg-gray-200">
                            <td class="py-3 px-6 text-left whitespace-nowrap text-center">{{ $user->dni }}</td>
                            <td class="py-3 px-6 text-left whitespace-nowrap text-center">{{ $user->name }}</td>
                            <td class="py-3 px-6 text-left whitespace-nowrap text-center">{{ $user->surname }}</td>
                            <td class="py-3 px-6 text-left whitespace-nowrap text-center">{{ $user->email }}</td>
                            
                            <td class="py-3 px-6 text-left whitespace-nowrap text-center">
                                {{ $user->telephone_number }}</td>
                            <td class="py-3 px-6 text-left whitespace-nowrap text-center">
                                @if ($user->role_id == 1)
                                    {{ 'Admin' }}
                                @elseif($user->role_id == 2)
                                    {{ 'Staff' }}
                                @else
                                    {{ 'General' }}
                                @endif
                            </td>
                            <td>
                                @if ($user->dni !== '')
                                    
                                @endif
                                <div class="inline-flex">
                                    @if ($user->dni !== null || $user->ciudad_id !== null)
   
                                            <button
                                            class=" float-right block focus:outline-none text-white  bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-2 py-1 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-green-900 "
                                            type="button"> <a href=" {{ route('users.edit', $user->id) }} ">Editar</a>
                                        </button>
                                    @else
                                    <button
                                    class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-2 py-1 mr-2 mb-2 dark:focus:ring-yellow-900"
                                    type="button"> <a>F./D.</a>
                                </button>
                                    @endif
                                    <button id="{{ $user->id }}" onclick="clickAcepts({{ $user->id }})"
                                        class="buttonDelete block focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-2 py-1 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"
                                        type="button" id="">Borrar</button>
                                </div>


                            </td>
                        </tr>
                        </tbody>

                    @empty
                        <tbody>
                            <tr>
                                <td class="py-3 px-6 text-left whitespace-nowrap text-center" colspan="7">No hay
                                    resultados disponibles</td>
                            </tr>
                        </tbody>
                    @endforelse

                </table>
            </div>
            {{ $users->links() }}
            <button data-modal-toggle="popup" class="hidden" id="deleteButton"></button>
        </div>

    </div>
    <script type="text/javascript">
        window.CSRF_TOKEN = '{{ csrf_token() }}';
    </script>

    <script>
        let buttons = document.querySelectorAll('.buttonDelete')

        function clickAcepts(ele) {
            let buttonDelete = document.getElementById('deleteButton'),
                buttonAcept = document.getElementById('buttonAcept')
            buttonDelete.click()
            buttonAcept.addEventListener('click', e => {

                let data = fetch(`../users/delete/${ele}`, {
                        method: 'POST',
                        cache: 'no-cache',
                        headers: {
                            "X-CSRF-TOKEN": window.CSRF_TOKEN,
                        }
                    })
                    .then((response) => response.json())
                    .then((data) => {
                        if (data) {
                            location.reload()
                        }
                    });
            })
        }
    </script>

</div>
