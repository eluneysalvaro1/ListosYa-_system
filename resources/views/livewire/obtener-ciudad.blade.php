<div>
    <div id="muestra-ciudad">
        @if ($ciudad !== null)
        <div >
            Ciudad:
            {{ $ciudad->nombre }}
        </div>
        <div>
            Provincia:
            {{ $ciudad->provincia }}
        </div>
        @endif
    </div>
    @if ($ciudad !== null)
    <div id="combo-provincia" class="hidden">
        @livewire('combo-provincia')
    </div>
    <input type="number" value="{{$idCiudad}}" class="hidden" name="ciudad_id">
    <div>
        <button
            class="block focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-2 py-1 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-900"
            type="button" id="mostrar-combo">Editar</button>
    </div>
    @else
        <div id="combo-provincia" >
            @livewire('combo-provincia')
        </div>

    @endif
   
    <script>
        let combo = document.getElementById('combo-provincia'),
            muestraCiudad = document.getElementById('muestra-ciudad'),
            mostrarComboBtn = document.getElementById('mostrar-combo'),
            ciudad = document.getElementById('ciudad'),
            provincia = document.getElementById('provincia')

            ciudad.removeAttribute('required' , 'false')
            provincia.removeAttribute('required' , 'false')



        document.addEventListener('click', e => {
            if (e.target == mostrarComboBtn) {
                muestraCiudad.classList.add('hidden')
                combo.classList.remove('hidden')
                ciudad.setAttribute('required' , '')
            provincia.setAttribute('required' , '')
            }
        })
    </script>
</div>
