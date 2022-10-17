<div>
    {{ $this->busqueda }}

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
        <div class="bg-green-200">
        <table class="table-auto">
            <thead>
                <tr>
                <tr>ID</tr>
                <tr>Nombre</tr>
                <tr>Apellido</tr>
                <tr>Fec. Cum.</tr>
                <tr>Email</tr>
                <tr>DNI</tr>
                <tr>Rol</tr>
              
                <tr>Puntos</tr>
                <tr>Accion</tr>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->surname }}</td>
                        <td>{{ $user->birthday }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->dni }}</td>
                        <td>{{ $user->role_id }}</td>
                        
                        <td>{{ $user->points }}</td>
                        <td>
                            <div class="inline-flex">
                                
                                <form action="{{route("users.edit",$user->id) }}" method="get">
                                @csrf
                                    <button
                                        class="block focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-2 py-1 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900"
                                        type="submit" >Editar</button>
                                </form>
                                <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-r">
                                  Eliminar
                                </button>
                              </div>
                        </td>
                    </tr>
                  
                @endforeach
        
            </tbody>
            
        </table>
        
        </div>
        <div>
            {{ $users->links() }}
        </div>
    </div>
