<div>

    <div class="mt-4">
        <x-jet-label for="provincia">Seleccione su provincia</x-jet-label>
        <select wire:model="selectedProvincia" class="form-control">
            <option value="">Seleccionar Provincia</option>
            @foreach ($provincias as $provincia)
                <option value={{ $provincia->id }}>{{ $provincia->nombre }}</option>
            @endforeach
        </select>

    </div>
 

    <div class="mt-4">
        <select wire:model="selectedCiudad" class="form-control" id="ciudad" name="ciudad">
            <option value="">Seleccionar Ciudad</option>
            @forelse ($ciudades as $ciudad)
                <option value={{ $ciudad->id }}>{{ $ciudad->nombre }}</option>
            @empty
                <option value="">PRIMERO DEBE SELECCIONAR PROVINCIA</option>
            @endforelse
        </select>
    </div>
</div>

