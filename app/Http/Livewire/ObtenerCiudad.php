<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Provincia;
use App\Models\Ciudad;


class ObtenerCiudad extends Component
{
    public $idCiudad;

    
    public function render()
    {
        if ($this->idCiudad==null) {
            $ciudad = Ciudad::find(2000);
        }else{
        $ciudad = Ciudad::find($this->idCiudad);
        }
        return view('livewire.obtener-ciudad', compact('ciudad'));
    }
}
