<x-jet-form-section submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('Información de perfil.') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Actualiza información de tu perfil.') }}
    </x-slot>
    @if (Auth::user()->surname == null or Auth::user()->telephone_number == null or Auth::user()->birthday == null or Auth::user()->dni == null
    or Auth::user()->password == null or Auth::user()->ciudad_id == null )
     <x-slot name="form">
       
        <div class="mt-3 max-w-xl text-sm text-red-600">
            <h3>
                {{ __('Faltan completar datos personales') }}
            </h3>
        </div>
    </x-slot>
    @else
   
    <x-slot name="form">

       
        
        <!-- Profile Photo -->
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
                <!-- Profile Photo File Input -->
                <input type="file" class="hidden"
                            wire:model="photo"
                            x-ref="photo"
                            x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

                <x-jet-label for="photo" value="{{ __('Foto de perfil') }}" />

             
                <!-- Current Profile Photo -->
                @if (Auth::user()->profile_photo_path)
                    <div class="mt-2" x-show="! photoPreview">
                        <img src="{{$this->user->profile_photo_url}}" alt="{{ $this->user->name }}" class="rounded-full h-20 w-20 object-cover">
                    </div>

                @elseif(Auth::user()->profile_external_path)
                    <div class="mt-2" x-show="! photoPreview">
                        <img src="{{$this->user->profile_external_path}}" alt="{{ $this->user->name }}" class="rounded-full h-20 w-20 object-cover">
                    </div>
                    
                @elseif (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <div class="mt-2" x-show="! photoPreview">
                        <img src="{{$this->user->profile_photo_url}}" alt="{{ $this->user->name }}" class="rounded-full h-20 w-20 object-cover">
                    </div>
                    
                @endif
                

                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview" style="display: none;">
                    <span class="block rounded-full w-20 h-20 bg-cover bg-no-repeat bg-center"
                          x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                    </span>
                </div>

                <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                    {{ __('Selecciona una nueva foto.') }}
                </x-jet-secondary-button>

                @if ($this->user->profile_photo_path)
                    <x-jet-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                        {{ __('Remover foto.') }}
                    </x-jet-secondary-button>
                @endif

                <x-jet-input-error for="photo" class="mt-2" />
            </div>
        @endif

        <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="{{ __('Name') }}" />
            <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name" autocomplete="name" />
            <x-jet-input-error for="name" class="mt-2" />
        </div>

         <!-- sur Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="surname" value="{{ __('Apellido') }}" />
            <x-jet-input id="surname" type="text" class="mt-1 block w-full" wire:model.defer="state.surname" autocomplete="surname" />
            <x-jet-input-error for="surname" class="mt-2" />
        </div>

         <!-- Telephone -->
         <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="telephone_number" value="{{ __('Número de teléfono') }}" />
            <x-jet-input id="telephone_number" min="100000000" max="999999999" type="text" class="mt-1 block w-full" wire:model.defer="state.telephone_number" autocomplete="telephone_number" />
            <x-jet-input-error for="name" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" />
            <x-jet-input-error for="email" class="mt-2" />
           
            
            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::emailVerification()) && ! $this->user->hasVerifiedEmail())
                <p class="text-sm mt-2">
                    {{ __('Your email address is unverified.') }}

                    <button type="button" class="underline text-sm text-gray-600 hover:text-gray-900" wire:click.prevent="sendEmailVerification">
                        {{ __('Click here to re-send the verification email.') }}
                    </button>
                </p>

                @if ($this->verificationLinkSent)
                    <p v-show="verificationLinkSent" class="mt-2 font-medium text-sm text-green-600">
                        {{ __('A new verification link has been sent to your email address.') }}
                    </p>
                @endif
            @endif
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <x-jet-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
    @endif
</x-jet-form-section>
