<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class DarkModeMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (session('darkMode')) {
            $request->attributes->add(['darkMode' => true]);
        }

        return $next($request);
    }
}
