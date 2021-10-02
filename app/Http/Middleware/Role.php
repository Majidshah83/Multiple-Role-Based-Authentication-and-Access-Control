<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Auth\Middleware\Role as Middleware;
use Illuminate\Support\Facades\Auth;

class Role {

  public function handle($request, Closure $next, ...$role) {
    
    if (in_array(Auth::User()->role, $role)){
        return $next($request);
    }
    return abort(401);

  }
}