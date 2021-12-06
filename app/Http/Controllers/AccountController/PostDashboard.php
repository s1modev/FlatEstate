<?php

namespace App\Http\Controllers\AccountController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostDashboard extends Controller
{
    public function index(){
        $user = auth()->user();
        $posts = $user->posts()->paginate(10);
        return view('user.account.posts', ['posts'=>$posts]);
    }
}
