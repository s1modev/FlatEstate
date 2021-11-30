<?php

namespace App\Http\Controllers\PackageController;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdatePackageRequest;
use App\Models\Package;
use Illuminate\Http\Request;

class Update extends Controller
{
    public function index(Package $package){
        return view('admin.package.update',['package'=>$package]);
    }

    public function update(UpdatePackageRequest $request, Package $package){
        $package->update($request->validated());
        return redirect()->route('package.dashbaord')->with('success','The package has been updated successfully!');
    }
}
