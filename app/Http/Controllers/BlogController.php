<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TravelvelaApiService;

class BlogController extends Controller
{
    protected $apiService;

    public function __construct(TravelvelaApiService $apiService)
    {
        $this->apiService = $apiService;
    }

    public function show($slug)
    {
        try {
            $response = $this->apiService->getBlogDetails($slug);

            if ($response && isset($response['success']) && $response['success']) {
                $blog = $response['data'];
                return view('blog-single', compact('blog'));
            } else {
                abort(404, 'Blog post not found');
            }
        } catch (\Exception $e) {
            abort(404, 'Blog post not found');
        }
    }
}
