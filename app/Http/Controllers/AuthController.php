<?php

namespace App\Http\Controllers;

use App\Services\TravelvelaApiService;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    protected $travelvelaApiService;

    public function __construct(TravelvelaApiService $travelvelaApiService)
    {
        $this->travelvelaApiService = $travelvelaApiService;
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $response = $this->travelvelaApiService->login([
            'email' => $request->email,
            'password' => $request->password
        ]);

        if (isset($response['token'])) {
            session(['api_token' => $response['token']]);
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
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

        $response = $this->travelvelaApiService->register([
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
        $this->travelvelaApiService->logout();
        return redirect('/');
    }
}
