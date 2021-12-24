<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index(){
        return view('admin.user.dashboard');
    }

    public function datatable(){
        $users = User::all();
        return datatables()->of($users)
            ->addColumn('action', function($row) {
                $action = '<a data-id="'.$row->id.'" class="btn btn-danger btn-sm mr-2 delete_confirmation" data-toggle="modal" data-target="#delete_confirmation"><i class="fas fa-trash"></i></a>';

                return $action;
            })
            ->escapeColumns([])->make(true);
    }
}
