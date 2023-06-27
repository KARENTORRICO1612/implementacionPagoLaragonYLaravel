<?php

namespace App;

use App\Models\ShoppingCart;

class  CartManager
{
    private $sessionName = "shopping_card_id";

    private $cart;

    public function _construct(){
        $this->cart = $this->findOrCreate($this->findSession());
    }

    public function addToCart($productId){
        $product = $this->getProduct($productId);
        $this->cart->products()->attach($product->id);
    }

    public function deleteProduct($productId)
    {
        return $this->cart->products()->wherePivot('id',$productId)->detach();
    }

    public function getCart(){
        return $this->cart;
    }

    public function getProduct($productId){
        return Producto::where('slug',$productId)->first();
    }


    private function findOrCreate($cartId = null){
            $cart = null;

        if(is_null($cartId))
            $cart = ShoppingCart::create();
        else{
            $cart = ShoppingCart::find($cartId);

            if(is_null($cart))
                $cart = ShoppingCart::create();
        }

        request()->session()->put($this->sessionName,$cart->id);

        return $cart;
    }

    private function findSession()
    {
        return request()->session()->get($this->sessionName);
    }
}