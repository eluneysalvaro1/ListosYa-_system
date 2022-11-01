<footer class="p-4 bg-white md:p-8 lg:p-10 dark:bg-gray-800">

    @php
    // SDK de Mercado Pago
    require base_path('vendor/autoload.php');
    // Agrega credenciales
    MercadoPago\SDK::setAccessToken(config('services.mercadopago.token'));
    // Crea un objeto de preferencia
    $preference = new MercadoPago\Preference();

    // Crea un ítem en la preferencia
    $item = new MercadoPago\Item();
    $item->title = 'Donacion';
    $item->quantity = 1;
    $item->unit_price = 360;
    $preference->items = array($item);
    $preference->save();

    @endphp
    

    <div class="mx-auto max-w-screen-xl text-center">
        <a href="#" class="flex justify-center items-center text-2xl font-semibold text-gray-900 dark:text-white">
            <img src=" {{asset('../images/logolistosya.png')}} " alt="listosya" width="50">
            Fundacion Listos Ya
        </a>
        <p class="my-6 text-gray-500 dark:text-gray-400">Gestion de Voluntarios</p>
        <ul class="flex flex-wrap justify-center items-center mb-6 text-gray-900 dark:text-white">
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6 ">La fundacion</a>
            </li>
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6">Programas</a>
            </li>
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6 ">Contacto</a>
            </li>
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6">Registrarse</a>
            </li>
            <li>
                <div class="cho-container">
                   
                </div>
            </li>
             
                
            

        </ul>
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2022 <a href="#"
                class="hover:underline">Listos Ya</a>. Derechos Reservados. Programacion Grupo Witrun</span>
    </div>
   
    {{-- // SDK MercadoPago.js V2 --}}
    <script src="https://sdk.mercadopago.com/js/v2"></script>
  
    <script>
        console.log("{{ config('services.mercadopago.key') }}")
        const mp = new MercadoPago('{{ config('services.mercadopago.key') }}', {
        locale: 'es-AR'
      });
    
      mp.checkout({
        preference: {
          id: '{{ $preference->id }}'
        },
        render: {
          container: '.cho-container', //clase donde se mostrara el boton
          label: 'Donar', //texto del boton
          
        }
        
      });
    </script>
   
</footer>