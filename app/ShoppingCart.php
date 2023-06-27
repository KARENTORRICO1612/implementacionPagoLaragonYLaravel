<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class ShoppingCart extends Model
{
    use HasFactory;

    public function amount(){
        return $this->products->count();
    }

    public function products(){
        return $this->belongsToMany(Many::class)->withPivot('id');
    }
}


// class ShoppingCart extends Model
// {
//     use HasFactory;

//     public function up(){
//         Schema::create('shopping_carts', function(Blueprint $table){
//             $table->id();
//             $table->integer('status')->default(0);
//             $table->timestamps();
//         });
//     }
// }


