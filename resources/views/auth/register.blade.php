

<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />
        <div class="flex flex-col items-center justify-center">

            <x-jet-button class="mt-6 mx-auto">
                <a class="flex items-center justify-center bg-green-600" href="/login-google">
                    <h6 class="pr-4 font-semibold " >Iniciar sesión con Google</h6>
                    <img src=" {{asset("../images/google-icon.svg")}} " alt="iniciar sesion con google">
                </a>
            </x-jet-button>
    
            <x-jet-button class="mt-6 mx-auto">
                <a class="flex items-center justify-center"  href="">
                    <h6 class="pr-4 font-semibold">Iniciar sesión con Facebook</h6>
                    <img width="25px" src=" {{asset("../images/facebook-icon.svg")}} " alt="iniciar sesion con facebook">
                </a>
            </x-jet-button>
        </div>
        

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mt-4">
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" maxlength="20" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4"> 
                <x-jet-label for="surname" value="{{ __('Apellido') }}" />
                <x-input id="surname" maxlength="20" class="block mt-1 w-full" type="text" name="surname" :value="old('surname')" required autofocus autocomplete="surname" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" pattern="^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$" :value="old('email')" required />
                <small class="text-sm text-gray-500">El email debe tener un formato similar a: este@ejemplo.com</small>
            </div>

            <div class="mt-6">
                <x-jet-label for="dni" value="{{ __('Número de documento') }}" />
                <x-input id="dni" class="block mt-1 w-full" type="number" name="dni" :value="old('dni')" min="10000000" max="99999999" required />
            </div>

            <div class="mt-6">
                <x-jet-label for="telephone_number" value="{{ __('Número de teléfono') }}" />
                <x-input id="telephone_number" class="block mt-1 w-full" type="number" name="telephone_number" min="100000000" max="99999999999" :value="old('telephone_number')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="birthday" value="{{ __('Fecha de nacimiento') }}" />
                <x-input id="birthday" class="block mt-1 w-full" type="date" name="birthday" :value="old('birthday')" required />
            </div>
            <div class="mt-4">
                <x-jet-label for="instagra," value="{{ __('Instagram') }}" />
                <x-input id="instagram" class="block mt-1 w-full" type="text" name="instagram" :value="old('instagram')" required />
            </div><div class="mt-4">
                <x-jet-label for="direction" value="{{ __('Direccion') }}" />
                <x-input id="direction" class="block mt-1 w-full" type="text" name="direction" :value="old('direction')" required />
            </div>
            <div class="mt-4">
                <livewire:combo-provincia />
             </div>

            <div class="mt-4">
                <x-jet-label for="passwordn" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="password" />
            </div>
            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>
            
            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{'¿Ya se encuentra registrado?'}}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>

    </x-jet-authentication-card>
</x-guest-layout>

@section ('script')
