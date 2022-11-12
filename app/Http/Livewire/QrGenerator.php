<?php

namespace App\Http\Livewire;

use Livewire\Component;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrGenerator extends Component
{
    public $ruta="";
    public $qr ="";

    public function genararqr($ruta){
        dd($ruta);
        $rutaplana = $this->limpiar($ruta);
        QrCode::format('svg')->size(500)->color(0,128,60)->generate( $ruta, '../public/qrcodes/'.$rutaplana);        
        $this->qr = "/qrcodes/".$rutaplana;
    }

    public function limpiar($ruta) {
        $str = preg_replace('/[^a-z]/iu', '', $ruta);
    return $str;
    }

    public function render()
    {
        $ruta = url()->current();
        $rutaplana = $this->limpiar($ruta);
        QrCode::format('svg')->size(500)->color(0,128,60)->generate( $ruta, '../public/qrcodes/'.$rutaplana.".svg");
        //QrCode::format('svg')->size(500)->color(0,128,60)->generate( $ruta, '../public/qrcodes/qrcode.svg');
        
        // $qr = $this->qr;
         $qr = "/qrcodes/".$rutaplana.".svg";
      
         return view('livewire.qr-generator', compact('qr'));
    }
}
