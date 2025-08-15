<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TravelvelaApiService;

class DashboardController extends Controller
{
    protected $travelvelaApiService;

    public function __construct(TravelvelaApiService $travelvelaApiService)
    {
        $this->travelvelaApiService = $travelvelaApiService;
    }
    public function index()
    {

        return view('dashboard', [
            'user' => $this->travelvelaApiService->makeRequest('GET', '/user'),
            'flights' => $this->travelvelaApiService->makeRequest('GET', '/my/flight/booking'),
            'hotels' => $this->travelvelaApiService->makeRequest('GET', '/my/hotel/bookings'),
            'tours' => $this->travelvelaApiService->makeRequest('GET', '/my/tour/bookings')
        ]);
    }

}
