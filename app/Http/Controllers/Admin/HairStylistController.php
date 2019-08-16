<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\HairStylist;


class HairStylistController extends Controller
{
    public function index(Request $request){
        
        $name = null;
        $query = null;
        if($request->has('name')){
            $name = $request->name;
            $query = HairStylist::where('name','like',"%$name%");
        }else{
            $query = null;
        }
        if($query == null){
            $hairStylist = HairStylist::paginate(8);
        }else{
            $hairStylist = $query->paginate(8);
        }
        return view('admin.hairStylist.index',['hairStylist'=>$hairStylist,'name'=>$name]);
    }
    public function addHairStylist(){
        $hairStylist = new HairStylist();
        
        return view('admin.hairStylist.form-hair-stylist',['hairStylist'=>$hairStylist]);
    }
    public function edit($id){
        $hairStylist = HairStylist::find($id);
        if ($hairStylist != null) {
            
            return view('admin.hairStylist.form-hair-stylist',['hairStylist'=> $hairStylist]);
        }
        redirect(route('list_hair_stylist'));
        
    }

    public function delete($id){
        $hairStylist = HairStylist::find($id);
        if ($hairStylist != null) {
            $hairStylist->delete();
        }
        return redirect(route('list_hair_stylist'));
    }

    public function save(Request $request){
        if ($request->id==null) {
            $validateIcon = "required";
        }else{
            $validateIcon = "";
                
        }
        $validatedData = $request->validate([
                'name' => [
                    'required',
                    'max:100'
                ],
                'address'=> 'required|max:255',
                'description'=> 'required|max:255', 
                'avatar' => "$validateIcon",
                'gender' => 'required'
            ],
            [
                'address.required' => 'Please enter a address for the Hair Stylist',
                'description.required' => 'Please enter a description for the Hair Stylist',
                'name.max' => 'Maximum length of no more than 100 characters',
                'name.required' => 'Please enter the Hair Stylist name',
                'address.max' => 'Maximum length of no more than 255 characters',
                'description.max' => 'Maximum length of no more than 255 characters',
                'avatar.required' => 'Please select an avatar',
                'gender.required' => 'Please enter the Hair Stylist gender'
                
            ]
        );
        if($request->id == null){
            $model = new HairStylist();
        }else{
            $model = HairStylist::find($request->id);
        }
        if($request->id == null){    
            $model->fill($request->all());
        }else{
            $model->name = $request->name;
            $model->description = $request->description;
            $model->gender = $request->gender;
            $model->address = $request->address;

        }
        $model->feedback = '5';
        if ($request->hasFile('avatar')) {
            
            $ext = $request->avatar->extension();
            
            $filename = $request->avatar->getClientOriginalName();
            
            $filename = $filename . "-" . str_random(20) . "." . $ext;
            
            $path = $request->avatar->storeAs('hairStylist', $filename);
            
            $model->avatar = "uploaded/$path";
        }
        
        $model->save();
        return redirect(route('list_hair_stylist'));  
    }
}
