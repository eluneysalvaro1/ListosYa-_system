
<div class="p5 justify-items-center	">
    @php
        $ruta = url()->current();
        $rutaplana = $this->limpiar($ruta);
        $qr2 = "/qrcodes/".$rutaplana.".svg";
        //echo $qr2;
    @endphp
    <img src= "{{ $qr2 }}" alt="qr" height=100vh>  
   
</div>
