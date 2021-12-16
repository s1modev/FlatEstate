<?php

namespace App\Http\Controllers\AdminController\Settings;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Password extends Controller
{
    public function index(){
        return view('admin.settings.password');
    }

    public function update(Request $request){
        $this->validate($request,[
            'new_password'=>'required|max:255',
            'old_password'=>'required|max:255',
        ]);

        $admin = Admin::where('id', session('logged_admin'))->first();

        if(Hash::check(request()->old_password, $admin->password)){
            $admin->update(['password' => Hash::make($request->new_password)]);
            return back()->with('success', 'Your Password has been updated successfully!');
        }
        return back()->with('status', 'Password Invalid');
    }
}
