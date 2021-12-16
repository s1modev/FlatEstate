<?php

namespace App\Http\Controllers\PostController\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index(){
        $posts = Post::paginate(10);
        return view('admin.post.dashboard', ['posts'=>$posts]);
    }

    public function datatable(){
        $posts = Post::all();
        return datatables()->of($posts)
            ->addColumn('action', function($row) {
                $action = '<a href="'.route("post.show",$row->slug).'" class="btn btn-success btn-sm mr-2"><i class="fas fa-eye"></i></a>';
                $action .= '<form action="'.route('admin.post.delete', $row->id).'" class="d-inline" method="post">';
                $action .= '<input type="hidden" name="_token" value="'.csrf_token().'">';
                $action .= '<button class="btn btn-danger btn-sm mr-2"><i class="fas fa-trash"></i></button>';
                $action .= '</form>';
                return $action;
            })
            ->escapeColumns([])->make(true);
    }
}
