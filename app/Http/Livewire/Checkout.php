<?php

namespace App\Http\Livewire;

use App\CartManager;
use Livewire\Component;

class Checkout extends Component
{
    public $cart;

    public function mount(CartManager $cart)
    {
        $this->cart = $cart->getCart();

    }

    public function deleteProduct(CartManager $cart, $productId)
    {
        $cart->deleteProduct($productId);

        session()->flash('message','Producto removido');
        
        $this->emitTo('cart','addToCart');
    }

    public function hydrate(){
        $this->cart = (app(CartManager::class))->getCart();
    }

    public function render()
    {
        return view('livewire.checkout', [
            'products' => $this->cart->products
        ]);
    }
}
