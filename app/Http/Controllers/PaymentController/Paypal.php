<?php

namespace App\Http\Controllers\PaymentController;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        
        
        return response()->json($order);
    }

    public function capture(Request $request){
        $data = json_decode($request->getContent(), true);
        $orderId = $data['orderId'];
        $package_id = $data['package_id'];
        $user_id = $data['user_id'];

        //init paypal
        $provider = \Srmklive\PayPal\Facades\PayPal::setProvider();
        $provider->setApiCredentials(config('paypal'));
        $token = $provider->getAccessToken();
        $provider->setAccessToken($token);

        $result = $provider->capturePaymentOrder($orderId);

        $package = Package::where('id', $package_id)->first();
        $user = User::where('id', $user_id)->first();

        $user->credits = $user->credits + $package->credits;
        $user->save();

        //Save created order to database
        $package->orders()->create([
            'user_id'=>$user_id,
            'price'=>$package->price,
            'method'=>'paypal',
            'status'=>'completed',
        ]);

        return response()->json($result);
    }
}
