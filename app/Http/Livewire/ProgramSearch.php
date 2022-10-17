<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Program;
use App\Models\Category;

class ProgramSearch extends Component
{
    public $busqueda="";

    public function render()
    {
        $programs = Program::where('name', 'like','%'.$this->busqueda.'%')->orderBy('id','desc')->paginate(5);
        $categories = Category::all();
        return view('livewire.program-search', compact('programs','categories'));
    }
}
