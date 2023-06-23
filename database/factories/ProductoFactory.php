<?php

 namespace Database\Factories;

use App\Producto;
// use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

// $factory->define(Producto::class,function(Faker $faker)
//     {
//         return [
//            'name' => "Item {$faker->word}",
//            'price' => 200,
//            'description' => $faker->text($maxNbChars = 200),
//            'thumbnail' => "https://picsum.photos/550/600"
//         ];
// });

class ProductoFactory extends Factory{
  
    public function definition(){
        return [
            'name' => $this->faker->name(),
            'price' => $this->faker->randomElement([1,2,3,4,5,6,7,8,9,10]),
            'description' =>$this->faker->randomElement(['description1','description2']),
            'thumbnail' => "https://picsum.photos/550/600"
         ];
    }

}
