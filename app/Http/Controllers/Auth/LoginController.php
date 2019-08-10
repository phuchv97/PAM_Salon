<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest')->except('logout');
    }
    public function index(){
        return view('admin.login.index');
    }
    public function login(Request $request){
        $userEmail = $request['email'];
        $password = $request['password'];
        if(Auth::attempt(['email'=>$userEmail,'password'=>$password])){
            return redirect(route('dashboard'));
        }else{
            return redirect(route('form_login_admin',['error'=>'Sai tài khoản, vui lòng nhập lại']));
        }
    }
    public function loginGuest(Request $request){
        $userEmail = $request['email'];
        $password = $request['password'];
        if(Auth::attempt(['email'=>$userEmail,'password'=>$password])){
            return redirect(route('home'));
        }else{
            return redirect(route('login',['error'=>'Sai tài khoản, vui lòng nhập lại']));
        }
    }
    public function logout(){
        Auth::logout();
        return redirect(route('form_login_admin'));
    }
    public function logoutGuest(){
        Auth::logout();
        return redirect(route('login'));
    }
}
