<?php

namespace App\Http\Controllers\AccountController;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostDashboard extends Controller
{
    public function index(){
        return view('user.account.posts');
    }

    public function datatable($id){
        $user = User::where('id', $id)->first();
        $posts = $user->posts()->get();
        return datatables()->of($posts)
            ->addColumn('action', function($row) {
                $action = '<a href="'.route("post.show",$row->slug).'" class="btn btn-success btn-sm mr-2"><i class="fas fa-eye"></i></a>';
                $action .= '<a href="'.route("post.update",$row->id).'" class="btn btn-primary btn-sm mr-2"><i class="fas fa-edit"></i></a>';
                $action .= '<form action="'.route('post.delete', $row->id).'" class="d-inline" method="post">';
                $action .= '<input type="hidden" name="_token" value="'.csrf_token().'">';
                $action .= '<button class="btn btn-danger btn-sm mr-2"><i class="fas fa-trash"></i></button>';
                $action .= '</form>';
                return $action;
            })
            ->escapeColumns([])->make(true);
    }
}
