<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isAdmin
{

    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {

            if (Auth::user()->category == "admin") {
 
                return $next($request);
 
            } else {
                return back();
            }
            
         }
         else {
             return redirect('/login');
         }
 
    }
}
