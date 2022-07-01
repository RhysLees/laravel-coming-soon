<?php

namespace RhysLees\ComingSoon\Http\Middlware;

use Closure;

class ComingSoonMiddleware
{
    public function handle($request, Closure $next)
    {
        // Check if coming-soon is enabled and if so, redirect to the coming-soon page
        if (config('coming-soon.enabled')) {
            if ($request->expectsJson()) {
                return response()->json(['message' => config('coming-soon.message')], 503);
            }

            return redirect()->route('laravel-coming-soon.coming-soon');
        }

        return $next($request);
    }
}
