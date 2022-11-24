<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />
        {{ (session()->get('urlPedido')) }}
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Recordar') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-center mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('¿Olvidó su contraseña?') }}
                    </a>
                @endif

                <x-button class="ml-4">
                    {{ __('Iniciar sesión') }}
                </x-button>
            </div>
        </form>

        <div class="flex flex-col items-center justify-center">

            <x-button class="mt-6 mx-auto">
                <a class="flex items-center justify-center" href="/login-google">
                    <h6 class="pr-4 font-semibold " >Iniciar sesión con Google</h6>
                    <img src=" {{asset("../images/google-icon.svg")}} " alt="iniciar sesion con google">
                </a>
            </x-button>
    
            <x-button class="mt-6 mx-auto">
                <a class="flex items-center justify-center"  href="">
                    <h6 class="pr-4 font-semibold">Iniciar sesión con Facebook</h6>
                    <img width="25px" src=" {{asset("../images/facebook-icon.svg")}} " alt="iniciar sesion con facebook">
                </a>
            </x-button>
        </div>
        
  

    </x-jet-authentication-card>
</x-guest-layout>
