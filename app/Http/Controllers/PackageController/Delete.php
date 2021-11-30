<?php

namespace App\Http\Controllers\PackageController;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class Delete extends Controller
{
    public function destroy(Package $package){
        $package->delete();
        return back()->with('success', 'Your post has been deleted successfully!');
    }
}
