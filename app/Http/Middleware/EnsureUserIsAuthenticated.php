<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsureUserIsAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Mengecek apakah pengguna sudah terautentikasi
        if (Auth::check()) {
            return redirect()->route('home');
        } else {
            return redirect()->route('auth.sign-in');
        }

        return $next($request);
    }
}
