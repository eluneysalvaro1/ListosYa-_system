<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UserTable extends Component
{

    public $busqueda;
   

    public function render()
    {
        $users = User::where('name', 'like','%'.$this->busqueda.'%')->orderBy('id','desc')->paginate(10);
        return view('livewire.user-table', compact('users'));
    }

    public function edit($id)
    {
        return view ('/users/edit', compact('id'));
    }

    public function openmodal()
    {
        $this->dispatchBrowserEvent('openModal', ['newName' => "Jota"]);
    }

    public function deleteUser($id)
    {
        $this->openmodal();
        $user=User::find($id);
        $user->delete();
    }
}
