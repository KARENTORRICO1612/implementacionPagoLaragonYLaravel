<?php

namespace App\Http\Livewire;

use App\Producto;
use Livewire\Component;

class Search extends Component
{
    public $search;
    public function render()
    {

        dd('hola');

        if(strlen($this->search)>0)
        $products = Producto::select('productos.*','c.name as category')
        ->where('productos.name','like','%'.$this->search.'%')
        ->orWhere('productos.bardcode','like','%'.$this->search.'%')
        ->orWhere('c.name','like','%'.$this->search.'%')
        ->orderBy('products.name','asc')
        ->paginate($this->pagination);
    else
        $products = Producto::select('productos.*','c.name as category')
        ->orderBy('products.name','asc')
        ->paginate($this->pagination);

    return view('livewire.products.component', [
        'data' => $productos
    ]);

    
    ->extends('layouts.theme.app')
    ->section('content');

        return view('livewire.search');
    }
}
