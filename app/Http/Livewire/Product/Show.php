<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use App\Producto;
use App\CartManager;

class Show extends Component
{

    public $product;

   public function mount(Producto $product){
        $this->product= $product;
   }

   public function addToCart(CartManager $cart, $productId)
   {
      $cart->addToCart($productId);

       session()->flash('message','Producto agregado al carrito de compras');

       $this->emitTo('cart','addToCart');
   }

    public function render()
    {
        return view('livewire.Product.Show')
        ->extends('layouts.app')
        ->section('content');

    }
}
