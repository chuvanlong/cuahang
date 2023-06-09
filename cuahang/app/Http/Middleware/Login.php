<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
//su dung doi tuong Auth
use Auth;

class Login
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check() == false)
            return redirect(url('frontend/login'));
        return $next($request);
    }
}