<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class ApiAuthenticated
{
    public function handle($request, Closure $next)
    {
        if (!Session::has('api_token')) {
            return redirect()->route('login')->with('error', 'Please login to access this page');
        }

        return $next($request);
    }
}
