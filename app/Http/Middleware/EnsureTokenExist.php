<?php

namespace App\Http\Middleware;

use Closure;

class EnsureTokenExist
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $token)
    {
        dd($token);
        if ($token != 'my-secret-token') {
            dd('token error');
        }
        return $next($request);
    }
}
