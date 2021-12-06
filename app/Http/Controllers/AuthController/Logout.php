<?php

namespace App\Http\Controllers\AuthController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Logout extends Controller
{
    public function store(){
        if (session()->has('logged_user')){
            session()->pull('logged_user');
        }
        auth()->logout();

        return redirect()->route('home');
    }
}
