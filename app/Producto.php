<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = ['name','price','description','thumbnail'];

    public function getRouteKeyName(){
        return 'slug';
    }

    protected static function booted(){
        static::creating(function($product){
            $slug = Str::slug($product->name,'-');

            $product->slug = Producto::where('slug',$slug)->exists() ? ($slug .uniqid()) : $slug;
        });
    }
}
