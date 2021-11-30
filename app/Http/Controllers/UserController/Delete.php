<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class Delete extends Controller
{
    public function destroy(User $user){
        $user->delete();
        return back()->with('success','The user has been deleted successfully');
    }
}
