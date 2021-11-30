<?php

namespace App\Http\Controllers\PaymentController;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class Paypal extends Controller
{
    public function create(Request $request){
        $data = json_decode($request->getContent(), true);
        $package_id = $data['package_id'];
        $package = Package::where('id', $package_id)->first();
        
        //init paypal
        $provider = \Srmklive\PayPal\Facades\PayPal::setProvider();
        $provider->setApiCredentials(config('paypal'));
        $token = $provider->getAccessToken();
        $provider->setAccessToken($token);

        //set product data
        $price = $package->price;
        $description = $package->description;
        
        $order = $provider->createOrder([
            "intent"=> "CAPTURE",
            "purchase_units"=> [
                [
                    "amount"=> [
                        "currency_code"=> "USD",
                        "value"=> $price,
                    ],
                ]
            ]
        ]);

        //Save created order to database
        
        return response()->json($order);
    }

    public function capture(Request $request){
        $data = json_decode($request->getContent(), true);
        $orderId = $data['orderId'];

        //init paypal
        $provider = \Srmklive\PayPal\Facades\PayPal::setProvider();
        $provider->setApiCredentials(config('paypal'));
        $token = $provider->getAccessToken();
        $provider->setAccessToken($token);

        $result = $provider->capturePaymentOrder($orderId);

        //update database

        return response()->json($result);
    }
}
