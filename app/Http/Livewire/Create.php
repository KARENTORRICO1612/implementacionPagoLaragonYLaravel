<?php

namespace App\Http\Livewire;

use App\Producto;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{

    use WithFileUploads;

    public $name, $price, $description, $thumbnail;

    public function save(){
        // dd($this->name);
        $validate = $this->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'thumbnail' => 'image|max:1024',
        ]);

        $validate['thumbnail'] = $this->thumbnail->store('photos');

        $product = Producto::create($validate);

        return redirect('');
    }

    public function render()
    {
        return view('livewire.product.create');
    }
}
