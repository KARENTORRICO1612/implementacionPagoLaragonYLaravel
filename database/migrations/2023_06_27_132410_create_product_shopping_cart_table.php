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
        Schema::create('product_shopping_cart', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('shopping_cart_id');
            $table->unsignedBigInteger('product_id');

            $table->foreign('shopping_cart_id')->references('id')->on('shopping_cart')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_shopping_cart');
    }
};
