<?php

namespace App\Http\Livewire;


use Livewire\Component;
use App\Models\Provincia;
use App\Models\Ciudad;

class ComboProvincia extends Component
{
    public $selectedProvincia = null, $selectedCiudad = null;

    public $ciudades = null;

    public function render()
    {
        
        return view('livewire.combo-provincia',[
            'provincias' => Provincia::all()
        ]);
    }

    public function updatedselectedProvincia($provincia_id){
        dd($this->ciudades);
        $this->ciudades = Ciudad::where('provincia',$provincia_id)->get();
        
    }
}
