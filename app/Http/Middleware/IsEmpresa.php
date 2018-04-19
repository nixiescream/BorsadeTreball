<?php

namespace App\Http\Middleware;

use Closure;

class IsEmpresa{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next){
        if($request->user()->rol != 'empresa'){
            return redirect('/');
        }
        return $next($request);
    }
}
