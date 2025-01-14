<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(session('logged_admin')){
            return $next($request);
        }
        return redirect()->route('admin.login')->with('status', 'You must be logged in as an admin!');
        
    }
}
