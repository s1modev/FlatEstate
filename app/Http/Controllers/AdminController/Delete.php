<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class Delete extends Controller
{
    public function destroy(Request $request){
        Admin::where('id', $request->id)->delete();
        return back()->with('success', 'The record has been deleted successfully!');
    }
}
