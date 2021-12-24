<?php

namespace App\Http\Controllers\PackageController;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class Delete extends Controller
{
    
    public function destroy(Request $request){
        Package::where('id', $request->id)->delete();
        return back()->with('success', 'The record has been deleted successfully!');
    }
}
