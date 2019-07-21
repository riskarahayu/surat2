<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsOperatorMiddleware
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
        } else if(!Auth::guard('staff')->user()->role_id === 2) {
            return redirect('/staff/login');
        } else {
            return $next($request);
        }

    }
}
