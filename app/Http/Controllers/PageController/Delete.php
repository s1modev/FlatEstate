<?php

namespace App\Http\Controllers\PageController;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class Delete extends Controller
{
    public function destroy(Request $request){
        Page::where('id', $request->id)->delete();
        return back()->with('success', 'The record has been deleted successfully!');
    }
}
