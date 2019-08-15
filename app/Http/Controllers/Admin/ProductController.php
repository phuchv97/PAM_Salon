<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Product;
use App\Model\Gallery;
use Illuminate\Support\Facades\Auth;


class ProductController extends Controller
{
    public function index(Request $request){
        $query = null;
        $name = null;
        if($request->has('name')){
            $name = $request->name;
            $query = Product::where('name','like',"%$name%");
        }else{
            $query = null;
        }
        if($query==null){
            $product = Product::paginate(8);
        }else{
            $product = $query->paginate(8);
        }
        return view('admin.product.index',['product'=>$product,'name'=>$name]);
    }
    public function addProduct(){
        $product = new Product();

        return view('admin.product.form-product',['product'=>$product]);
    }
    public function edit($id){
        $product = Product::find($id);
        if($product != null){
            return view('admin.product.form-product',['product'=>$product]);
        }else{
            return redirect(route('list_product'));
        }
        
    }
    public function delete($id){
        $product = Product::find($id);
        if($product != null){
            $product->delete();
        }
        return redirect(route('list_product'));
    }
    public function save(Request $request){
        if($request->id == null){
            $validateImage = "required";
        }else{
            $validateImage = "";
        }
        $validatedData = $request->validate([
            
            'name'=> 'required|max:255',
            'detail'=> 'required', 
            'image' => $validateImage,
            'description' => 'required|max:350',
            'price' => 'required',
        ],
        [
            'name.required' => 'Please enter a name for the Product',
            'name.max' => 'Maximum length of no more than 255 characters',
            'detail.required' => 'Please enter a detail for the Product',
            'description.max' => 'Maximum length of no more than 350 characters',
            'description.required' => 'Please enter a description for the Product',
            'price.required' => 'Please enter price for the Product',
            'image.required' => 'Please select an Image',
            
        ]
    );
    if($request->id == null){
        $model = new Product();
    }else{
        $model = Product::find($request->id);
    }
    
    
    if($request->id == null){
        $model->fill($request->all());
    }else{
        $model->name = $request->name;
        $model->description = $request->description;
        $model->price = $request->price;
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

        $gallery->description = $request->description;

        $gallery->user_id = Auth::user()->id;
        $gallery->save();

    }
    $model->save();
    return redirect(route('list_product')); 
    }
}
