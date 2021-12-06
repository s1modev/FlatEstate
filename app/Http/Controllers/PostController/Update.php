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
        $countries = Country::get();
        return view('user.post.update',['countries'=>$countries, 'post'=>$post]);
    }

    public function update(Post $post, UpdatePostRequest $request){
        $post->update($request->validated());

        $features = ['garage', 'security', 'parking', 'balcony', 'swimming_pool', 'garden', 'terrace'];
        foreach($features as $feature){
            if(!$request->has($feature)){
                $post->$feature = false;
                $post->save();
            }
        }

        if(isset($request->media)){
            foreach($request->media as $image){
            
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
                File::delete(public_path('post_images/'.$deleted_media));
                Image::where('name', $deleted_media)->delete();
            }
        }
        
        $countries = Country::get();
        return redirect()->route('post.update',['countries'=>$countries, 'post'=>$post]);
    }
}
