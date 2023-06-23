<?php

// namespace DatabaseSeeders;
// use Database\Producto;

use App\Task;
use Illuminate\Database\Seeder;
use App\Producto;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // Producto::factory(Producto::class,5)->create();
         Producto::factory(10)->create();
        // factory(\App\Task::class)->times(5)->create();
        Task::factory(5)->create();
    }
}
