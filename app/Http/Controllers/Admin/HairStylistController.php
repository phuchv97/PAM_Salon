<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\HairStylist;


class HairStylistController extends Controller
{
    public function index(Request $request){
        echo('fdhfdhgd');
        // $name = null;
        // $query = null;
        // if($request->has('name')){
        //     $name = $request->name;
        //     $query = HairStylist::where('name','like',"%$name%");
        // }else{
        //     $query = null;
        // }
        // if($query == null){
        //     $hairStylist = HairStylist::paginate(8);
        // }else{
        //     $hairStylist = $query->paginate(8);
        // }
        // return view('admin.hairStylist.index',['hairStylist'=>$hairStylist,'name'=>$name]);
    }
}
