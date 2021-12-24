<?php

namespace App\Http\Controllers\PostController\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class Delete extends Controller
{
    
    public function destroy(Request $request){
        $post = Post::where('id', $request->id)->first();
        $images = $post->images()->get();
        $images->each->delete();
        $post->delete();
        return back()->with('success', 'The record has been deleted successfully!');
    }
}
