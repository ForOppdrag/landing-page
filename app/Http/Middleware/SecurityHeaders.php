<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SecurityHeaders
{
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        $scriptSources = ["'self'", "'unsafe-inline'"];
        $styleSources = ["'self'", "'unsafe-inline'"];
        $connectSources = ["'self'"];

        if (file_exists(public_path('hot'))) {
            $scriptSources[] = 'http://127.0.0.1:5173';
            $scriptSources[] = 'http://localhost:5173';
            $styleSources[] = 'http://127.0.0.1:5173';
            $styleSources[] = 'http://localhost:5173';
            $connectSources[] = 'ws://127.0.0.1:5173';
            $connectSources[] = 'ws://localhost:5173';
            $connectSources[] = 'http://127.0.0.1:5173';
            $connectSources[] = 'http://localhost:5173';
        }

        $csp = implode('; ', [
            "default-src 'self'",
            "base-uri 'self'",
            "form-action 'self'",
            "frame-ancestors 'none'",
            "object-src 'none'",
            "img-src 'self' data: blob:",
            "media-src 'self' blob:",
            "font-src 'self' data:",
            'style-src '.implode(' ', $styleSources),
            'script-src '.implode(' ', $scriptSources),
            'connect-src '.implode(' ', $connectSources),
            "worker-src 'self' blob:",
            'upgrade-insecure-requests',
        ]);

        $response->headers->set('Content-Security-Policy', $csp);
        $response->headers->set('Referrer-Policy', 'strict-origin-when-cross-origin');
        $response->headers->set('X-Content-Type-Options', 'nosniff');
        $response->headers->set('X-Frame-Options', 'DENY');
        $response->headers->set('Permissions-Policy', 'camera=(), microphone=(), geolocation=(), browsing-topics=(), interest-cohort=()');
        $response->headers->set('Cross-Origin-Opener-Policy', 'same-origin');
        $response->headers->set('Cross-Origin-Resource-Policy', 'same-origin');

        if ($request->isSecure()) {
            $response->headers->set('Strict-Transport-Security', 'max-age=31536000; includeSubDomains; preload');
        }

        return $response;
    }
}
