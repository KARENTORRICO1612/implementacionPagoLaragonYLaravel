<?php

use App\Http\Livewire\Checkout;
use App\Http\Livewire\Create;
use App\Http\Livewire\Product\Show;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;




Auth::routes();

Route::get('/', function () {

    $title = "Articulos";

    return view('welcome',compact('title'));
});

Route::get('/', function () {

    return view('welcome');

})->name('welcome');

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/crear',[Livewire\Product\Create::class])->name('products.create')->middleware('admin');
Route::get('/crear',Create::class)->name('products.create')->middleware('admin');


Route::get('/productos/{product}', Show::class)->name('products.show');   


// Route::get('producto/{product}', 'products.show')->name('products.show'); ---> EDICION 1
// Route::get('products',Producto::class);
// Route::get('books/{id}', [BooksController::class, 'destroy'])->name('books.destroy'); ---> EJEMPLO DE INTERNET


Route::get('/checkout',Checkout::class)->name('checkout');

Route::get('/paypal/payment', [App\Http\Controllers\PaymentController::class, 'paypalPaymentRequest'])->name('paypal.payment');

Route::get('/paypal/pay', 'PaymentController@payWithPayPal');
Route::get('/paypal/status', 'PaymentController@payPalStatus');
// Route::get('/paypal/payment', 'PaymentController@paypalPaymentRequest')->name('paypal.payment');
Route::get('/paypal/checkout/{status}', 'PaymentController@paypalCheckout')->name('paypal.checkout');

//Payment SEGUNDO VIDEO
//Route::get(url:'/paypal/pay2', admin:'PaymentController@payWithPayPal2');
Route::get('/paypal/pay2','App\Http\Controllers\PaymentController@payWithPayPal2');