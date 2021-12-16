<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateAdminRequest;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Update extends Controller
{
    public function index(Admin $admin){
        return view('auth.admin.update', ['admin'=>$admin]);
    }

    public function update(Admin $admin, UpdateAdminRequest $request){
        $admin->update([
            'name'=>$request->name,
            'username'=>$request->username,
            'email'=>$request->email,
        ]);
        return redirect()->route('admin.dashboard')->with('success', 'Admin has been update successfully!');
    }
}
