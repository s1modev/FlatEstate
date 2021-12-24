<?php

namespace App\Http\Controllers\PostController\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index(){
        return view('admin.post.dashboard');
    }

    public function datatable(){
        $posts = Post::all();
        return datatables()->of($posts)
            ->addColumn('action', function($row) {
                $action = '<a href="'.route("post.show",$row->slug).'" class="btn btn-success btn-sm mr-2"><i class="fas fa-eye"></i></a>';
                $action .= '<a data-id="'.$row->id.'" class="btn btn-danger btn-sm mr-2 delete_confirmation" data-toggle="modal" data-target="#delete_confirmation"><i class="fas fa-trash"></i></a>';

                return $action;
            })
            ->escapeColumns([])->make(true);
    }
}
