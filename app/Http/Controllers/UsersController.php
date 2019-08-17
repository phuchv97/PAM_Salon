<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Model\Role;
use App\Model\Menus;

use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function index(Request $request){
        $name = null;
        $query = null;
        if($request->has('name')){
            $name = $request->name;
            $query = User::whare('role_id','<','4')->where('name','like',"%$name%");
        }
        if($query == null){
            $users = User::whare('role_id','<','4')->paginate(8);
        }else{
            $users = $query->paginate(8);
        }
        
        return view('admin.users.index',['users'=>$users,'name'=>$name]);
    }
    public function addUser(){
        $user = new User();
        $roles = Role::where('id','<','4')->get();
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

    public function signupGuest(Request $request){
        $validatedData = $request->validate([
            'email'=>[
                'required',
                Rule::unique('users')
            ],
            'phone_number'=> [
                'min:9',
                'max:11',
                Rule::unique('users')],
            'name'=>'required',
            'password'=> 'required',

        ],
        [
            'name.required'=> 'Vui lòng nhập họ tên của bạn',
            'password.required'=> 'Vui lòng nhập mật khẩu đăng nhập',
            'email.required'=> 'Vui lòng nhập email đăng nhập',
            'phone_number.unique'=>'Số điện thoại đã từng đăng ký',
            'email.unique'=>'Email đã từng đăng ký',
            'phone_number.min' => 'vui lòng nhập đúng số điện thoại',
            'phone_number.max' => 'vui lòng nhập đúng số điện thoại',

        ]
    );
        $model = new User();
        $model->name = $request->name;
        $model->email = $request->email;
        $model->phone_number = $request->phone_number;
        $model->role_id = $request->role_id;
        $model->password = Hash::make("$request->password");
        $model->address = "";
        $model->gender = "";
        $model->image = "uploaded/users/default.jpg";
        $model->save();

        return view('home.login',['notification'=>'Đăng ký thành công bạn có thể đăng nhập']);

    }
    public function listGuest(Request $request){
        $name = null;
        $query = null;
        if($request->has('name')){
            $name = $request->name;
            $query = User::where('role_id','=','4')->where('name','like',"%$name%");
        }
        if($query == null){
            $guests = User::where('role_id','=','4')->paginate(8);
        }else{
            $guests = $query->paginate(8);
        }
        
        return view('admin.guests.index',['guests'=>$guests,'name'=>$name]);
    }
    public function deleteGuest($id){
        $guest = User::find($id);
        if($guest != null){
            $guest->delete();
        }
        return redirect(route('list_guest'));
    }
    public function editAccountGuest($id){
        $guest = User::find($id);
        $menus = Menus::all();
        if($guest != null){
            return view('home.form-edit-account-guest',['guest'=>$guest,'menus'=>$menus]);
        }
        return view('home');
    }

    public function saveAccountGuest(Request $request){
                
        $validatedData = $request->validate([
                
                'name'=> 'required|max:100',
                'address'=> 'required|max:255', 
                'gender' => 'required'

            ],
            [
                'name.required' => 'Please enter a name for the User',
                'name.max' => 'Maximum length of no more than 100 characters',
                'address.max' => 'Maximum length of no more than 255 characters',
                'address.required' => 'Please enter a address for the User',
                'gender.required' => 'Please enter a gender for the User',
            ]
        );

        $model = User::find($request->id);
        
            $model->name = $request->name;
            $model->address = $request->address;
            $model->gender = $request->gender;
        
        if ($request->hasFile('image')) {
            
            $ext = $request->image->extension();
            
            $filename = $request->image->getClientOriginalName();
            
            $filename = $filename . "-" . str_random(20) . "." . $ext;
            
            $path = $request->image->storeAs('users', $filename);
            
            $model->image = "uploaded/$path";
        }
        
        $model->save();
        return redirect(route('profile'));
        
    }

    public function save(Request $request){
        if($request->id == null){
            $validateImage = 'required';
        }else{
            $validateImage = "";
        }
        $validatedData = $request->validate([
                'email' => [
                    'required',
                    Rule::unique('users')->ignore($request->id),
                    'max:100'
                ],
                'phone_number' => Rule::unique('users')->ignore($request->id),
                'name'=> 'required|max:100',
                'password'=> 'required|max:36',
                'address'=> 'required|max:255', 
                'image' => $validateImage,
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
                'phone_number.unique'=> 'user phone number already exists',
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
        if($request->id == null){
           $model->fill($request->all()); 
       }else{
            $model->name = $request->name;
            $model->email = $request->email;
            $model->address = $request->address;
            $model->phone_number = $request->phone_number;
            $model->role_id = $request->role_id;

       }
        
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
