<?php

namespace App\Http\Controllers\OrderController;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class Delete extends Controller
{
    public function destroy(Request $request){
        Order::where('id', $request->id)->delete();
        return back()->with('success', 'The record has been deleted successfully!');
    }
}
