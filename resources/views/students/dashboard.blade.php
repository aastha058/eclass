@extends('landing.publiclayout')

@section('title')

    Login dashboard

@endsection

@section('content')
    
<div class="container mt-5">
    <!-- Dashboard Header -->
    <div class="text-center mb-5">
        <h2 class="text-primary fw-bold">🎓 Welcome to Your Coaching Lab.</h2>
        <p class="text-muted fs-5">Hello, <span class="text-danger fw-semibold">{{ Auth::user() ->name ??'student'}}</span> 👋</p>
    </div>

    <div class="row g-4">
        <!-- Student Info Card -->
        <div class="col-md-4">
            <div class="card shadow-sm border-0 rounded-4 bg-light h-100">
                <div class="card-body text-center">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQCoxWc5ukrkkaNHBArZt7YJq15_xWWDb4NdQ&s" class="rounded-circle mb-3" alt="Profile Photo">
                    <h5 class="card-title mb-1">{{ Auth::user() ->name ??'student'}}</h5>
                    <p class="text-muted small mb-2">{{ Auth::user() ->email ??'student'}}</p>
                    <span class="badge bg-success">Active</span>
                </div>
            </div>
        </div>

        <!-- Dashboard Options -->
        <div class="col-md-8">
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card shadow-sm border-0 rounded-4 h-100 hover-shadow">
                        <div class="card-body text-center">
                            <i class="bi bi-journal-bookmark-fill text-primary fs-1 mb-3"></i>
                            <h5 class="fw-bold">My Courses</h5>
                            <p class="text-muted">View and access your enrolled courses.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card shadow-sm border-0 rounded-4 h-100">
                        <div class="card-body text-center">
                            <i class="bi bi-graph-up-arrow text-success fs-1 mb-3"></i>
                            <h5 class="fw-bold">Progress</h5>
                            <p class="text-muted">Track your course completion and performance.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card shadow-sm border-0 rounded-4 h-100">
                        <div class="card-body text-center">
                            <i class="bi bi-person-lines-fill text-warning fs-1 mb-3"></i>
                            <h5 class="fw-bold">Profile Settings</h5>
                            <p class="text-muted">Edit your profile and account information.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card shadow-sm border-0 rounded-4 h-100">
                        <div class="card-body text-center">
                            <i class="bi bi-box-arrow-right text-danger fs-1 mb-3"></i>
                            <h5 class="fw-bold">Logout</h5>
                            <p class="text-muted">Safely sign out of your dashboard.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>




@endsection