<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Categories;

class CategoryController extends Controller
{
    public function index(Request $request){
        $query = null;
        $name = null;
        if($request->has('name')){
            $name = $request->name;
            $query = Categories::where('name','like',"%$name%");
        }else{
            $query = null;
        }
        if($query==null){
            $category = Categories::paginate(8);
        }else{
            $category = $query->paginate(8);
        }
        return view('admin.category.index',['category'=>$category,'name'=>$name]);
    }
    public function addCategory(){
        $category = new Categories();

        return view('admin.category.form-category',['category'=>$category]);
    }
    public function edit($id){
        $category = Categories::find($id);
        if($category != null){
            return view('admin.category.form-category',['category'=>$category]);
        }else{
            return redirect(route('list_category'));
        }
        
    }
    public function delete($id){
        $category = Categories::find($id);
        if($category != null){
            $category->delete();
        }
        return redirect(route('list_category'));
    }
    public function save(Request $request){
        $validatedData = $request->validate([
            
            'name'=> 'required|max:255',
            'description' => 'required|max:350',
            'slug' => 'required',
        ],
        [
            'name.required' => 'Please enter a name for the category',
            'name.max' => 'Maximum length of no more than 255 characters',
            'description.max' => 'Maximum length of no more than 350 characters',
            'description.required' => 'Please enter a description for the category',
            'slug.required' => 'Please enter slug for the category',
            
        ]
    );
    if($request->id == null){
        $model = new Categories();
    }else{
        $model = Categories::find($request->id);
    }
    
    
    
    $model->fill($request->all());
    

    $model->save();
    return redirect(route('list_category')); 
    }
}
