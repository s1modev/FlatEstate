<?php

namespace App\Http\Controllers\PageController;

use \Cviebrock\EloquentSluggable\Services\SlugService;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePageRequest;
use App\Models\Page;
use Illuminate\Http\Request;

class Create extends Controller
{
    public function index(){
        return view('admin.page.create');
    }

    public function store(StorePageRequest $request){
        Page::create($request->validated());

        return redirect()->route('page.dashboard')->with('success','The page has been created successfully');
    }

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Page::class, 'slug', $request->name);
        return ['slug'=>$slug];
    }
}
