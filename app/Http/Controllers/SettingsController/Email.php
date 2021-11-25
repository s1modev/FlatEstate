<?php

namespace App\Http\Controllers\SettingsController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Email extends Controller
{
    public function index(){
        return view('user.settings.email');
    }

    public function update(Request $request){
        $this->validate($request,[
            'email'=>'email|required|max:255|unique:users,email',
            'password'=>'required|max:255',
        ]);

        if(Hash::check(request()->password, auth()->user()->password)){
            auth()->user()->update(['email'=>$request->email]);
            Auth::attempt($request->only('email','password'));
            return back()->with('success', 'Your Email has been updated successfully!');
        }else{
            return back()->with('status', 'Password Invalid');
        }
    }
}
