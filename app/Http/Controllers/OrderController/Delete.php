<?php

namespace App\Http\Controllers\OrderController;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class Delete extends Controller
{
    public function destroy(Order $order){
        $order->delete();
        return back()->with('success', 'The order has been delete successfully!');
    }
}
