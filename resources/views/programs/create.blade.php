<x-app-layout>
    <div class="mx-5">
        <div class="  bg-gray-100 flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
            <div class="lg:w-5/6">
                <div class="bg-white shadow-md rounded my-6">
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-left mb-2">
                                <h2>Crear un Programa</h2>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-primary" href="{{ route('programs.index') }}"> Volver</a>
                            </div>
                        </div>
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success mb-1 mt-1">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ route('programs.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Nombre del Programa:</strong>
                                    <input type="text" name="name" class="form-control"
                                        placeholder="Programa Name">
                                    @error('name')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Fecha de Incio:</strong>
                                    <input type="date" name="start_date" class="form-control">
                                    @error('start_date')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Hora de Incio:</strong>
                                    <input type="time" name="start_time" class="form-control">
                                    @error('start_time')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Fecha de fin:</strong>
                                    <input type="date" name="finish_date" class="form-control">
                                    @error('finish_date')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Hora de Fin:</strong>
                                    <input type="time" name="finish_time" class="form-control">
                                    @error('finish_time')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                           
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Ubicacion:</strong>
                                    <input type="text" name="place_event" class="form-control"
                                        placeholder="Direccion o lugar">
                                    @error('place_event')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>puntos para este programa:</strong>
                                    <input type="text" name="program_points" class="form-control"
                                        placeholder="10">
                                    @error('program_points')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Imagen:</strong>
                                    <input type="file" name="program_image" class="form-control">
                                    @error('program_image')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-2">
                                <label for="state"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Estado</label>
                                <select name="state" id="">
                                        
                                        <option value="open_to_postulated">Abierto para Postulaciones</option>
                                        <option value="close_to_postulated">Cerrado para Postulaciones</option>
                                        <option value="finish">Finalizado</option>
                                </select>
                            </div>
                            <select name="category_id" id="">
                                @forelse ($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @empty
                             @endforelse
                            </select>

                            <button type="submit" class=" float-right block focus:outline-none text-white  bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-2 py-1 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900 ">Crear</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
