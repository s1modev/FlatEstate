<?php

namespace App\Http\Controllers\PageController;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class Show extends Controller
{
    public function index($slug){
        $page = Page::where('slug', $slug)->first();
        return view('user.page.show', ['page'=>$page]);
    }
}
