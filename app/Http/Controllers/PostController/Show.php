<?php

namespace App\Http\Controllers\PostController;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class Show extends Controller
{
    public function index($slug){
        $post = Post::where('slug', $slug)->first();
        $agent = $post->user()->first();
        $images = $post->images()->get();
        return view('user.post.show',['post'=>$post, 'images'=>$images, 'agent'=>$agent]);
    }
}
