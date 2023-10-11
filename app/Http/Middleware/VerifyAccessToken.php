<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class VerifyAccessToken
{
    /**
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!$request->header('authorization')) {
            return response()->json([
                'error' => "Отсутствует 'access token' в заголовке запроса",
                'error_key' => "authorization error",
            ], Response::HTTP_UNAUTHORIZED);
        }

        return $next($request);
    }
}
