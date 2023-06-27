<?php

namespace App\Http\Livewire;

use App\CartManager;
use Livewire\Component;

class Cart extends Component
{
    public $cart;

    protected $listeners = ['addToCart' => 'addToCart'];

    public function mount(CartManager $cart)
    {
        $this->cart = $cart->getCart();
    }

    public function addToCart()
    {
        
    }

    public function render()
    {
        return view('livewire.cart');
    }
}
