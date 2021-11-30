<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ImageController extends Controller
{
    public function store(Request $request){
        $path = public_path('tmp/uploads');

        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }

        $file = $request->file('image');

        $name = uniqid() . '_' . trim($file->getClientOriginalName());

        $file->move($path, $name);
        
        $image = Image::make($path.'/'.$name)->fit(710,450);
        $image->save();

        return ['name'=>$name];
            
    }

    public function getImages(Post $post){
        $images = $post->images;
        return ['media'=>$images];
    }
}
