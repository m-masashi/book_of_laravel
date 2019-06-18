<?php

namespace App\Http\Middleware;

use Closure;

class HelloMiddleware
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
        $data = [
                ['name' => 'taro',      'mail' => 'taro@yamada.com'],
                ['name' => 'hanako',    'mail' => 'sachiko@yamada.com'],
                ['name' => 'sachiko',   'mail' => 'hanako@yamada.com']
            ];
        $request->merge(['data' => $data]);
        return $next($request);
    }
}
