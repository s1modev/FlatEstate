<?php

namespace App\Http\Controllers\PostController;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Post;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class Dashboard extends Controller
{

    public function index(Request $request){
        $query = Post::query();
        if ($request->search){
            $query->where('title','LIKE', '%'.$request->search.'%')
                    ->orWhere('description','LIKE', '%'.$request->search.'%')
                    ->orWhere('country','LIKE', '%'.$request->search.'%')
                    ->orWhere('city','LIKE', '%'.$request->search.'%')
                    ->orWhere('address','LIKE', '%'.$request->search.'%');
        }
        if($request->deal){
            $posts = $query->where('deal' ,$request->deal);
        }
        if ($request->country){
            $query->where('country',$request->country);
        }
        if($request->city){
            $query->where('city',$request->city);
        }
        if($request->category){
            $query->where('category',$request->category);
        }
        if($request->sortby){
            if ($request->sortby=='oldest'){
                $query->orderBy('created_at', 'asc');
            }else{
                $posts = $query->orderBy('created_at', 'desc');
            }
        }
        $posts = $query->orderBy('created_at', 'desc')->paginate(9);
        $countries = Country::get();
        return view('user.post.dashboard',['countries'=>$countries,'posts'=>$posts, 'search'=>$request->search, 'sortby'=>$request->sortby, 'country'=>$request->country,'category'=>$request->category, 'deal'=>$request->deal]);

    }
}
