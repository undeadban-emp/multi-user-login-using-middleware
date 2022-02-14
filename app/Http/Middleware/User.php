<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class User
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
        if(!Auth::check()){
            return redirect()->route('login');
        }
        // role 1 is admin
        if(Auth::user()->role == 1){
            return redirect()->route('admin');
        }
        // role 2 is manager
        if(Auth::user()->role == 2){
            return redirect()->route('manager');
        }
        // role 3 is user
        if(Auth::user()->role == 3){
            return $next($request);
        }
    }
}
