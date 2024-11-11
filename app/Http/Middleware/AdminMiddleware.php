<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is an authenticated admin
        if (!session('is_admin')) {
            return redirect()->route('admin.login');
        }

        return $next($request);
    }
}
