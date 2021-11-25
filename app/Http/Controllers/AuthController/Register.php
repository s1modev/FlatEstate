<?php

namespace App\Http\Controllers\AuthController;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Register extends Controller
{
    public function index(){
        return view('auth.user.register');
    }

    public function store(Request $request){
        $this->validate($request,[
            'full_name'=>'required|max:255',
            'username'=>'required|max:255|unique:users,username',
            'email'=>'required|email|max:255|unique:users,email',
            'password'=>'required|min:8|max:255|confirmed'
        ]);

        User::create([
            'full_name'=>$request->full_name,
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);

        Auth::attempt($request->only('email','password'));
        $request->session()->put('logged_user', auth()->user()->id);

        return redirect()->route('register');
    }
}
