<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Posts;


class PostsController extends Controller
{
    public function index(Request $request){
        $name = null;
        $query = null;
        if($request->has('name')){
            $name = $request->name;
            $query = Posts::where('name','like',"%$name%");
        }else{
            $query = null;
        }
        if($query == null){
            $posts = Posts::paginate(8);
        }else{
            $posts = $query->paginate(8);
        }
        return view('admin.blog.index',['posts'=>$posts, 'name'=>$name]);
    }
}
