<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UserTable extends Component
{

    public $busqueda;
    public $confirmingUserDeletion = false;
    public $confirmDeletion = false;


    public function render()
    {
        $users = User::where('name', 'like','%'.$this->busqueda.'%')
        ->orwhere('dni','like','%'.$this->busqueda.'%')
        ->orwhere('surname','like','%'.$this->busqueda.'%')
        ->orderBy('id','desc')->paginate(10);
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
        
        $user=User::find($id);
        $user->delete();
        $this->confirmingUserDeletion = false;
        
    }

    public function changeConfirmDeletion($bool, $id){
        if ($bool) {
            $this->deleteUser($id);
        }
    }


    public function confirmUserDeletion($id)
    {
       
        $this->confirmingUserDeletion = $id;
    }
}
