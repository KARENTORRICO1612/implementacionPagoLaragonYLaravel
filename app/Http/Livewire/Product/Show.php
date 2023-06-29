<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use App\Producto;

class Show extends Component
{

    public $product;

   public function mount(Producto $product){
        $this->product= $product;
   }

    public function render()
    {
        return view('livewire.product.show');
    }
}
