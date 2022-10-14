<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UserTable extends Component
{

    public $search;


    public function render()
    {
        $users = User::where('name', 'like' , '%' . $this->search . '%')
                        ->orderBy('id','desc')->paginate(10);
        $count = 0;
        return view('livewire.user-table', compact('users', 'count'));
    }
}
