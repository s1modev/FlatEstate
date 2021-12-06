<?php

namespace App\Http\Controllers\PostController\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class Delete extends Controller
{
    public function detroy(Post $post){
        $images = $post->images()->get();
        $images->each->delete();
        $post->delete();
        
        return back()->with('success', 'The post has been deleted!');
    }
}
