<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Model\Posts;
use App\Model\Categories;
use App\Model\Gallery;




class PostsController extends Controller
{
    public function index(Request $request){
        $title = null;
        $query = null;
        if($request->has('title')){
            $title = $request->title;
            $query = Posts::where('title','like',"%$title%");
        }else{
            $query = null;
        }
        if($query == null){
            $posts = Posts::paginate(8);
        }else{
            $posts = $query->paginate(8);
        }
        return view('admin.post.index',['posts'=>$posts, 'title'=>$title]);
    }
    public function addPost(){
        $categories = Categories::all();
        $post = new Posts();
        return view('admin.post.form-post',['post'=>$post,'categories'=>$categories]);
    }
    public function editPost($id){
        $categories = Categories::all();
        $post = Posts::find($id);
        if($post != null){
            return view('admin.post.form-post',['post'=>$post,'categories'=>$categories]);
        }
        return redirect(route('list_post'));
    }
    public function delete($id){
        $post = Posts::find($id);
        if($post != null){
            $post->delete();   
        }
        return redirect(route('list_post'));
    }
    public function save(Request $request){
        if($request->id == null){
            $validateImage = "required";
        }else{
            $validateImage = "";
        }
        $validatedData = $request->validate([
            
            'title'=> 'required|max:255',
            'detail'=> 'required', 
            'image' => $validateImage,
            'description' => 'required|max:350',
            'category_id' => 'required',
            'user_id' => 'required',

        ],
        [
            'title.required' => 'Please enter a title for the Post',
            'title.max' => 'Maximum length of no more than 255 characters',
            'detail.required' => 'Please enter a detail for the Post',
            'description.max' => 'Maximum length of no more than 350 characters',
            'description.required' => 'Please enter a description for the Post',
            'category_id.required' => 'Please enter a category for the Post',
            'user_id.required' => 'Please enter a user for the Post',
            'image.required' => 'Please select an Image',
            
        ]
    );
    if($request->id == null){
        $model = new Posts();
    }else{
        $model = Posts::find($request->id);
    }
    
    
    if($request->id == null){
        $model->fill($request->all());
    }else{
        $model->title = $request->title;
        $model->description = $request->description;
        $model->category_id = $request->category_id;
        $model->user_id = $request->user_id;
        $model->detail = $request->detail;

    }



    if ($request->hasFile('image')) {
        
        $ext = $request->image->extension();
        
        $filename = $request->image->getClientOriginalName();
        
        $filename = $filename . "-" . str_random(20) . "." . $ext;
        
        $path = $request->image->storeAs('posts', $filename);
        
        $model->image = "uploaded/$path";

        // add image for gallery
        $gallery = new Gallery();
        $gallery->image= "uploaded/$path";

        $gallery->description = $request->title;

        $gallery->user_id = Auth::user()->id;
        $gallery->save();

    }
    $model->save();

    
    
        
    
    
    
    
    
    
    return redirect(route('list_post')); 
    }

}
