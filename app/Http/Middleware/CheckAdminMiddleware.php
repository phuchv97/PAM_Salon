<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class CheckAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check()){
            $role = Auth::user()->role_id;
            if($role <= '3'){
                return $next($request);
            }else{
                Auth::logout();
                return redirect(route('form_login_admin'));
            }
        
        }else{
            return redirect(route('form_login_admin'));
        }
        
    }
}
