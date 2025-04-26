<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check() && auth()->user()->email === 'youradminemail@example.com') {
            return redirect()->route('admin.payments');
        }

        return $next($request);
    }
}
