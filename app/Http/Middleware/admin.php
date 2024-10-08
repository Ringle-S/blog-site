<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use symfony\Component\HttpFoundation\Response;
class admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(auth()->user()->usertype=="admin"){
        return $next($request);
        }
        abort(401);
    }
}
