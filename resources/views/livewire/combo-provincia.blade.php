<div style="max-width: 400px">
    <div class="mt-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
        <x-jet-label for="provincia">Seleccione su provincia</x-jet-label>
        <select wire:model="selectedProvincia" class="block mt-1 w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" name="selectedProvincia" required>
            <option value="">Seleccionar Provincia</option>
            @foreach ($provincias as $provincia)
                <option value={{$provincia->id}}>{{$provincia->nombre}}</option>
            @endforeach
        </select>

    </div>
 

    <div class="mt-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
        <x-jet-label for="provincia">Seleccione su ciudad</x-jet-label>
        <select wire:model="selectedCiudad" class="block mt-1 w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" name="selectedCiudad" required>
            <option value="">Seleccionar Ciudad</option>
            @forelse ($ciudades as $ciudad)
                <option value={{$ciudad->id}}>{{ $ciudad->nombre }}</option>
            @empty
                <option value="">Debe seleccionar una provincia.</option>
            @endforelse
        </select>
    </div>
</div>

