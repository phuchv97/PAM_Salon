<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Comment;

class CommentController extends Controller
{
    public function index(Request $request){
        $comment = null;
        $query = null;
        if($request->has('name')){
            $comment = $request->name;
            $query = Comment::where('comment','like',"%$comment%");

        }
        if($query == null){
            $comments = Comment::paginate(8);
        }else{
            $comments = $query->paginate(8);
        }
        return view('admin.comment.index',['comments'=>$comments,'name'=>$comment]);
    }
    public function delete($id){
        $comment = Comment::find($id);
        if($comment != null){
            $comment -> delete();
        }
        return redirect(route('list_comment'));
    }
    public function save(Request $request){
        $post_id = $request->post_id;
        $model = new Comment();
        $model->fill($request->all());
        $model->save();
        return redirect(route('blog_detail',['post_id'=>$post_id]));
    }
}
