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
            $services = Services::paginate(3);
        }else{
            $services = $query->paginate(3);
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
            $validateIcon = "image|required";
        }else{
            $validateIcon = "image";
                
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
                '3.image' => 'Please select the correct image format',
                'icon.required' => 'Please select an icon',
                'price.required' => 'Please enter the service price'
                
            ]
        );
        if($request->id == null){
            $model = new Services();
        }else{
            $model = Services::find($request->id);
        }
            
        $model->fill($request->all());
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
