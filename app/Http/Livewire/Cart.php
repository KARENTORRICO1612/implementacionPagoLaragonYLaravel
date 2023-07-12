<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\CartManager;


class Cart extends Component
{
    public $cart;

    protected $listeners = ['addToCart'];
    

    public function mount(CartManager $cart)
    {
        $this->cart = $cart->getCart();


        //dd(new CartManager());
        // $this->cart = (new CartManager())->getCart();
        // dd((new CartManager())->getCart()->products()->count());
    }

    public function addToCart()
    {
        
    }

    public function render()
    {
        return view('livewire.cart');
    }

 
}
