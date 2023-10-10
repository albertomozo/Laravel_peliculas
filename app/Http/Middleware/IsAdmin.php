<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class IsAdmin
{

    public function handle(Request $request, Closure $next): Response
    {

        // Log::info('Name', ['name' => Auth::user()->name]);
        // Log::info('Role', ['role' => Auth::user()->role]);
        if (Auth::check() && Auth::user()->role == 'admin') {
            return $next($request);
        }

        return redirect()->route('dashboard');
    }
}
