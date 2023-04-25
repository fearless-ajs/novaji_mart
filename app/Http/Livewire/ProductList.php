<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductList extends Component
{

    use WithPagination;

    protected $listeners = [
        'showProductList'   => '$refresh'
    ];

    public function mount(){
        $this->getProducts();
    }

    public function getProducts(){
        return Product::orderBy('created_at', 'DESC');
    }

    public function render()
    {
        return view('livewire.product-list', [
            'products'  => $this->getProducts()->paginate(6)
        ]);
    }
}
