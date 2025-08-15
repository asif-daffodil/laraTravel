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
        $this->baseUrl = config('travelvela.api_url');
        $this->headers = [
            'Authorization' => config('travelvela.auth_header'),
            'username' => config('travelvela.username'),
            'password' => config('travelvela.password'),
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
            $response = $this->client->request($method, $this->baseUrl . $endpoint, [
                'headers' => $this->getAuthHeaders(),
                'form_params' => $data
            ]);

            return json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }
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

    // Flight methods
    public function getCitiesAndAirports()
    {
        return $this->makeRequest('GET', '/cities/airports');
    }

    public function searchFlights($data)
    {
        return $this->makeRequest('POST', '/flight/search', $data);
    }

    // Add more API methods as needed
}
