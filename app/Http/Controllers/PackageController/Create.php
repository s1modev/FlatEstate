<?php

namespace App\Http\Controllers\PackageController;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePackageRequest;
use App\Models\Package;
use Illuminate\Http\Request;

class Create extends Controller
{
    public function index(){
        return view('admin.package.create');
    }

    public function store(StorePackageRequest $request){
        Package::create($request->validated());
        
        return redirect()->route('package.dashbaord')->with('success','Your package has been created successfully!');
    }
}
