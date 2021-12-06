<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class Delete extends Controller
{
    public function destroy(Admin $admin){
        $admin->delete();
        return back()->with('success', 'Admin has been deleted successfully!');
    }
}
