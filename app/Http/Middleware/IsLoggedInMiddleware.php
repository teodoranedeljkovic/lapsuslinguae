<?php

namespace App\Http\Middleware;

use Closure;

class IsLoggedInMiddleware
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
        if(!$request->session()->has('user')){
            return redirect()->route('home');
        }

        return $next($request);
    }
}
