<div style="max-width: 400px">
    <div class="mt-4 mx-4">
        <x-jet-label for="provincia">Seleccione su provincia</x-jet-label>
        <select wire:model="selectedProvincia" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <option value="">Seleccionar Provincia</option>
            @foreach ($provincias as $provincia)
                <option value={{$provincia->id}}>{{$provincia->nombre}}</option>
            @endforeach
        </select>

    </div>
 

    <div class="mt-4 ">
        <select wire:model="selectedCiudad" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm " id="ciudad" name="ciudad">
            <option value="">Seleccionar Ciudad</option>
            @forelse ($ciudades as $ciudad)
                <option value={{$ciudad->id}}>{{ $ciudad->nombre }}</option>
            @empty
                <option value="">Debe seleccionar una provincia.</option>
            @endforelse
        </select>
    </div>
</div>

