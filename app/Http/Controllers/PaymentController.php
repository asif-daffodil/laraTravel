<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TravelvelaApiService;

class PaymentController extends Controller
{
    protected $travelvelaService;

    public function __construct(TravelvelaApiService $travelvelaService)
    {
        $this->travelvelaService = $travelvelaService;
    }

    public function initiate(Request $request)
    {
        $validated = $request->validate([
            'gateway' => 'required|in:sslcommerz,bkash',
            'module' => 'required',
            'booking_no' => 'required',
            'amount' => 'required|numeric'
        ]);

        $response = $this->travelvelaService->makeRequest(
            'POST',
            '/initiate-payment',
            $validated
        );

        if ($response['success'] ?? false) {
            return redirect($response['payment_url']);
        }

        return back()->with('error', 'Payment initiation failed');
    }

}
