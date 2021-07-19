<?php

namespace App\Http\Middleware;

use App\Http\Response\ResponseService;
use App\Http\Validator\validationFunList;
use Closure;

class validationMiddleware
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
        $routeName = $request->route()->getName();
        $result = validationFunList::$routeName($request);
        if (isset($result['errorKey'])){
            return (ResponseService::outputForController($result));
        } else{
            return $next($request);

        }

    }

}


