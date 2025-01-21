<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Session;

class AuthSessionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Cek jika 'user' atau 'token' tidak ada di sesi
        if (!$request->session()->has('user') || !$request->session()->has('token')) {
            Log::info('Session missing for user or token, redirecting to login');
            return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu.');
        }

        // Log session data jika ditemukan
        Log::info('User session found', ['user' => $request->session()->get('user'), 'token' => $request->session()->get('token')]);

        // Lanjutkan ke request berikutnya
        return $next($request);
    }
}
