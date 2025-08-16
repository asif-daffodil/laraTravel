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
