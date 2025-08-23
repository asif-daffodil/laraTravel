<?php

namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;

class TravelvelaApiService
{
    protected $client;
    protected $baseUrl;
    protected $headers;

    public function __construct()
    {
        $this->client = new Client();
        // Default to the public TravelVela admin API and credentials if not configured
        $this->baseUrl = config('travelvela.api_url', 'https://admin.travelvela.com/api');
        $this->headers = [
            'Authorization' => config('travelvela.auth_header', 'TravelVela-DYSBW7537NUDD7078'),
            'username' => config('travelvela.username', 'genesis'),
            'password' => config('travelvela.password', 'ERTYUIO87347854'),
            'Accept' => 'application/json',
        ];
    }

    protected function getAuthHeaders()
    {
        $headers = $this->headers;

        if (Session::has('api_token')) {
            $headers['Authorization'] = 'Bearer ' . Session::get('api_token');
        }

        return $headers;
    }

    public function makeRequest($method, $endpoint, $data = [])
    {
        try {
            $options = [
                'headers' => $this->getAuthHeaders(),
            ];

            if ($method === 'GET' && !empty($data)) {
                $options['query'] = $data;
            } elseif ($method !== 'GET') {
                $options['form_params'] = $data;
            }

            $response = $this->client->request($method, $this->baseUrl . $endpoint, $options);

            return json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }

    public function get($endpoint, $data = [])
    {
        return $this->makeRequest('GET', $endpoint, $data);
    }

    // Authentication methods
    public function register($data)
    {
        return $this->makeRequest('POST', '/user/registration', $data);
    }

    public function login($data)
    {
        $response = $this->makeRequest('POST', '/user/login', $data);
        if (isset($response['token'])) {
            Session::put('api_token', $response['token']);
        }
        return $response;
    }

    public function logout()
    {
        $response = $this->makeRequest('POST', '/logout');
        Session::forget('api_token');
        return $response;
    }

    // Blog methods
    public function getBlogCategories()
    {
        return $this->makeRequest('GET', '/get/blog/categories');
    }

    public function getBlogList()
    {
        return $this->makeRequest('GET', '/get/blog/list');
    }

    public function getBlogDetails($slug)
    {
        return $this->makeRequest('GET', "/blog/details/{$slug}");
    }

    // Flight methods
    public function getCitiesAndAirports()
    {
        try {
            // Use direct headers without session token for this specific API
            $options = [
                'headers' => $this->headers, // Use original headers, not getAuthHeaders()
                // Some environments may need to skip SSL verification for this external host
                'verify' => false,
            ];

            $response = $this->client->request('GET', rtrim($this->baseUrl, '/') . '/cities/airports', $options);

            return json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }

    public function searchFlights($data)
    {
        return $this->makeRequest('POST', '/flight/search', $data);
    }

    // Add more API methods as needed
}
