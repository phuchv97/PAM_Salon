<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Services;
use Illuminate\Validation\Rule;

class ServiceController extends Controller
{
    public function index(Request $request){
        $name = null;
        $query = null;
        if($request->has('name')){
            $name = $request ->name;
            $query = Services::where('name','like',"%$name%");
        }else{
            $query = null;
        }
        if($query == null){
            $services = Services::paginate(8);
        }else{
            $services = $query->paginate(8);
        }
        return view('admin.services.index',compact('services','name'));
    }
    public function addService(){
        $service = new Services();
        
        return view('admin.services.form-service',['service'=>$service]);
    }
    public function edit($id){
    	$service = Services::find($id);
    	if ($service != null) {
    		
    		return view('admin.services.form-service',['service'=> $service]);
       	}
       	redirect(route('list_services'));
    	
    }

    public function remove($id){
    	$service = Services::find($id);
    	if ($service != null) {
    		$service->delete();
    	}
    	return redirect(route('list_services'));
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
                    Rule::unique('services')->ignore($request->id),
                    'max:100'
                ],
                'description'=> 'required|max:255', 
                'icon' => "$validateIcon",
                'price' => 'required'
            ],
            [
                'description.required' => 'Please enter a description for the service',
                'name.unique' => 'Service name already exists',
                'name.max' => 'Maximum length of no more than 100 characters',
                'name.required' => 'Please enter the service name',
                'description.max' => 'Maximum length of no more than 255 characters',
                
                'icon.required' => 'Please select an icon',
                'price.required' => 'Please enter the service price'
                
            ]
        );
        if($request->id == null){
            $model = new Services();
        }else{
            $model = Services::find($request->id);
        }
        if($request->id == null){    
            $model->fill($request->all());
        }else{
            $model->name = $request->name;
            $model->description = $request->description;
            $model->price = $request->price;
            $model->user_id = $request->user_id;

        }
        if ($request->hasFile('icon')) {
            
            $ext = $request->icon->extension();
            
            $filename = $request->icon->getClientOriginalName();
            
            $filename = $filename . "-" . str_random(20) . "." . $ext;
            
            $path = $request->icon->storeAs('services', $filename);
            
            $model->icon = "uploaded/$path";
        }
        
        $model->save();
        return redirect(route('list_services'));  
    }
}
