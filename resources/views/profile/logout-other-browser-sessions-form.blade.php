<x-jet-action-section>
    <x-slot name="title">
        Completar informacion
    </x-slot>

    <x-slot name="description">
        Para poder utilizar la aplicacion correctamente deberá ingresar la informacion restante de su perfil. 
    </x-slot>

    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-600">
           <form action="">
            
            <div class="col-span-6 sm:col-span-4 mt-3">
                <x-jet-label for="surname" value="Apellido" />
                <x-jet-input name="surname" class="mt-1 block w-full" type="text" placeholder="" />
            </div>

            <div class="col-span-6 sm:col-span-4 mt-3">
                <x-jet-label for="telephone_number" value="Número de teléfono" />
                <x-jet-input name="telephone_number" class="mt-1 block w-full" type="number" placeholder="" />
            </div>

            <div class="col-span-6 sm:col-span-4 mt-3">
                <x-jet-label for="birthday" value="Fecha de nacimiento" />
                <x-jet-input name="birthday" class="mt-1 block w-full" type="date" placeholder="" />
            </div>

            <div class="col-span-6 sm:col-span-4 mt-3">
                <x-jet-label for="dni" value="Dni" />
                <x-jet-input name="dni" class="mt-1 block w-full" type="number" placeholder="" />
            </div>
        </div>
        
        <div class="flex items-center mt-5">
            <x-jet-button type="submit">
                Enviar información
            </x-jet-button>
            
        </div>
    </form>

             
    </x-slot>
</x-jet-action-section>
