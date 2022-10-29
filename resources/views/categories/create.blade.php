<x-app-layout>

    <div class="mx-5">
        <div class="min-w-screen  bg-gray-100 flex items-center justify-center bg-gray-100 font-sans overflow-hidden">

            <div class="w-1/2 bg-white shadow-md rounded my-6 p-5">

                <div class="flow-root">

                    <div class="">
                        <div class="flex flex-col justify-center items-center pt-5">
                            <h2>Crear categoria nueva</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 margin-tb">
                                <div class="flex flex-col justify-end items-end">
                                    <a class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                                        href="{{ route('categories.index') }}"> Volver</a>
                                </div>
                            </div>
                        </div>

                        @if (session('status'))
                            <div class="alert alert-success mb-1 mt-1">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-6">
                                <label for="name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nombre
                                    de la Categoria</label>
                                <input type="text" name="name" id="name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    placeholder="Categoria" required>
                            </div>
                            <div class="mb-6">
                                <label for="name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Descripcion
                                    de la Categoria</label>
                                <input type="text" name="description" id="description"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    placeholder="Categoria" required>
                            </div>

                        
                            <button type="submit"
                                class="p-5 float-right block focus:outline-none text-white  bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-2 py-1 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-900 ">Crear</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>

</x-app-layout>
