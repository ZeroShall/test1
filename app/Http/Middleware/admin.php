<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class Admin
{
    protected $auth;

    public function __construct(Guard $guard)
    {
        $this->auth = $guard;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($this->auth->user()->group_id != 1) {
            //return redirect('home');
            die('Ban khong co quyen truy cap');
        }

        return $next($request);
    }
}
