<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Gallery;

class GalleryController extends Controller
{
    public function index(Request $request){
        $description = null;
        $query = null;
        if($request->has('description')){
            $description = $request ->description;
            $query = Gallery::where('description','like',"%$description%");
        }else{
            $query = null;
        }
        if($query == null){
            $gallery = Gallery::paginate(8);
        }else{
            $gallery = $query->paginate(8);
        }
        return view('admin.gallery.index',compact('gallery','description'));
    }
}
