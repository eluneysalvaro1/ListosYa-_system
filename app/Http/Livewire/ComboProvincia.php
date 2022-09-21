<?php

namespace App\Http\Livewire;


use Livewire\Component;
use App\Models\Provincia;
use App\Models\Ciudad;

class ComboProvincia extends Component
{
    
    public $selectedProvincia = null; public $selectedCiudad = null;
    public $ciudades = []; public $count = '0';

    public function render()
    {
        
        return view('livewire.combo-provincia',[
            'provincias'=>Provincia::all()
        ]);
    }

    public function updatedselectedProvincia($provincia)
    {
        $provincia= Provincia::where('id',$provincia)->get();
        $nombreprovincia = $provincia[0]->nombre;
        $this->ciudades = Ciudad::where('provincia', $nombreprovincia)->get();
    }
    
}
