<?php

namespace App\Http\Controllers\PackageController;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class Checkout extends Controller
{
    public function index(Package $package){
        return view('user.account.checkout', ['package'=>$package]);
    }

    
}
