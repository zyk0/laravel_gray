<?php

namespace App\Http\Middleware;

use Closure;

class SecretPage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
	 //  register secretpage in  Kernel.php
     */
    public function handle($request, Closure $next)
    {
        if($request->ip() == "127.0.0.1"){ 
			return $next($request); 
		}else { 
			return redirect("/"); //("404")
		}
    }
}
