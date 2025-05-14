<div class="hero-section bg-light position-relative overflow-hidden py-6">
    <div class="container px-4 px-lg-5">
        <div class="row align-items-center">
            <!-- Text Content -->
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h1 class="display-4 fw-bold text-dark">
                    Discover the <span class="text-success">path</span> to your <span
                        class="text-success">dreams</span><br> with our <span
                        class="text-success">{{ env("APP_NAME") }}.</span>
                </h1>
                <p class="lead text-secondary my-4">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text since the 1500s.
                </p>

                <!-- Select & Button Row -->
                <div class="d-flex flex-wrap gap-3">
                    <select class="form-select w-auto rounded-pill px-4 py-2">
                        <option>Categories</option>
                        <option>Science</option>
                        <option>Math</option>
                    </select>
                    <select class="form-select w-auto rounded-pill px-4 py-2">
                        <option>Courses</option>
                        <option>Physics</option>
                        <option>Algebra</option>
                    </select>
                    <a href="{{ route('public.apply') }}" class="btn btn-success rounded-pill px-4 py-2 fw-bold shadow-sm">
                        Book Now
                    </a>
                </div>

                <!-- Stats Row -->
                <div class="d-flex flex-wrap gap-4 mt-5">
                    <div class="bg-white rounded-4 p-4 shadow-sm text-center">
                        <div class="fs-4 fw-bold">15K</div>
                        <div class="small text-muted">Student learning</div>
                    </div>
                    <div class="bg-white rounded-4 p-4 shadow-sm text-center">
                        <div class="fs-4 fw-bold">152+</div>
                        <div class="small text-muted">Expert instructor</div>
                    </div>
                    <div class="bg-white rounded-4 p-4 shadow-sm text-center">
                        <div class="fs-4 fw-bold">300+</div>
                        <div class="small text-muted">Course enrolment</div>
                    </div>
                </div>
            </div>

            <!-- Image Section -->
            <div class="col-lg-6 text-center position-relative">
                <img src="https://template-kit.evonicmedia.com/layout69/wp-content/uploads/2023/06/Component-9-1-1-1.png"
                    class="img-fluid rounded-circle shadow-lg" style="max-width: 80%; z-index: 1;">

                <!-- Enrolled Info Card -->
                <div class="position-absolute bottom-0 start-50 translate-middle-x bg-white rounded-4 shadow p-3 d-flex align-items-center gap-3"
                    style="z-index: 2; transform: translate(-50%, 50%);">
                    <div class="d-flex">
                        <img src="https://randomuser.me/api/portraits/women/32.jpg" class="rounded-circle"
                            style="width: 40px; height: 40px;">
                        <img src="https://randomuser.me/api/portraits/men/44.jpg" class="rounded-circle ms-n2"
                            style="width: 40px; height: 40px;">
                        <img src="https://randomuser.me/api/portraits/women/68.jpg" class="rounded-circle ms-n2"
                            style="width: 40px; height: 40px;">
                    </div>
                    <div>
                        <div class="fw-bold small">45k+ Students enrolled</div>
                        <div class="text-warning small">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <span class="text-dark ms-1">4.6</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Optional CSS -->
<style>
    .hero-section {
        background-color: #fffbe6;
    }

    .form-select:focus,
    .btn:focus {
        box-shadow: none;
    }
</style>

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">