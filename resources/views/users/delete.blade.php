    <x-app-layout>

        <div class="mx-5">
            <div class="  bg-gray-100 flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
                <div class="w-1/2">
                    
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                               
                                <div class="p-6 text-center">
                                    <svg aria-hidden="true" class="mx-auto mb-4 w-14 h-14 text-gray-400 dark:text-gray-200"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Estás seguro de
                                        querer borrar a este usuario?</h3>
                                    <form action="{{ route('users.destroy', $id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf

                                        <input type="text" name="user" value="{{ $id }}" hidden>
                                        <button data-modal-toggle="popup{{ $id }}" type="submit"
                                            class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                            Si, estoy seguro.
                                        </button>
                                    </form>

                                    <button data-modal-toggle="popup{{ $id }}" type="button"
                                        class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No,
                                        cancelar</button>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </x-app-layout>
