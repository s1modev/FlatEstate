<?php

namespace App\Http\Controllers\SettingsController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Password extends Controller
{
    public function index() {
        return view('user.settings.password');
    }

    public function update(Request $request){
        $this->validate($request,[
            'new_password'=>'required|max:255',
            'old_password'=>'required|max:255',
        ]);

        if(Hash::check(request()->old_password, auth()->user()->password)){
            auth()->user()->update(['password' => Hash::make($request->new_password)]);
            Auth::attempt([
                'email'=>auth()->user()->email,
                'password'=>$request->new_password
            ]);
            return back()->with('success', 'Your Password has been updated successfully!');
        }else{
            return back()->with('status', 'Password Invalid');
        }
    }
}
