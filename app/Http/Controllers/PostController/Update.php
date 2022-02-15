<?php

namespace App\Http\Controllers\PostController;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdatePostRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Country;
use App\Models\Image;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class Update extends Controller
{
    public function index(Post $post){
        if($post->user_id == auth()->user()->id){
            $countries = Country::get();
            return view('user.post.update',['countries'=>$countries, 'post'=>$post]);
        }
        abort(403);
        
    }

    public function update(Post $post, UpdatePostRequest $request){
        if($post->user_id == auth()->user()->id){
            $post->update($request->validated());

            $features = ['garage', 'security', 'parking', 'balcony', 'swimming_pool', 'garden', 'terrace'];
            foreach($features as $feature){
                if(!$request->has($feature)){
                    $post->$feature = false;
                    $post->save();
                }
            }

            if(isset($request->added_media)){
                foreach($request->added_media as $image){
                
                    $from = public_path('tmp/uploads/'.$image);
                    $to = public_path('post_images/'.$image);
                    
                    File::move($from, $to);
                    $post->images()->create([
                        'name' => $image,
                    ]);
                }
            }
            
            if(isset($request->deleted_media)){
                foreach($request->deleted_media as $deleted_media){
                    Image::where('name', $deleted_media)->delete();

                    //This line is commented because, most of the images in this demo are shared between multiple posts.
                    //File::delete(public_path('post_images/'.$deleted_media));
                }
            }
            
            $countries = Country::get();
            return redirect()->route('post.update',['countries'=>$countries, 'post'=>$post]);
        }
        abort(403);
        
    }
}
