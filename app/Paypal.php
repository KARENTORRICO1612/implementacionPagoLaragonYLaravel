<?php

namespace App;


use PayPalCheckoutSdk\Core\PayPalHttpClient;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PayPalCheckoutSdk\Core\SandboxEnvironment;
use PayPalCheckoutSdk\Orders\OrdersCaptureRequest;
use PayPalCheckoutSdk\Orders\OrdersCreateRequest;
use PayPalHttp\HttpException;

class Paypal
{
    use HasFactory;

    private $client;

    public function __construct() {
        $this->client = new PayPayHttpClient (
            new SandboxEnvironment(config('services.paypal.key'),config('services.paypal.secret'))
        );
    }

    public  function paymentRequest($amount){
        $request = new OrdersCreateRequest ();

        $request->prefer('return=presentation');

        $request->body = [
            "intent" => "CAPTURE",
            "purchase_units" => [
                [
                    "reference_id" => "test_ref_id1",
                    "amount" => [
                        "value" => $amount,
                        "currency_code" => "USD"
                   ]
                ]
            ],

            "application_context" => [
                    "cancel_url" => route('paypal.checkout', ['status' => 'failure']) ,
                    "return_url" => route('paypal.checkout', ['status' => 'success'])
            ]
        ];

        try{

            $response = $this->client->execute($request);

            $approvalUrl = null;

            foreach($response->result->links as $link)
            {
                if($link->rel === "approve"){
                    $approvalUrl = $link->href;
                }
            }

            return $approvalUrl;

            dd($response);
            
        }catch(\PayPalHttp\HttpException $ex)
        {
            dd($ex);
        }
    }

    public function checkout($request){
        $request = new OrdersCaptureRequest($request->token);

        $request->prefer('return=representation');

        try{
            return $this->client->execute($request);

            // return $response;
        }catch(HttpException $ex){
            dd($ex);
        }
    }
}
