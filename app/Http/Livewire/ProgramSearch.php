<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Program;
use App\Models\Category;

class ProgramSearch extends Component
{
    public $busqueda = "";
    public $categoryFilter = "";
    public $stateFilter = "";


    public function render()
    {
        $programs = [];

        if ($this->categoryFilter == "" && $this->stateFilter == "" && $this->busqueda == "") {
            //todos vacios 000
            $programs = Program::orderBy('start_date', 'desc')->paginate(4);
        } elseif ($this->categoryFilter !== "" && $this->stateFilter == "" && $this->busqueda == "") {
            //solo categoria 100
            $programs = Program::where('category_id', 'like', '%' . $this->categoryFilter . '%')
                ->orderBy('start_date', 'desc')->paginate(4);
        } elseif ($this->categoryFilter !== "" && $this->stateFilter !== "" && $this->busqueda == "") {
            //solo categoria y estado 110
            $programs = Program::where('category_id', 'like', '%' . $this->categoryFilter . '%')
                ->where('state', 'like', '%' . $this->stateFilter . '%')
                ->orderBy('start_date', 'desc')->paginate(4);
        } elseif ($this->categoryFilter !== "" && $this->stateFilter !== "" && $this->busqueda !== "") {
            // por categoria, estadio y buscador 111
            $programs = Program::where('name', 'like', '%' . $this->busqueda . '%')
                ->orwhere('place_event', 'like', '%' . $this->busqueda . '%')
                ->where('category_id', 'like', '%' . $this->categoryFilter . '%')
                ->where('state', 'like', '%' . $this->stateFilter . '%')
                ->orderBy('start_date', 'desc')->paginate(4);
        } elseif ($this->categoryFilter == "" && $this->stateFilter !== "" && $this->busqueda == "") {
            // por estado 010
            $programs = Program::where('state', 'like', '%' . $this->stateFilter . '%')
                ->orderBy('start_date', 'desc')->paginate(4);
        } elseif ($this->categoryFilter == "" && $this->stateFilter !== "" && $this->busqueda !== "") {
            // por estado y busqueda 011
            $programs = Program::where('name', 'like', '%' . $this->busqueda . '%')
                ->orwhere('place_event', 'like', '%' . $this->busqueda . '%')

                ->where('state', 'like', '%' . $this->stateFilter . '%')
                ->orderBy('start_date', 'desc')->paginate(4);
        } elseif ($this->categoryFilter == "" && $this->stateFilter == "" && $this->busqueda !== "") {
            // solo por busqueda 001
            $programs = Program::where('name', 'like', '%' . $this->busqueda . '%')
                ->orwhere('place_event', 'like', '%' . $this->busqueda . '%')
                ->orderBy('start_date', 'desc')->paginate(4);
        } elseif ($this->categoryFilter !== "" && $this->stateFilter == "" && $this->busqueda !== "") {
            // por categoria y busqueda 101
            $programs = Program::where('name', 'like', '%' . $this->busqueda . '%')
                ->orwhere('place_event', 'like', '%' . $this->busqueda . '%')
                ->where('state', 'like', '%' . $this->stateFilter . '%')
                ->orderBy('start_date', 'desc')->paginate(4);
        }

        $categories = Category::all();
        return view('livewire.program-search', compact('programs', 'categories'));
    }
}
