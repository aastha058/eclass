@extends('admin.adminlayout')

@section('content')
<div class="container-fluid mt-4">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3">
            @include("admin.sidebar")
        </div>

        <!-- Main Dashboard -->
        <div class="col-md-9">
            <h4 class="fw-bold mb-3">Welcome, Admin</h4>
            <p class="text-muted">{{ \Carbon\Carbon::now()->format('l, F d, Y') }}</p>

            <div class="row g-4">
                <!-- Total Students -->
                <div class="col-md-4">
                    <div class="card shadow-sm rounded-3 border-0">
                        <div class="card-body d-flex align-items-center">
                            <div class="bg-danger-subtle text-danger rounded-circle p-3 me-3">
                                <i class="bi bi-people-fill fs-3"></i>
                            </div>
                            <div>
                                <h5 class="mb-0 fw-bold">{{ $countstudents }}</h5>
                                <small class="text-muted">Total Students</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Courses -->
                <div class="col-md-4">
                    <div class="card shadow-sm rounded-3 border-0">
                        <div class="card-body d-flex align-items-center">
                            <div class="bg-primary-subtle text-primary rounded-circle p-3 me-3">
                                <i class="bi bi-book-half fs-3"></i>
                            </div>
                            <div>
                                <h5 class="mb-0 fw-bold">{{ $countcourses }}</h5>
                                <small class="text-muted">Total Courses</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Categories -->
                <div class="col-md-4">
                    <div class="card shadow-sm rounded-3 border-0">
                        <div class="card-body d-flex align-items-center">
                            <div class="bg-dark-subtle text-dark rounded-circle p-3 me-3">
                                <i class="bi bi-list-ul fs-3"></i>
                            </div>
                            <div>
                                <h5 class="mb-0 fw-bold">{{ $countcategorys }}</h5>
                                <small class="text-muted">Total Categories</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Admissions -->
                <div class="col-md-4">
                    <div class="card shadow-sm rounded-3 border-0">
                        <div class="card-body d-flex align-items-center">
                            <div class="bg-warning-subtle text-warning rounded-circle p-3 me-3">
                                <i class="bi bi-mortarboard-fill fs-3"></i>
                            </div>
                            <div>
                                <h5 class="mb-0 fw-bold">{{ $countadminssions }}</h5>
                                <small class="text-muted">Total Admissions</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Payments -->
                <div class="col-md-4">
                    <div class="card shadow-sm rounded-3 border-0">
                        <div class="card-body d-flex align-items-center">
                            <div class="bg-success-subtle text-success rounded-circle p-3 me-3">
                                <i class="bi bi-credit-card fs-3"></i>
                            </div>
                            <div>
                                <h5 class="mb-0 fw-bold">20+</h5>
                                <small class="text-muted">Total Payments</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Batches -->
                <div class="col-md-4">
                    <div class="card shadow-sm rounded-3 border-0">
                        <div class="card-body d-flex align-items-center">
                            <div class="bg-info-subtle text-info rounded-circle p-3 me-3">
                                <i class="bi bi-calendar-check-fill fs-3"></i>
                            </div>
                            <div>
                                <h5 class="mb-0 fw-bold">20+</h5>
                                <small class="text-muted">Total Batches</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Activity -->
            <div class="mt-5">
                <h5 class="fw-bold">Recent Activity</h5>
                <div class="card border-0 shadow-sm rounded-3 mt-3">
                    <div class="card-body text-center text-muted">
                        <p class="mb-0">No recent activities to display.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
