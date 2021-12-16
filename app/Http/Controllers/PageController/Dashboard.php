<?php

namespace App\Http\Controllers\PageController;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index(){
        return view('admin.page.dashboard');
    }

    public function datatable(){
        $pages = Page::all();
        return datatables()->of($pages)
            ->editColumn('status', function($row) {
                if($row->status == 'published'){
                    $html = '<span class="badge badge-success text-md text-white rounded-0 font-weight-normal">'.$row->status.'</span>';
                    return $html;
                }else{
                    $html = '<span class="badge badge-info text-md text-white rounded-0 font-weight-normal">'.$row->status.'</span>';
                    return $html;
                }
            })
            ->editColumn('created_at', function($row){
                $created_at = $row->created_at->format('Y-m-d');
                return $created_at;
            })
            ->addColumn('action', function($row) {
                $action = '<a href="'.route("page.show",$row->slug).'" class="btn btn-success btn-sm mr-2"><i class="fas fa-eye"></i></a>';
                $action .= '<a href="'.route("page.update",$row->id).'" class="btn btn-primary btn-sm mr-2"><i class="fas fa-edit"></i></a>';
                $action .= '<form action="'.route('page.delete', $row->id).'" class="d-inline" method="post">';
                $action .= '<input type="hidden" name="_token" value="'.csrf_token().'">';
                $action .= '<button class="btn btn-danger btn-sm mr-2"><i class="fas fa-trash"></i></button>';
                $action .= '</form>';
                return $action;
            })
            ->escapeColumns([])->make(true);
    }

}
