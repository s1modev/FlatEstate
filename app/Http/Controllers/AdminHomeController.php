<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index(){
        $orders_number = Order::count();
        $users_number = User::count();
        $posts_number = Post::count();
        return view('admin.dashboard', ['orders_number'=>$orders_number, 'users_number'=>$users_number, 'posts_number'=>$posts_number]);
    }
}
