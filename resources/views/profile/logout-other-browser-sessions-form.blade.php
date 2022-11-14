<x-jet-action-section>
    <x-slot name="title">
        Completar informacion
    </x-slot>

    <x-slot name="description">
        Para poder utilizar la aplicacion correctamente deberá ingresar la informacion restante de su perfil. 
    </x-slot>

    @if (Auth::user()->surname !== null && Auth::user()->dni !== null && 
         Auth::user()->telephone_number !== null && Auth::user()->birthday !== null && Auth::user()->ciudad_id !== null && Auth::user()->password !== null 
         && Auth::user()->direction !== null && Auth::user()->instagram !== null)
     <x-slot name="content">
        Toda la informacion ha sido cargada con éxito. Ya puede inscribirse a los diferentes programas.
        </x-slot>
        
    @else

    
    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-600 ">
           <form action=" {{route('users.data' , Auth::user()->id)}} " method="POST">
            @csrf
            @if (Auth::user()->surname == null)  
                <div class="col-span-6 sm:col-span-4 mt-3">
                    <x-jet-label for="surname" value="Apellido" />
                    <x-input name="surname" class="mt-1 block w-full" type="text" maxlength="25" placeholder="" required />
                </div>
            @endif
            
            @if (Auth::user()->telephone_number == null)
                <div class="col-span-6 sm:col-span-4 mt-3">
                    <x-jet-label for="telephone_number" value="Número de teléfono" />
                    <x-input name="telephone_number" class="mt-1 block w-full" type="number" min="1000000000" max="99999999999" placeholder="" required/>
                </div>
            @endif
            
            @if (Auth::user()->birthday == null)
                <div class="col-span-6 sm:col-span-4 mt-3">
                    <x-jet-label for="birthday" value="Fecha de nacimiento" />
                    <x-input name="birthday" class="mt-1 block w-full" type="date" placeholder=""  required/>
                </div>
            @endif
            
            @if (Auth::user()->dni == null)
                <div class="col-span-6 sm:col-span-4 mt-3">
                    <x-jet-label for="dni" value="Dni" />
                    <x-input name="dni" class="mt-1 block w-full" type="number" min="10000000" max="99999999" placeholder="" required/>
                </div>
            @endif

            @if (Auth::user()->password == null)
                <div class="col-span-6 sm:col-span-4 mt-3">
                    <x-jet-label for="password" value="Contraseña" />
                    <x-input name="password" class="mt-1 block w-full" type="password" required/>
                </div>
            @endif

            @if (Auth::user()->direction == null)
            <div class="col-span-6 sm:col-span-4 mt-3">
                <x-jet-label for="direction" value="Dirección domicilio" />
                <x-input name="direction" class="mt-1 block w-full" type="text" required/>
            </div>
        @endif

        @if (Auth::user()->instagram == null)
        <div class="col-span-6 sm:col-span-4 mt-3">
            <x-jet-label for="instagram" value="Instagram" />
            <x-input name="instagram" class="mt-1 block w-full" type="text" required/>
        </div>
    @endif

            @if (Auth::user()->ciudad_id == null)
            <div class="mt-4">
                <livewire:combo-provincia />
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
