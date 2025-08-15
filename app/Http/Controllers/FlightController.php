<?php

namespace App\Http\Controllers;

use App\Services\TravelvelaApiService;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    protected $travelvelaApiService;

    public function __construct(TravelvelaApiService $travelvelaApiService)
    {
        $this->travelvelaApiService = $travelvelaApiService;
    }

    public function searchForm()
    {
        $cities = $this->travelvelaApiService->getCitiesAndAirports();
        return view('flights.search', ['cities' => $cities ?? []]);
    }

    public function search(Request $request)
    {
        $data = $request->validate([
            'origin_location' => 'required',
            'destination_location' => 'required',
            'departure_date' => 'required|date',
            // other fields
        ]);

        $flights = $this->travelvelaApiService->makeRequest(
            'POST',
            '/flight/search',
            $data
        );

        return view('flights.results', ['flights' => $flights]);
    }
}
