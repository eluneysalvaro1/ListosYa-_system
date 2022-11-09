<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class News extends Component
{
   

    public function render()
    {
        $news = HTTP::get('https://listosya.org/framework/wp-json/wp/v2/posts/');
        $news = $news->json();
      
        return view('livewire.news', compact('news'));
    }


}
