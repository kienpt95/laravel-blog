<?php

namespace App\Http\Middleware;

use Closure;

class TwoFactorAuth
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
        $checkpoint = $request->session()->get('2FA');
        return ($checkpoint)? $next($request) : redirect()->route('checkpoint');
    }
}