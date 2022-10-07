<x-app-layout>
   
    <div class="mx-5">
        <div class="min-w-screen  bg-gray-100 flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
            <div class="w-1/2">
                <div class="flow-root">
                <div class="bg-white shadow-md rounded my-6">
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-left mb-2">
                                <h2>Crear un Programa</h2>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-primary" href="{{ route('categories.index') }}"> Volver</a>
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
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <div class="mb-2 ">
                                        <div class="px-1">
                                            <label for="name"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nombre de la Categoria</label>
                                            <input type="text" name="name" id="name"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                placeholder="Categoria" required>
                                        </div>
                                    </div>
                                    <div class="mb-2 ">
                                        <div class="px-1">
                                            <label for="name"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Descripcion </label>
                                            <input type="textarea" name="description" id="description"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                placeholder="Ingres descripcion" required>
                                        </div>
                                    </div>
                                    
                            

                            <button type="submit" class=" float-right block focus:outline-none text-white  bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-2 py-1 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900 ">Crear</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
