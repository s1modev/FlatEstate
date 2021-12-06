<?php

namespace App\Http\Controllers\OrderController;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class Show extends Controller
{
    public function index(Order $order){
        $user = $order->user()->first();
        return view('admin.order.show', ['order'=>$order, 'user'=>$user]);
    }
}
