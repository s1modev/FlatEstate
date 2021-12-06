<?php

namespace App\Http\Controllers\PageController;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class Delete extends Controller
{
    public function destroy(Page $page){
        $page->delete();
        return back()->with('success', 'The page has been deleted successfully!');
    }
}
