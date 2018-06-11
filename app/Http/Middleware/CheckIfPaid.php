<?php

namespace App\Http\Middleware;

use Closure;

class CheckIfPaid
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
        if(\Auth::user()->paid == 0) {
            return redirect('/subscription-cancelled');
        }
        return $next($request);
    }
}
