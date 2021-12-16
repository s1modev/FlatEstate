<?php

namespace App\Http\Controllers\PostController;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\StoreProjectRequest;
use App\Models\Country;
use App\Models\Image;
use App\Models\Post;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class Create extends Controller
{
    public function index(){
        $countries = Country::get();
        return view('user.post.create',['countries'=>$countries]);
    }
    
    public function store(StorePostRequest $request){
        $user = auth()->user();
        $post = $user->posts()->create($request->validated());

        foreach($request->media as $image){
            $from = public_path('tmp/uploads/'.$image);
            $to = public_path('post_images/'.$image);
            
            File::move($from, $to);
            $post->images()->create([
                'name' => $image,
            ]);
        }

        $avatar = $post->images()->first();
        $post->avatar = $avatar->name;
        $post->save();

        auth()->user()->credits--;
        auth()->user()->save();

        return redirect()->route('posts');
    }

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);

        return ['slug'=>$slug];
    }
}
