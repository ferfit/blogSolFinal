<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostIndex extends Component
{
    public $search = '';


    public function render()
    {
        //$posts = Post::get();
        //return view( 'livewire.post-index',compact('posts'));
        return view( 'livewire.post-index');
    }

     public function getResultsProperty(){
        return Post::where('titulo','LIKE','%'.$this->search.'%' )
                    ->orderBy('id', 'desc')
                    ->paginate(5);
    } 
}

