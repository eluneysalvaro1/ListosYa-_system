<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;


class UserComponent extends Component
{

    public $name = 'Este es mi nombre';
    public $user; 

    public function OpenModale($id){

        $this->dispatchBrowserEvent('openModal' , ['id' => $id]);
    }



    public function render()
    {

        $user = $this->user;

        return view('livewire.user-component', compact('user'));
    }
}
