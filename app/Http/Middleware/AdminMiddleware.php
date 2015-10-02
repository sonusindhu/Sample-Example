<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use App\Http\Requests\Request;

class AdminMiddleware {

        protected $auth;

        public function __construct(Guard $auth) {
                $this->auth = $auth;
        }

        /**
         * Handle an incoming request.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \Closure  $next
         * @return mixed
         */
        public function handle($request, Closure $next) {
                if (!\Auth::check()){
                    return redirect('/admin/login')->with('error', 'login');
                }else if (!$request->user()->hasRole('admin')) {
                        return redirect('/admin/login')->with('error', 'unauthorized');
                }
                return $next($request);
        }

}
