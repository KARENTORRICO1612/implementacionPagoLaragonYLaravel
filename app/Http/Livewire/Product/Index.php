<?php

namespace App\Http\Livewire\Product;

use App\CartManager;
use Livewire\Component;
use App\Producto;

class Index extends Component
{

    public function addToCart(CartManager $cart, $productId)
    {
        //dd('hola');
        $cart->addToCart($productId);

        session()->flash('message','Producto agregado al carrito de compras');

        $this->emitTo('cart','addToCart');
    }

    public function render()
    {
        return view('livewire.product.index', [
            'products' => Producto::all()
        ]);
    }
}
