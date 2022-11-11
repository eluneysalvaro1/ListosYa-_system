<?php

namespace App\Http\Livewire;

use Livewire\Component;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrGenerator extends Component
{
    public $ruta="";


    public function render()
    {
        
        $ruta="http://listosya.org";
        
        QrCode::format('svg')->size(500)->color(0,128,60)->generate( $ruta, '../public/qrcodes/qrcode.svg');
        
         $qr = "/qrcodes/qrcode.svg";
     
        return view('livewire.qr-generator', compact('qr'));
    }
}
