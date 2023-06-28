<?php

use App\Http\Livewire\Create;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $title = "Articulos";

    return view('welcome',compact('title'));
});

Route::get('/', function () {

    return view('welcome');

})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/crear',[Livewire\Product\Create::class])->name('products.create')->middleware('admin');
//Route::get('/crear','product.create')->name('products.create')->middleware('admin');


Route::get('/productos/{product}', 'products.show')->name('products.show');
// Route::livewire('/checkout','checkout')->name('checkout');

Route::get('/paypal/payment', 'PaymentController@paypalPaymentRequest')->name('paypal.payment');
Route::get('/paypal/checkout/{status}', 'PaymentController@paypalCheckout')->name('paypal.checkout');