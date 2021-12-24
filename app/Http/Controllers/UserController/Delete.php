<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class Delete extends Controller
{
    public function destroy(Request $request){
        User::where('id', $request->id)->delete();
        return back()->with('success', 'The record has been deleted successfully!');
    }

}
