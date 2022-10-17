<div style="max-width: 400px">
    <div class="mt-4">
        <x-jet-label for="provincia">Seleccione su provincia</x-jet-label>
        <select wire:model="selectedProvincia" class="block mt-1 w-full" name="selectedProvincia" required>
            <option value="">Seleccionar Provincia</option>
            @foreach ($provincias as $provincia)
                <option value={{$provincia->id}}>{{$provincia->nombre}}</option>
            @endforeach
        </select>

    </div>
 

    <div class="mt-4 ">
        <x-jet-label for="provincia">Seleccione su ciudad</x-jet-label>
        <select wire:model="selectedCiudad" class="block mt-1 w-full" name="selectedCiudad" required>
            <option value="">Seleccionar Ciudad</option>
            @forelse ($ciudades as $ciudad)
                <option value={{$ciudad->id}}>{{ $ciudad->nombre }}</option>
            @empty
                <option value="">Debe seleccionar una provincia.</option>
            @endforelse
        </select>
    </div>
</div>

