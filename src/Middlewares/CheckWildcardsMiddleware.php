<?php

namespace Junges\ACL\Middlewares;

use Closure;
use Illuminate\Support\Facades\Auth;
use Junges\ACL\Exceptions\UnauthorizedException;

class CheckWildcardsMiddleware {

    /**
     * Handle an incoming request.
     *
     * @param $request
     * @param Closure $next
     * @param $permissions
     */
    public function handle($request, Closure $next, $permissions)
    {
        if (Auth::guest()) {
            throw UnauthorizedException::notLoggedIn();
        }
        //
    }
}