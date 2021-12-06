<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Login extends Controller
{
    public function index(){
        return view('auth.admin.login');
    }

    public function store(Request $request){
        $this->validate($request,[
            'username'=>'required|max:255',
            'password'=>'required|max:255'
        ]);
        
        $admin = Admin::where('username', $request->username)->first();
        if(!$admin){
            return back()->with('status', 'Invalid login informations!');
        }else{
            if(Hash::check($request->password, $admin->password)){
                $request->session()->put('logged_admin', $admin->id);
                return redirect()->route('package.dashbaord');
            }else{
                return back()->with('status','Invalid login informations!');
            }
        }
        

    }
}
