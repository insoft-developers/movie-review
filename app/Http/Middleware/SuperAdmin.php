<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class SuperAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::guard('admin')->user();

        // Cek apakah user login dan super admin
        if ($user && $user->level === 'super') {
            return $next($request);
        }

        // Redirect jika bukan super admin
        return redirect()->to('/mvadmin')->with('error', 'Akses ditolak. Halaman khusus super admin.');
    }
}
