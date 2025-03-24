<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class checkAdminLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, $guard = null)
{
    if (Auth::guard($guard)->guest()) {
        return redirect()->route('login'); // Kiểm tra xem người dùng có đăng nhập chưa
    }

    return $next($request);
}
}
