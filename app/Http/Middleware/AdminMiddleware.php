<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Periksa apakah user terautentikasi terlebih dahulu
        if (!auth()->guard('karyawan')->check()) {
            return redirect('/login');
        }

        // Dapatkan user yang terautentikasi
        $user = auth()->guard('karyawan')->user();
        return $next($request);
    }
}
