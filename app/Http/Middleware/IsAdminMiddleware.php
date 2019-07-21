<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsAdminMiddleware
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
        if(!Auth::guard('staff')->check()) {
            return redirect('/staff/login');
        }
        
        if(Auth::guard('staff')->user()->role_id === 1) {
            return $next($request);
        } 
    }
}
