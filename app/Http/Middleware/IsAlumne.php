<?php

namespace App\Http\Middleware;

use Closure;

class IsAlumne{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next){
        if($request->user()->rol != 'alumne'){
            return redirect('/');
        }
        return $next($request);
    }
}
