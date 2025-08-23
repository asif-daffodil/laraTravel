<?php

namespace App\Http\Controllers;

use App\Services\TravelvelaApiService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class FlightController extends Controller
{
    protected $apiService;

    public function __construct(TravelvelaApiService $apiService)
    {
        $this->apiService = $apiService;
    }

    public function getCitiesAndAirports()
    {
        try {
            // Allow bypassing cache by sending ?force=1 (useful during development)
            $force = request()->query('force') == '1';

            if ($force) {
                $citiesAndAirports = $this->apiService->getCitiesAndAirports();
                // If the service returned an error structure, don't cache it and return error
                if (is_array($citiesAndAirports) && isset($citiesAndAirports['error'])) {
                    return response()->json([
                        'success' => false,
                        'error' => 'TravelVela API error: ' . $citiesAndAirports['error']
                    ], 502);
                }
                // store fresh response in cache for next calls (only cache arrays)
                if (is_array($citiesAndAirports)) {
                    Cache::put('cities_airports', $citiesAndAirports, 3600);
                }
            } else {
                // Cache the response for 1 hour to avoid repeated API calls
                $citiesAndAirports = Cache::remember('cities_airports', 3600, function () {
                    return $this->apiService->getCitiesAndAirports();
                });
                // If cached value is an error shape, return it as an error instead of a success
                if (is_array($citiesAndAirports) && isset($citiesAndAirports['error'])) {
                    return response()->json([
                        'success' => false,
                        'error' => 'TravelVela API error: ' . $citiesAndAirports['error']
                    ], 502);
                }
            }

            // Ensure we return a consistent structure: data should be array or object
            return response()->json([
                'success' => true,
                'data' => $citiesAndAirports
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'error' => 'Failed to fetch cities and airports: ' . $e->getMessage()
            ], 500);
        }
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
