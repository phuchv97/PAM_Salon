<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Gallery;

class GalleryController extends Controller
{
    public function index(Request $request){
        $name = null;
        $query = null;
        if($request->has('name')){
            $name = $request ->name;
            if($query == null){
                $query = Gallery::where('name','like',"%$name%");
            }else{
                $query->where('name', 'like',"%$name%");
            }
        }
        if($query == null){
            $gallery = Gallery::paginate(3);
        }else{
            $gallery = $query->paginate(3);
        }
        return view('admin.gallery.index',compact('gallery','name'));
    }
}
