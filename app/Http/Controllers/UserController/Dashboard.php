<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index(){
        $users = User::paginate(10);
        return view('admin.user.dashboard', ['users'=>$users]);
    }

    public function datatable(){
        $users = User::all();
        return datatables()->of($users)
            ->addColumn('action', function($row) {
                $action = '<form action="'.route('user.delete', $row->id).'" class="d-inline" method="post">';
                $action .= '<input type="hidden" name="_token" value="'.csrf_token().'">';
                $action .= '<button class="btn btn-danger btn-sm mr-2"><i class="fas fa-trash"></i></button>';
                $action .= '</form>';
                return $action;
            })
            ->escapeColumns([])->make(true);
    }
}
