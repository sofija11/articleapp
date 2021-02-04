<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class DaLiJeUlogovan
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
        if(session()->has('idKorisnik')) {
            return $next($request);
        }
        else {
            abort(403, "Unauthorized action.");
        }  
    }
}
