<?php

namespace App\Http\Livewire;


use Livewire\Component;
use App\Models\Provincia;
use App\Models\Ciudad;

class ComboProvincia extends Component
{
    public $selectedProvincia = null, $selectedCiudad = null;

    public $ciudades = [];

    public function render()
    {
        
        return view('livewire.combo-provincia',[
            'provincias'=> Provincia::all()]
            
        );
    }

    public function updatedselectedProvincia($nombre) {
        dd($this->ciudades);
        $this->ciudades = Ciudad::where('provincia',$nombre)->get();
        
    }
}
