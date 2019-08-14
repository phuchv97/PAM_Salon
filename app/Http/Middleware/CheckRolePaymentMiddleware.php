<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class CheckRolePaymentMiddleware
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
            if($role <= '2'){
                return $next($request);
            }else{
                Auth::logout();
                return redirect(route('dashboard'));
            }
        
        }else{
            return redirect(route('dashboard'));
        }
    }
}
