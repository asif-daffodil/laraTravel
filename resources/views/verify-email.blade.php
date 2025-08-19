@extends('layouts.app', ['style' => 'style-2'])

@section('title', 'Verify Email')

@section('content')
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Email Verification (Please check you email)</div>
                    <div class="card-body">
                        @if(session('verify_success'))
                            <div class="alert alert-success">{{ session('verify_success') }}</div>
                        @endif

                        <form method="POST" action="{{ route('verify.email.submit') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="code" class="form-label">Verification Code</label>
                                <input id="code" name="code" type="text" class="form-control @error('code') is-invalid @enderror" value="{{ old('code') }}" required>
                                @error('code')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
                                @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror" required>
                                @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Submit Verification</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')

<script>
// On page load, check if user is already logged in
document.addEventListener('DOMContentLoaded', function() {
    if (localStorage.getItem('loginData')) {
        window.location.href = '/';
    }
    // Intercept form submit
    const form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            // Get form data
            const code = document.getElementById('code').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            // Prepare request
            fetch('https://admin.travelvela.com/api/user/verification', {
                method: 'POST',
                headers: {
                    'Authorization': 'TravelVela-DYSBW7537NUDD7078',
                    'username': 'genesis',
                    'password': 'ERTYUIO87347854',
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    code: code,
                    email: email,
                    password: password
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Save login data to localStorage
                    localStorage.setItem('loginData', JSON.stringify(data.data));
                    // Redirect to home page
                    window.location.href = '/';
                } else {
                    alert(data.message || 'Verification failed.');
                }
            })
            .catch(err => {
                alert('Network or server error.');
            });
        });
    }
});
</script>

