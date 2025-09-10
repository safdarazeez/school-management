<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth; // ✅ Corrected this line
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminRedirect
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the user is authenticated as admin
        if (Auth::guard('admin')->check()) {
            // If authenticated, redirect to the admin dashboard
            return redirect()->route('admin.dashboard');
        }

        return $next($request);
    }
}
