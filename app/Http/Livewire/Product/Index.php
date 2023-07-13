<?php

namespace App\Http\Livewire\Product;

use App\CartManager;
use Livewire\Component;
use App\Producto;

class Index extends Component
{

    public $search;

    public function addToCart(CartManager $cart, $productId)
    {
        //dd('hola');
        $cart->addToCart($productId);

        session()->flash('message', 'Producto agregado al carrito de compras');

        $this->emitTo('cart', 'addToCart');
    }

    public function render()
    {

        if (strlen($this->search) > 0)
            $verProducto = Producto::select('productos.*')
                ->where('productos.name', 'like', '%' . $this->search . '%')
                ->orderBy('productos.name', 'asc')
                ->get();
        else
            $verProducto = Producto::all();


        return view('livewire.product.index', [
            'products' => $verProducto
        ]);
    }

    public function verDetalle()
    {

        $this->emit("verProducto");
    }
}
