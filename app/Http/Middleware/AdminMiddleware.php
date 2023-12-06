<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check()){
            if(Auth::user()->role_as == '1'){ //Admin=1, User=0
                return $next($request);
            }
            else{
                return redirect('/home')->with('status','Access denied! You are not an Admin');
            }
        }
        else{
            return redirect('/login')->with('status','Please Login first');
        }
    }
}
