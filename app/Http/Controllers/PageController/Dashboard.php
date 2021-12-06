<?php

namespace App\Http\Controllers\PageController;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index(){
        $pages = Page::paginate(10);
        return view('admin.page.dashboard', ['pages'=>$pages]);
    }

}
