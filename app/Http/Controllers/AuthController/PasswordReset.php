<?php

namespace App\Http\Controllers\AuthController;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class PasswordReset extends Controller
{
    public function index(Request $request){
        if($request->email && $request->token){
            $password_reset = DB::table('password_resets')->where('email', $request->email)->first();
            if($password_reset){
                $email = $request->email;
                $token = $request->token;
                return view("auth.user.password_reset", ['email'=>$email, 'token'=>$token]);
            }
        }

        abort(404);
    }

    public function store(Request $request){
        $this->validate($request, [
            'password'=>'required|confirmed|max:255',
        ]);
        if($request->email && $request->token){
            $password_reset = DB::table('password_resets')->where('email', $request->email)->first();
            if($password_reset){
                if(Hash::check($request->token, $password_reset->token)){
                    $user = User::where('email', $request->email)->first();
                    $user->update([
                        'password'=>Hash::make($request->password),
                    ]);
                    DB::table('password_resets')->where('email', $password_reset->email)->delete();
                    return redirect()->route('login')->with('success', 'Password has been changed successfully!');
                }
            }
        }
        return back()->with('status', 'Something is wrong!');
    }
}
