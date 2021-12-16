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

    public function datatable(){
        $admins = Admin::all();
        return datatables()->of($admins)
            ->addColumn('action', function($row) {
                $action = '<a href="'.route("admin.update",$row->id).'" class="btn btn-primary btn-sm mr-2"><i class="fas fa-edit"></i></a>';
                $action .= '<form action="'.route('admin.delete', $row->id).'" class="d-inline" method="post">';
                $action .= '<input type="hidden" name="_token" value="'.csrf_token().'">';
                $action .= '<button class="btn btn-danger btn-sm mr-2"><i class="fas fa-trash"></i></button>';
                $action .= '</form>';
                return $action;
            })
            ->escapeColumns([])->make(true);
    }
}
