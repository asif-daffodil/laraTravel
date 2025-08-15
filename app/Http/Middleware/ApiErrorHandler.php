<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class ApiErrorHandler
{
    public function handle(Request $request, Closure $next): Response
    {
        try {
            $response = $next($request);

            // Check for API errors in the response content
            $content = json_decode($response->getContent(), true);
            if (isset($content['error'])) {
                Session::flash('error', $content['error']);
                return back();
            }

            return $response;

        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $statusCode = $e->getResponse()->getStatusCode();

            if ($statusCode === 401) {
                Session::forget('api_token');
                return redirect()->route('login')->with('error', 'Session expired. Please login again.');
            }

            return back()->with('error', 'API request failed: ' . $e->getMessage());
        }
    }
}
