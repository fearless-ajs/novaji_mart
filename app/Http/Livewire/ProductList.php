<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class ProductList extends Component
{

    use WithPagination;

    public function mount(){
        $this->getProducts();
    }

    public function getProducts(){

    }

    public function render()
    {
        return view('livewire.product-list', [

        ]);
    }
}
