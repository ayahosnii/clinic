<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class Dentists
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
        // Check if the user is authenticated and belongs to the "dentists" guard
        if (Auth::guard('dentist')->check()) {
            return $next($request);
        }

        // If not authenticated as a dentist, you can redirect or perform other actions
        return redirect('/dentist/login'); // Redirect to the login page
    }
}

