<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;


class AdminRole
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
        $getRole = \App\Roles::where('user_id', $user->id)->value('role_name');
        if($getRole == 'admin'){
           return $next($request);
        }
        return redirect('no-acess');
    }
}
