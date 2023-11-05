<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckUserRole
{
    public function handle($request, Closure $next, $role)
    {
        if ($request->user() && $request->user()->HasRole($role)) {
            return $next($request);
        }
        abort(403, 'Unauthorized.');
    }
}
