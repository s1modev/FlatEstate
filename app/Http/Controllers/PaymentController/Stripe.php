<?php

namespace App\Http\Controllers\PaymentController;

use App\Http\Controllers\Controller;
use App\Http\Requests\PaymentRequest;
use App\Models\Country;
use App\Models\Order;
use App\Models\Package;
use Illuminate\Http\Request;

class Stripe extends Controller
{
    public function index($id){
        $package = Package::where('id', $id)->first();
        $countries = Country::get();
        $payment_intent = auth()->user()->createSetupIntent();
        
        return view('user.account.stripe', ['countries'=>$countries, 'payment_intent'=>$payment_intent, 'package'=>$package]);
    }

    public function pay(PaymentRequest $request){
        $user = auth()->user();
        $package = Package::where('id', $request->package_id)->first();
        $paymentMethod = $request->payment_method;
        try{
            $user->createOrGetStripeCustomer();
            $user->updateDefaultPaymentMethod($paymentMethod);
            $user->charge($package->price*100, $paymentMethod);
            $package->orders()->create([
                'user_id'=>auth()->user()->id,
                'price'=>$package->price,
                'method'=>'stripe',
                'status'=>'completed',
                'card_holder'=>$request->card_holder,
                'billing_country'=>$request->billing_country,
                'billing_city'=>$request->billing_city,
                'billing_address'=>$request->billing_address
            ]);
            
        }catch(\Exception $ex){
            return back()->with('error', $ex->getMessage());
        }

        return redirect()->route('thank-you');
    }
}
