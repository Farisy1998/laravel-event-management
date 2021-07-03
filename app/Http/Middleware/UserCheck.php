<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserCheck
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
        if(!session()->has('LoggedUser') && ($request->path() !='/' && $request->path() !='/register')){
            return redirect('/')->with('fail','Please sign in.');
        }
        if(session()->has('LoggedUser') && ($request->path() == '/' || $request->path() =='/register')){
            return redirect('/userhome');
        }
        return $next($request)->header('Cache-Control','no-cache,no-store,max-age=0,must-revalidate')
                            ->header('Pragma','no-cache')
                            ->header('Expires','sat 01 Jan 1990 00:00:00 GMT');;

    }
}
