<?php

namespace App\Http\Controllers\AuthController;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ForgotPassword extends Controller
{
    public function index(){
        return view("auth.user.forgot_password");
    }

    public function store(Request $request){
        $this->validate($request, [
            'email'=>'required|email',
        ]);
        $user = User::where('email', $request->email)->first();
        if($user){
            Password::sendResetLink($request->only('email'));
            return back()->with('success','The password reset link has been sent to you email.');
        }else{
            return back()->with('status','We do not reconize this email!');
        }
        
    }
}
