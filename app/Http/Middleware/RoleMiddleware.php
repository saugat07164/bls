<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request and check if user has one of the allowed roles.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  mixed ...$roles Allowed roles for this route
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        // Check if user is logged in
        if (!auth()->check()) {
            abort(403, 'Unauthorized - You must be logged in.');
        }

        $user = auth()->user();

        // Check if user has any of the allowed roles
        foreach ($roles as $role) {
            if ($user->hasRole($role)) {
                return $next($request);
            }
        }

        // If no roles matched, forbid access
        abort(403, 'Unauthorized - You do not have the right role.');
    }
}
