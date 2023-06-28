<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Paypal;

use App\CartManager;
use App\Models\Order;

class PaymentController extends Controller
{
    public function paypalPaymentRequest(CartManager $cart, Paypal $paypal)
    {
        return redirect()->away($paypal->paymentRequest($cart->getAmount()));
    }

    public function paypalCheckout(Request $request, CartManager $cart,Paypal $paypal, $status)
    {
        if($status == "success"){
            $response  = $paypal->checkout($request);
            dd($response);

            if(!is_null($response)){

                $response->shopping_cart_id = $cart->getCart()->id ;

                Order::createFromResponse($response);

                session()->flash('message','Compra exitosa, hemos enviado un correo con un resumen de tu compra');

                return redirect()->route('welcome');
            }
        }
    }
}
