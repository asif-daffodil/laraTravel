<?php

namespace App\Http\Controllers;

use App\Services\TravelvelaApiService;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    protected $apiService;

    public function __construct(TravelvelaApiService $apiService)
    {
        $this->apiService = $apiService;
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $response = $this->apiService->login([
            'email' => $request->email,
            'password' => $request->password
        ]);

        if (isset($response['error'])) {
            return back()->with('error', $response['error']);
        }

        return redirect()->intended('/dashboard');
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'contact' => 'required'
        ]);

        $response = $this->apiService->register([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'contact' => $request->contact
        ]);

        if (isset($response['error'])) {
            return back()->with('error', $response['error']);
        }

        return redirect()->route('login')->with('success', 'Registration successful. Please login.');
    }

    public function logout()
    {
        $this->apiService->logout();
        return redirect('/');
    }
}
