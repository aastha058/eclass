@extends('landing.publiclayout')

@section('title')

    Login for Admission

@endsection

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-header bg-danger text-white text-center rounded-top-4 py-3">
                        <h4 class="mb-1">Student Login</h4>
                        <small class="fs-6">Access your dashboard</small>
                    </div>
                    <div class="card-body bg-light rounded-bottom-4">
                        @session("msg")
                        <div class="alert alert-danger" role="alert">
                        {{ session("msg") }}
                </div>
                           
                        @endsession
                        <form action="" method="post">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Email Address</label>
                                <input type="email" name="email" value="{{ old('email') }}"
                                    class="form-control rounded-pill shadow-sm">
                                @error('email') <p class="text-danger small">{{ $message }}</p> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold">Password</label>
                                <input type="password" name="password" class="form-control rounded-pill shadow-sm">
                                @error('password') <p class="text-danger small">{{ $message }}</p> @enderror
                            </div>

                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                    <label class="form-check-label" for="remember">Remember me</label>
                                </div>
                                <a href="#" class="text-decoration-none small text-primary">Forgot Password?</a>
                            </div>

                            <div class="mb-3">
                                <input type="submit" class="btn btn-success w-100 fw-bold rounded-pill py-2"
                                    value="🔐 Login">
                            </div>

                            <p class="text-center text-muted small">Don't have an account? <a
                                    href="{{ route('public.apply') }}" class="text-danger fw-semibold">Apply here</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection