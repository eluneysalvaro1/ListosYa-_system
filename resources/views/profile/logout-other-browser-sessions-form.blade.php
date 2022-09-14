<x-jet-action-section>
    <x-slot name="title">
        Completar informacion
    </x-slot>

    <x-slot name="description">
        Para poder utilizar la aplicacion correctamente deberá ingresar la informacion restante de su perfil. 
    </x-slot>

    @if (Auth::user()->surname !== null && Auth::user()->dni !== null && 
         Auth::user()->telephone_number !== null && Auth::user()->birthday !== null)
     <x-slot name="content">
        Toda la informacion ha sido cargada con éxito. Ya puede inscribirse a los diferetes programas.
    </x-slot>
        
    @else

    
    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-600">
           <form action=" {{route('users.data' , Auth::user()->id)}} " method="POST">
            @csrf
            @if (Auth::user()->surname == null)  
                <div class="col-span-6 sm:col-span-4 mt-3">
                    <x-jet-label for="surname" value="Apellido" />
                    <x-jet-input name="surname" class="mt-1 block w-full" type="text" placeholder="" />
                </div>
            @endif
            
            @if (Auth::user()->telephone_number == null)
                <div class="col-span-6 sm:col-span-4 mt-3">
                    <x-jet-label for="telephone_number" value="Número de teléfono" />
                    <x-jet-input name="telephone_number" class="mt-1 block w-full" type="number" placeholder="" />
                </div>
            @endif
            
            @if (Auth::user()->birthday == null)
                <div class="col-span-6 sm:col-span-4 mt-3">
                    <x-jet-label for="birthday" value="Fecha de nacimiento" />
                    <x-jet-input name="birthday" class="mt-1 block w-full" type="date" placeholder="" />
                </div>
            @endif
            
            @if (Auth::user()->dni == null)
                <div class="col-span-6 sm:col-span-4 mt-3">
                    <x-jet-label for="dni" value="Dni" />
                    <x-jet-input name="dni" class="mt-1 block w-full" type="number" placeholder="" />
                </div>
            @endif
        </div>
        
        <div class="flex items-center mt-5">
            <x-jet-button type="submit">
                Enviar información
            </x-jet-button>
            
        </div>
    </form>

</x-slot>
@endif 
</x-jet-action-section>
