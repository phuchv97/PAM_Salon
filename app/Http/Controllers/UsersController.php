<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Model\Role;
use Illuminate\Validation\Rule;

class UsersController extends Controller
{
    public function index(Request $request){
        $name = null;
        $query = null;
        if($request->has('name')){
            $name = $request->name;
            $query = User::where('name','like',"%$name%");
        }
        if($query == null){
            $users = User::paginate(8);
        }else{
            $users = $query->paginate(8);
        }
        
        return view('admin.users.index',['users'=>$users,'name'=>$name]);
    }
    public function addUser(){
        $user = new User();
        $roles = Role::all();
        return view('admin.users.form-user',['user'=>$user,'roles'=>$roles]);
    }
    public function editUser($id){
        $roles = Role::all();
        $user = User::find($id);
        if($user != null){
            return view('admin.users.form-user',['user'=>$user,'roles'=>$roles]);
        }else{
            return redirect(route('list_user'));
        }

    }
    public function delete($id){
        $user = User::find($id);
        if($user != null){
            $user->delete();
        }
        return redirect(route('list_user'));
    }


    public function save(Request $request){
        
        $validatedData = $request->validate([
                'email' => [
                    'required',
                    Rule::unique('users')->ignore($request->id),
                    'max:100'
                ],
                'name'=> 'required|max:100',
                'password'=> 'required|max:36',
                'address'=> 'required|max:255', 
                'image' => "required",
                'phone_number' => 'required',
                'gender' => 'required',
                'role_id' => 'required',

            ],
            [
                'name.required' => 'Please enter a name for the User',
                'name.max' => 'Maximum length of no more than 100 characters',
                'email.unique' => 'user email already exists',
                'email.max' => 'Maximum length of no more than 100 characters',
                'email.required' => 'Please enter the user email',
                'password.max' => 'Maximum length of no more than 36 characters',
                'password.required' => 'Please enter a password for the User',
                'address.max' => 'Maximum length of no more than 255 characters',
                'address.required' => 'Please enter a address for the User',
                'phone_number.required' => 'Please enter a phone_number for the User',
                'gender.required' => 'Please enter a gender for the User',
                'image.required' => 'Please select an Image',
                'role_id.required' => 'Please enter the user role'
                
            ]
        );
        if($request->id == null){
            $model = new User();
        }else{
            $model = User::find($request->id);
        }
            
        $model->fill($request->all());
        if ($request->hasFile('image')) {
            
            $ext = $request->image->extension();
            
            $filename = $request->image->getClientOriginalName();
            
            $filename = $filename . "-" . str_random(20) . "." . $ext;
            
            $path = $request->image->storeAs('users', $filename);
            
            $model->image = "uploaded/$path";
        }
        
        $model->save();
        return redirect(route('list_user')); 
    }

}
