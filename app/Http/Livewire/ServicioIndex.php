<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Servicio;
use Livewire\WithPagination;

class ServicioIndex extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    
    public $search= "";

    public function updatingSearch()
    {
        $this->resetPage();
    }
    
    public function render()
    {
        //$posts = Post::get();
        //return view( 'livewire.post-index',compact('posts'));
        return view( 'livewire.servicio-index');
    }

     public function getResultsProperty(){
        return Servicio::where('titulo','LIKE','%'.$this->search.'%' )->paginate(5);
    } 
}
