
  <!-- Main modal -->
  <div id="modal{{$user->id}}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-10 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
      <div class="relative my-4 p-4 w-full max-w-md h-full md:h-auto">
          <!-- Modal content -->
          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
              <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="modal{{$user->id}}">
                  <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                  <span class="sr-only">Close modal</span>
              </button>
              {{-- FORMULARIO --}}
              <div class="py-6 px-6 lg:px-8">
                  <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Actualizar datos de {{$user->name}}</h3>
                  <form class="space-y-6" method="post" action="{{route('users.update' , $user->id)}}">
                    @method('PATCH')
                    @csrf
                      <div class="mb-2 flex">
                        <div class="px-1">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nombre</label>
                            <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="" value="{{$user->name}}" required>
                        </div>
                          <div>
                              <label for="surname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Apellido</label>
                              <input type="text" name="surname" id="surname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="{{$user->surname}}" required>

                          </div>
                        </div>
                      <div class="mb-2">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email</label>
                        <x-input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="{{$user->email}}" required />
                    </div>
                    <div class="mb-2">
                        <label for="dni" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Dni</label>
                        <input type="number"  name="dni" id="dni" min="10000000" max="99999999" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="{{$user->dni}}" required>
                    </div>
                    <div class="mb-2">
                        <label for="rol" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Rol</label>
                        <select name="role_id" id="">
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
                    <div class="mb-2">
                        <livewire:combo-provincia />
                    </div>
                      
                      <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Actualizar datos</button>
                  </form>
              </div>
          </div>
      </div>
  </div> 