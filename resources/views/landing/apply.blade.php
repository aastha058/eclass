@extends('landing.publiclayout')

@section('title')

    Apply for Admission

@endsection

@section('content')

    <div class="container mt-5">
        <div class="row align-items-center">

            <!-- Why Choose Coaching-lab Section -->
            <div class="col-md-7 mb-4">
                <h2 class="text-success fw-bold mb-4">Why Choose <span class="text-danger">Coaching-lab?</span></h2>
                <ul class="list-unstyled fs-5 text-secondary">
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Best online coaching
                        experience</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Affordable and flexible plans
                    </li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Expert faculty and live
                        sessions</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Learn at your own pace,
                        anytime</li>
                </ul>
                
            @session('msg')
                            <div class="alert alert-success" role="alert">
                                <h4 class="alert-heading">Well done!</h4>
                                <p>{{ session("msg") }}</p>
                                <hr>
                            </div>
                        @endsession
            </div>
           
            <!-- Admission Form Section -->
            <div class="col-md-5">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-header bg-danger text-white text-center rounded-top-4 py-3">
                        <h4 class="mb-1">Apply for Admission</h4>
                        <small class="fs-6">(100% Free)</small>
                    </div>
                    <div class="card-body bg-light rounded-bottom-4">
                        <form action="" method="post">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Full Name</label>
                                <input type="text" name="name" value="{{ old('name') }}"
                                    class="form-control rounded-pill shadow-sm">
                                @error('name') <p class="text-danger small">{{ $message }}</p> @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Email Address</label>
                                <input type="email" name="email" value="{{ old('email') }}"
                                    class="form-control rounded-pill shadow-sm">
                                @error('email') <p class="text-danger small">{{ $message }}</p> @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Contact Number</label>
                                <input type="text" name="contact" value="{{ old('contact') }}"
                                    class="form-control rounded-pill shadow-sm">
                                @error('contact') <p class="text-danger small">{{ $message }}</p> @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Education</label>
                                <input type="text" name="education" value="{{ old('education') }}"
                                    class="form-control rounded-pill shadow-sm">
                                @error('education') <p class="text-danger small">{{ $message }}</p> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold">Password</label>
                                <input type="password" name="password" class="form-control rounded-pill shadow-sm">
                                @error('password') <p class="text-danger small">{{ $message }}</p> @enderror
                            </div>

                            <div class="mb-3">
                                <input type="submit" class="btn btn-success w-100 fw-bold rounded-pill py-2"
                                    value="🚀 Apply Now">
                            </div>
                        </form>

                      
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection