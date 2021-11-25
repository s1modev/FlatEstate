<?php

namespace App\Http\Controllers\AccountController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class Settings extends Controller
{
    public function index(){
        return view('user.settings');
    }

    public function update(Request $request){
        $this->validate($request,[
            'full_name'=>'required|max:255',
            'username'=>'required|max:255|unique:users,username,'.auth()->user()->id,
            'phone_number'=>'nullable|numeric'
        ]);
        auth()->user()->update([
            'full_name'=>$request->full_name,
            'username'=>$request->username,
            'phone_number'=>$request->phone_number,
        ]);
        if($request->file('avatar')){
            $path = public_path('user_avatar');
            $file = $request->file('avatar');
            $avatar_name = uniqid() . '_' . trim($file->getClientOriginalName());
            $file->move($path, $avatar_name);
            if(auth()->user()->avatar!='user.jpg'){
                File::delete(public_path('user_avatar/'.auth()->user()->avatar));
            }
            auth()->user()->avatar = $avatar_name;
            auth()->user()->save(); 
            
        }

        //hidden input on the vue component
        if($request->avatar_deleted){
            if(auth()->user()->avatar!='user.jpg'){
                File::delete(public_path('user_avatar/'.auth()->user()->avatar));
                auth()->user()->avatar = 'user.jpg';
                auth()->user()->save();
            }
        }

        return back()->with('success', 'Account infomations has been updated successfully!');
    }

    public function updateEmail(Request $request){
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

    public function updatePassword(Request $request){
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
