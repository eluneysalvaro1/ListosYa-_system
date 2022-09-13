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
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
           </form>
        </div>

        <div class="flex items-center mt-5">
            <x-jet-button wire:click="confirmLogout" wire:loading.attr="disabled">
                {{ __('Log Out Other Browser Sessions') }}
            </x-jet-button>

            <x-jet-action-message class="ml-3" on="loggedOut">
                {{ __('Done.') }}
            </x-jet-action-message>
        </div>

             
    </x-slot>
</x-jet-action-section>
