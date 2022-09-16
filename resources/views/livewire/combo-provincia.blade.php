<div class="mt-4">
    

        <label>Seleccionar Provincia</label>
        <select  wire:model="selectedProvincia" class="form-select">
            <option value="">Seleccionar Provincia</option>
            @foreach ($provincias as $provincia)
                <option value={{$provincia->nombre}}>{{$provincia->nombre}}</option>
            @endforeach
        </select>

</div>

<div class="mt-4">

<select wire:model="selectedCiudad" class="form-select" >
    <option  value="">Seleccionar Ciudad</option>
    @forelse ($ciudades as $ciudad)
    <option value={{$ciudad->nombre}}>>{{$ciudad->nombre}}</option>
@empty 
<option value="">PRIMERO DEBE SELECCIONAR PROVINCIA</option>
@endforelse
</select>
    

     
        
            
            
        
 
</div>

