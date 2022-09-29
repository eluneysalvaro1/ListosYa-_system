<x-app-layout>

    @php
        $count = 0;
    @endphp


<div class="mx-5"style="margin-top: 3.5rem;">
    <div class="min-w-screen min-h-screen bg-gray-100 flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
        <div class="lg:w-5/6">
            <div class="bg-white shadow-md rounded my-6">
                <table class="min-w-max w-full table-auto">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-center">Nombre</th>
                            <th class="py-3 px-6 text-center">Apellido</th>
                            <th class="py-3 px-6 text-center">Email</th>
                            <th class="py-3 px-6 text-center">Dni</th>
                            <th class="py-3 px-6 text-center">Número de teléfono</th>
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
                            <td class="py-3 flex px-6 text-left whitespace-nowrap justify-end"> 
                                <button class="block focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-2 py-1 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900" type="button" data-modal-toggle="modal{{$user->id}}">Editar</button>
                                <button type="button" class="block focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-2 py-1 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900" data-modal-toggle="popup{{$user->id}}">Borrar</button>
                            </td>
                        </tr>
                    </tbody>
                    @include('users.edit', ['user' => $user])
                    @include('users.delete' , ['id' => $user->id])
                @empty
                @endforelse
                </table>
            </div>
        </div>
    </div>
    
</x-app-layout>
