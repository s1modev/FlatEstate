<?php

namespace App\Http\Controllers\AdminController\Settings;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class Account extends Controller
{
    public function index(){
        $admin = Admin::where('id', session('logged_admin'))->first();

        return view('admin.settings.account', ['admin'=>$admin]);
    }

    public function update(Request $request){
        $this->validate($request,[
            'name'=>'required|max:255',
            'username'=>'required|max:255',
            'email'=>'required|email|max:255',
        ]);
        
        $admin = Admin::where('id', session('logged_admin'))->first();
        
        $admin->update([
            'name'=>$request->name,
            'username'=>$request->username,
            'email'=>$request->email,
        ]);

        return back()->with('success', 'Account infomations has been updated successfully!');


    }
}
