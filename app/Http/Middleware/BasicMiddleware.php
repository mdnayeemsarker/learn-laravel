<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class BasicMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        $id_list=[
            'aa',
            'bb',
            'cc',
            'dd',
            'ee',
            'ff',
            'gg',
            'hh',
            'ii',
            'jj',
        ];

        if (in_array($request->basicM, $id_list)) {
            return $next($request);
        }

        return redirect()-> to('/');


        
    }
}
