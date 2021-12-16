<?php

namespace App\Http\Controllers\PostController;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class Delete extends Controller
{
    public function destroy(Post $post){
        if($post->user_id == auth()->user()->id){
            $images = $post->images()->get();
            $images->each->delete();
            $post->delete();
            
            return back()->with('success', 'Your post has been deleted successfully');
        }
        abort(403);
        
    }
}
