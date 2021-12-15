<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class stillLoggedIn
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
        if(Session()->has('client_id') && (url('/index')==$request->url())
        || Session()->has('client_id') && (url('/services')==$request->url())
        || Session()->has('client_id') && (url('/about_us')==$request->url())
        || Session()->has('client_id') && (url('/contact')==$request->url())
        || Session()->has('client_id') && (url('/login')==$request->url())){
            return back();
        }
        return $next($request);
    }
}
