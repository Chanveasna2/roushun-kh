<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class IsAdmin
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle($request, Closure $next)
    {
        $user = Auth::user();
        if(auth()->check()) {
            if (!$user->isAdmin()) {
                return redirect('/admin');
            } else {
                return $next($request);
            }
        }else{
            return redirect('/login');
        }

    }
}
