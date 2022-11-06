<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class userLogInSession
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
        if(!session('user_id')){
            return redirect('login')->withSuccess('Oppes! You have entered invalid credentials.');
        }
        return $next($request);
    }
}
