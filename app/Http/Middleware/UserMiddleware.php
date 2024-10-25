<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()){
            if (Auth::user()->role === 'user'){
                return $next($request);
            }
            else{
                return redirect('/admin')->with('message', 'akses user di tolak');
            }
        }
        else{
            return redirect('/login')->with('message', 'Harap login terlebih dahulu');
        }
        
        return $next($request);
    }
    }

