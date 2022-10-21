<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Program;
use App\Models\Category;

class ProgramSearch extends Component
{
    public $busqueda="";
    public $categoryFilter="";
    public $stateFilter="";
    

    public function render()
    {
        $programs=[];
        if($this->categoryFilter=="" && $this->stateFilter=="" && $this->busqueda!==""){
        $programs = Program::where('name', 'like','%'.$this->busqueda.'%')
                    ->orwhere('place_event', 'like','%'.$this->busqueda.'%')
                    ->orderBy('id','desc')->paginate(5);
        }elseif($this->categoryFilter!=="" && $this->stateFilter!=="" && $this->busqueda!==""){
            $programs = Program::where('name', 'like','%'.$this->busqueda.'%')
                    ->orwhere('place_event', 'like','%'.$this->busqueda.'%')
            ->where('category_id', 'like','%'.$this->categoryFilter.'%')
            ->where('state', 'like','%'.$this->stateFilter.'%')
            ->orderBy('id','desc')->paginate(5);
        }elseif($this->categoryFilter!=="" && $this->stateFilter=="" && $this->busqueda==""){
            $programs = Program::where ('category_id', 'like','%'.$this->categoryFilter.'%')
            ->orderBy('id','desc')->paginate(5);
        }elseif($this->categoryFilter =="" && $this->stateFilter!=="" && $this->busqueda!==""){
            $programs = Program::where('name', 'like','%'.$this->busqueda.'%')
                    ->orwhere('place_event', 'like','%'.$this->busqueda.'%')

            ->where('state', 'like','%'.$this->stateFilter.'%')
            ->orderBy('id','desc')->paginate(5);
        }elseif($this->categoryFilter !=="" && $this->stateFilter=="" && $this->busqueda!==""){
            $programs = Program::where('state', 'like','%'.$this->stateFilter.'%')
            ->orderBy('id','desc')->paginate(5);
         
        }elseif($this->categoryFilter =="" && $this->stateFilter=="" && $this->busqueda==""){
            $programs = Program::orderBy('id','desc')->paginate(5);
        }elseif($this->categoryFilter =="" && $this->stateFilter=="" && $this->busqueda!==""){
            $programs = Program::where('category_id', 'like','%'.$this->categoryFilter.'%')
            ->where('state', 'like','%'.$this->stateFilter.'%')
            ->orderBy('id','desc')->paginate(5);
        }
                    
                    $categories = Category::all();
        return view('livewire.program-search', compact('programs','categories'));
    }
}
