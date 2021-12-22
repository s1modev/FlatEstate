<?php

namespace App\Http\Controllers\AuthController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{
    public function index(){
        return view('auth.user.login');
    }

    public function store(Request $request){
        $this->validate($request,[
            'email'=>'required|email|max:255',
            'password'=>'required|max:255',
        ]);

        if(!Auth::attempt($request->only('email', 'password'), $request->remember)){
            return back()->with('status', 'Invalid login details');
        }else{
            $request->session()->put('logged_user', auth()->user()->id);
            return redirect()->route('home');
        }
    }
}
