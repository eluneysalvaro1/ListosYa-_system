<x-app-layout>
    <div class="mx-5">
        <div class="  bg-gray-100 flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
            <div class="w-11/22">
                <div class="bg-white shadow-md rounded my-6">
                    <div class="row">
                        <div class="col-lg-12 margin-tb">

                            {{-- FORMULARIO --}}
                            <div class="py-6 px-6 lg:px-8">
                                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Actualizar datos de
                                    {{ $user->name }}</h3>
                                <form class="space-y-6" method="post" action="{{ route('users.update', $user->id) }}">
                                    @method('PATCH')
                                    @csrf
                                    <div class="mb-2 flex">
                                        <div class="px-1">
                                            <label for="name"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nombre</label>
                                            <input type="text" name="name" id="name"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                placeholder="" value="{{ $user->name }}" required>
                                        </div>
                                        <div>
                                            <label for="surname"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Apellido</label>
                                            <input type="text" name="surname" id="surname"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                value="{{ $user->surname }}" required>

                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <label for="email"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email</label>
                                        <x-input type="email" name="email" id="email"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                            value="{{ $user->email }}" required />
                                    </div>
                                    <div class="mb-2">
                                        <label for="dni"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Dni</label>
                                        <input type="number" name="dni" id="dni" min="10000000"
                                            max="99999999"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                            value="{{ $user->dni }}" required>
                                    </div>
                                    <div class="mb-2">
                                        <label for="direction"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Dirección</label>
                                        <input type="text" name="direction" id="direction" 
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                            value="{{ $user->direction }}" required>
                                    </div>
                                    <div class="mb-2">
                                        <label for="instagram"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Dni</label>
                                        <input type="text" name="instagram" id="instagram" 
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                            value="{{ $user->instagram }}" required>
                                    </div>
                                    <div class="mb-2">
                                        <label for="rol"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Rol</label>
                                        <select name="role_id" id=""
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                            @if ($user->role_id == 1)
                                                <option value="1" selected>Admin</option>
                                                <option value="2">Staff</option>
                                                <option value="3">Usuario General</option>
                                            @elseif($user->role_id == 2)
                                                <option value="1">Admin</option>
                                                <option value="2" selected>Staff</option>
                                                <option value="3">Usuario General</option>
                                            @else
                                                <option value="1">Admin</option>
                                                <option value="2">Staff</option>
                                                <option value="3" selected>Usuario General</option>
                                            @endif
                                        </select>
                                    </div>
                                    <div class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                        @livewire('obtener-ciudad', ['idCiudad' => $user->ciudad_id])

                                    </div>

                                    <button type="submit"
                                        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Actualizar
                                        datos</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
