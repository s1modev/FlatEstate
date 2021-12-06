<?php

namespace App\Http\Controllers\PageController;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdatePageRequest;
use App\Models\Page;
use Illuminate\Http\Request;

class Update extends Controller
{
    public function index(Page $page){
        return view('admin.page.update', ['page'=>$page]);
    }

    public function update(Page $page, UpdatePageRequest $request){
        $page->update($request->validated());
        return redirect()->route('page.dashboard')->with('success','The page has been updated successfully!');
    }
}
