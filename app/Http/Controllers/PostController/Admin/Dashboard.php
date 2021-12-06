<?php

namespace App\Http\Controllers\PostController\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index(){
        $posts = Post::paginate(10);
        return view('admin.post.dashboard', ['posts'=>$posts]);
    }
}
