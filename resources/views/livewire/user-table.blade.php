<div>
    {{$search}}
    <div class="mx-5"style="margin-top: 3.5rem;">
        <div class="min-w-screen min-h-screen bg-gray-100 flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
                <div class="lg:w-5/6">
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
        <div class="p-4 bg-white dark:bg-gray-900">
            <label for="table-search" class="sr-only">Buscar</label>
            <div class="relative mt-1">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                </div>
                
                <input type="text" class="block p-2 pl-10 w-80 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Buscar por nombre o apellido o dni" wire:model="search" />
            </div>
        </div>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th class="py-3 px-6 text-center">Nombre</th>
                    <th class="py-3 px-6 text-center">Apellido</th>
                    <th class="py-3 px-6 text-center">Email</th>
                    <th class="py-3 px-6 text-center">Dni</th>
                    <th class="py-3 px-6 text-center">Número de teléfono</th>
                    <th class="py-3 px-6 text-center">Rol</th>
                    <th class="py-3 px-6 text-right">Acciones</th>
                </tr>
            </thead>
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
                                <td class="py-3 px-6 text-left whitespace-nowrap text-center">{{$user->name}}</td>
                                <td class="py-3 px-6 text-left whitespace-nowrap text-center">{{$user->surname}}</td>
                                <td class="py-3 px-6 text-left whitespace-nowrap text-center">{{$user->email}}</td>
                                <td class="py-3 px-6 text-left whitespace-nowrap text-center">{{$user->dni}}</td>
                                <td class="py-3 px-6 text-left whitespace-nowrap text-center">{{$user->telephone_number}}</td>
                                <td class="py-3 px-6 text-left whitespace-nowrap text-center">
                                    @if ($user->role_id == 1)
                                        {{'Admin'}}
                                    @elseif($user->role_id == 2)
                                        {{'Staff'}}
                                    @else    
                                        {{'General'}}
                                    @endif
                                </td>
                                <td class="py-3 flex px-6 text-left whitespace-nowrap justify-end"> 
                                    <button class="block focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-2 py-1 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900" type="button" data-modal-toggle="modal{{$user->id}}">Editar</button>
                                    <button class="block focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-2 py-1 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900" type="button"  data-modal-toggle="popup{{$user->id}}">Borrar</button>
                                </td>
                            </tr>
                        </tbody>
                        @include('users.edit', ['user' => $user])
                                @include('users.delete' , ['id' => $user->id])
                            @empty
                            @endforelse
                </table>
                    </div>
                    {{$users->links()}}
                </div>
            </div>
        </div>
</div>
