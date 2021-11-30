<?php

namespace App\Http\Controllers\SettingsController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;


class Account extends Controller
{
    public function index(){
        return view('user.settings.account');
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
            $image = Image::make($path.'/'.$avatar_name)->fit(200,200);
            $image->save();
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
}
