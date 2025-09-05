<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Stevebauman\Location\Facades\Location;
use App\Models\Visitor;

class VisitorCounter
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $ip = $request->ip();
        $userAgent = $request->userAgent();
        $referrer = $request->headers->get('referer');

        // Get location info
        $location = Location::get($ip);

        Visitor::create([
            'ip' => $ip ?? 'Unknown',
            'user_agent' => $userAgent ?? 'Unknown',
            'referrer' => $referrer ?? 'Direct',
            'country' => $location?->countryName ?? 'Unknown',
            'city' => $location?->cityName ?? 'Unknown',
            'status' => 'active',
        ]);

        return $next($request);
    }
}
