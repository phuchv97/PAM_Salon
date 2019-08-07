<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Product;

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
}
