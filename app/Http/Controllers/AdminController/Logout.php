<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Logout extends Controller
{
    public function store(){
        if (session()->has('logged_admin')){
            session()->pull('logged_admin');
        }

        return redirect()->route('home');
    }
}
