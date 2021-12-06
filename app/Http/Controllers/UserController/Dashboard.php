<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index(){
        $users = User::paginate(10);
        return view('admin.user.dashboard', ['users'=>$users]);
    }
}
