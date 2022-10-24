<div>
    <div id="muestra-ciudad">
        <div >
            Ciudad:
            {{ $ciudad->nombre }}
        </div>
        <div>
            Provincia:
            {{ $ciudad->provincia }}
        </div>
    </div>
    <div id="combo-provincia" class="hidden">
        @livewire('combo-provincia')
    </div>
    <input type="number" value="{{$idCiudad}}" class="hidden" name="ciudad_id">
    <div>
        <button
            class="block focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-2 py-1 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900"
            type="button" id="mostrar-combo">Editar</button>
    </div>
    <script>
        let combo = document.getElementById('combo-provincia'),
            muestraCiudad = document.getElementById('muestra-ciudad'),
            mostrarComboBtn = document.getElementById('mostrar-combo')

        document.addEventListener('click', e => {
            if (e.target == mostrarComboBtn) {
                muestraCiudad.classList.add('hidden')
                combo.classList.remove('hidden')
            }
        })
    </script>
</div>
