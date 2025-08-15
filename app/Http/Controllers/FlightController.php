<?php

namespace App\Http\Controllers;

use App\Services\TravelvelaApiService;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    protected $apiService;

    public function __construct(TravelvelaApiService $apiService)
    {
        $this->apiService = $apiService;
    }

    public function searchForm()
    {
        $cities = $this->apiService->getCitiesAndAirports();
        return view('flights.search', ['cities' => $cities ?? []]);
    }

    public function search(Request $request)
    {
        $request->validate([
            'origin_location' => 'required',
            'destination_location' => 'required',
            'departure_date' => 'required|date',
        ]);

        $data = $request->only([
            'origin_location', 'destination_location',
            'departure_date', 'return_date', 'cabin_class',
            'traveler', 'traveler_child', 'traveler_infant'
        ]);

        $flights = $this->apiService->searchFlights($data);

        return view('flights.results', [
            'flights' => $flights ?? [],
            'searchParams' => $data
        ]);
    }
}
