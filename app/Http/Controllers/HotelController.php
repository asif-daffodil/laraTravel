<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TravelvelaApiService;

class HotelController extends Controller
{
    protected $travelvelaApiService;

    public function __construct(TravelvelaApiService $travelvelaApiService)
    {
        $this->travelvelaApiService = $travelvelaApiService;
    }

    public function search(Request $request)
    {
        $data = $request->validate([
            'checkin_date' => 'required|date',
            'checkout_date' => 'required|date',
            'location_id' => 'required',
            // other fields
        ]);

        $hotels = $this->travelvelaApiService->makeRequest(
            'POST',
            '/search/hotels',
            $data
        );

        return view('hotels.results', ['hotels' => $hotels]);
    }
}
