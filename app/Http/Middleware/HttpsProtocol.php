<?php
namespace App\Http\Middleware;

use Closure;

class HttpsProtocol {

    public function handle($request, Closure $next)
    {
            if (!$request->secure() && env('ENABLE_HTTPS_SUPPORT', false)) {
                return redirect()->secure($request->getRequestUri());
            }
            return $next($request); 
    }
}

?>