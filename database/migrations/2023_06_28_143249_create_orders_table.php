<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            $table->integer("shopping_cart_id")->nullable()->unique();
            $table->integer('total')->default(0);
            $table->string('email')->nullable();
            $table->text('address')->nullable();
            $table->string('name')->nullable();
            $table->string("address_line_1")->nullable();
            $table->string("address_line_2")->nullable();
            $table->string("address_area_1")->nullable();
            $table->string("address_area_2")->default("");
            $table->string("postal_code")->default("");
            $table->string("country_code")->default("");


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
