<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog-sidebar', function () {
    return view('blog-sidebar');
});

Route::get('/blog-single', function () {
    return view('blog-single');
});

Route::get('/blog/{slug}', [App\Http\Controllers\BlogController::class, 'show'])->name('blog.show');

// API routes for flights
Route::get('/api/cities-airports', [App\Http\Controllers\FlightController::class, 'getCitiesAndAirports']);

// Test route for debugging
Route::get('/test-cities-api', [App\Http\Controllers\TestController::class, 'testCitiesApi']);

// Simple API test
Route::get('/simple-api-test', function () {
    try {
        $apiService = new App\Services\TravelvelaApiService();
        $response = $apiService->getCitiesAndAirports();

        if (isset($response['error'])) {
            return response("<h1>API Error</h1><p>{$response['error']}</p><p>You are seeing only 3 cities because the API failed and the system is using fallback data.</p>");
        }

        $count = is_array($response) ? count($response) : 0;
        return response("<h1>API Success</h1><p>Found {$count} cities/airports</p><p>This means the API is working and you should see more than 3 cities in the dropdown.</p>");
    } catch (Exception $e) {
        return response("<h1>Exception</h1><p>{$e->getMessage()}</p><p>You are seeing only 3 cities because the API failed and the system is using fallback data.</p>");
    }
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/destinations', function () {
    return view('destinations');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/flight-booking', function () {
    return view('flight-booking');
});

Route::get('/flight-search-result', function () {
    return view('flight-search-result');
});

Route::get('/flight-single', function () {
    return view('flight-single');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/hotel-booking', function () {
    return view('hotel-booking');
});

Route::get('/hotel-search-result', function () {
    return view('hotel-search-result');
});

Route::get('/hotel-single', function () {
    return view('hotel-single');
});

Route::fallback(function () {
    return response()->view('page-404', [], 404);
});

Route::get('/payment-complete', function () {
    return view('payment-complete');
});

Route::get('/payment-received', function () {
    return view('payment-received');
});

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/recover', function () {
    return view('recover');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/tour-booking', function () {
    return view('tour-booking');
});

Route::get('/tour-details', function () {
    return view('tour-details');
});

Route::get('/tour-search-result', function () {
    return view('tour-search-result');
});

Route::get('/user-dashboard', function () {
    return view('user-dashboard');
});

Route::get('/user-dashboard-booking', function () {
    return view('user-dashboard-booking');
});

Route::get('/user-dashboard-flight-booking-details', function () {
    return view('user-dashboard-flight-booking-details');
});

Route::get('/user-dashboard-hotel-booking-details', function () {
    return view('user-dashboard-hotel-booking-details');
});

Route::get('/user-dashboard-profile', function () {
    return view('user-dashboard-profile');
});

Route::get('/user-dashboard-settings', function () {
    return view('user-dashboard-settings');
});

Route::get('/user-dashboard-reviews', function () {
    return view('user-dashboard-reviews');
});

Route::get('/user-dashboard-wishlist', function () {
    return view('user-dashboard-wishlist');
});

Route::get('/user-profile', function () {
    return view('user-profile');
});

// Email verification page
Route::get('/verify-email', function () {
    return view('verify-email');
})->name('verify.email');

Route::post('/verify-email', function (Illuminate\Http\Request $request) {
    $data = $request->validate([
        'code' => 'required|string',
        'email' => 'required|email',
        'password' => 'required|string|min:6',
    ]);

    // Minimal placeholder handling: flash success and redirect back.
    // Replace this with real verification logic as needed.
    session()->flash('verify_success', 'Verification submitted. We will process it.');
    return redirect()->back();
})->name('verify.email.submit');
