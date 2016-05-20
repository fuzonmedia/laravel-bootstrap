<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
      if($guard == 'api')
      {
        if (Auth::guard($guard)->guest()) {
          $error_obj=array('Code' => 401,'Status'=>'Fail','Message'=> 'Unauthorized or Invalid Token' );
          return response()->json($error_obj);
        }

        return $next($request);
      }
      else {
        if (Auth::guard($guard)->guest()) {
            if ($request->ajax() || $request->wantsJson()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->guest('login');
            }
        }

        return $next($request);
      }

    }
}
