<?php

namespace App\Http\Controllers\PackageController;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class Pricing extends Controller
{
    public function index(){
        $packages = Package::where('status', 'published')->get();
        return view('user.account.pricing', ['packages'=>$packages]);
    }
}
