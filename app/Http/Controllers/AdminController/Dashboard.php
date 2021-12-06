<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index(){
        $admins = Admin::paginate(10);
        return view('auth.admin.dashboard', ['admins'=>$admins]);
    }
}
