<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index(){
        return view('auth.admin.dashboard');
    }

    public function datatable(){
        $admins = Admin::all();
        return datatables()->of($admins)
            ->addColumn('action', function($row) {
                $action = '<a href="'.route("admin.update",$row->id).'" class="btn btn-primary btn-sm mr-2"><i class="fas fa-edit"></i></a>';
                $action .= '<a data-id="'.$row->id.'" class="btn btn-danger btn-sm mr-2 delete_confirmation" data-toggle="modal" data-target="#delete_confirmation"><i class="fas fa-trash"></i></a>';

                return $action;
            })
            ->escapeColumns([])->make(true);
    }
}
