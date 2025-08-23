<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TravelvelaApiService;
use Illuminate\Support\Facades\Log;

class TestController extends Controller
{
    protected $apiService;

    public function __construct(TravelvelaApiService $apiService)
    {
        $this->apiService = $apiService;
    }

    public function testCitiesApi()
    {
        // First, let's test with direct cURL to see what we get
        $url = 'https://admin.travelvela.com/api/cities/airports';
        $headers = [
            'Authorization: TravelVela-DYSBW7537NUDD7078',
            'username: genesis',
            'password: ERTYUIO87347854',
            'Content-Type: application/json'
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);

        $curlResponse = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $curlError = curl_error($ch);
        curl_close($ch);

        $curlData = null;
        if ($curlResponse) {
            $curlData = json_decode($curlResponse, true);
        }

        // Now test with our service
        $serviceResponse = $this->apiService->getCitiesAndAirports();

        $result = [
            'curl_test' => [
                'http_code' => $httpCode,
                'error' => $curlError,
                'data_count' => $curlData ? (is_array($curlData) ? count($curlData) : 'not_array') : 'no_data',
                'first_item' => $curlData && is_array($curlData) && count($curlData) > 0 ? $curlData[0] : null,
                'raw_response' => substr($curlResponse, 0, 500) // First 500 chars
            ],
            'service_test' => [
                'has_error' => isset($serviceResponse['error']),
                'error_message' => isset($serviceResponse['error']) ? $serviceResponse['error'] : null,
                'data_count' => isset($serviceResponse['error']) ? 0 : (is_array($serviceResponse) ? count($serviceResponse) : 'not_array'),
                'first_item' => !isset($serviceResponse['error']) && is_array($serviceResponse) && count($serviceResponse) > 0 ? $serviceResponse[0] : null
            ]
        ];

        // Write to a log file for debugging
        file_put_contents(storage_path('logs/api_test.json'), json_encode($result, JSON_PRETTY_PRINT));

        return response()->json($result);
    }
}
