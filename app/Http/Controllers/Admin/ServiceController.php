<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Services;

class ServiceController extends Controller
{
    public function index(Request $request){
        $name = null;
        $query = null;
        if($request->has('name')){
            $name = $request ->name;
            if($query == null){
                $query = Services::where('name','like',"%$name%");
            }else{
                $query->where('name', 'like',"%$name%");
            }
        }
        if($query == null){
            $services = Services::paginate(3);
        }else{
            $services = $query->paginate(3);
        }
        return view('admin.services.index',compact('services','name'));
    }
}
