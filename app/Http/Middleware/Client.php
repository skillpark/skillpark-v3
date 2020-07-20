<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Client
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

        if (Auth::user()->hasAnyRole('client')) {
            return $next($request);
        }
        return redirect('home');

        if (Auth::user()->usertype == 'client') {
            return $next($request);
        } else {
            return redirect()->back()->with('warning', 'You don\'t have permission to perform this action.');
        }
    }
}
