<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Paypal;

use App\CartManager;
use App\Order;
use Illuminate\Support\Facades\Config;

#SEGUNDO VIDEO
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;


class PaymentController extends Controller
{

   #SEGUNDO VIDEO
    private $apiContext;
    #FIN INICIO DEL SEGUNDO VIDEO

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
    

    // public function payWithPayPal2(){
    //     return '123';
    // }

    // // SEGUNDO VIDEO
    // public function __construct()
    // {
    //     $payPalConfig = Config::get(key:'paypal');

    //     $apiContext = new ApiContext(
    //         new OAuthTokenCredential(
    //             $payPalConfig['client_id'],     //ClienteID
    //             $payPalConfig['secret'],        //ClientSecret
    //         )
    //     );
    // }
}