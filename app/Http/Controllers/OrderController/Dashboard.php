<?php

namespace App\Http\Controllers\OrderController;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index(){
        $orders = Order::paginate(10);
        return view('admin.order.dashboard',['orders'=>$orders]);
    }
}
