<div class="list-group shadow-sm rounded-3 overflow-hidden">
    <!-- Dashboard -->
    <a href="{{ route('admin.dashboard') }}" 
        class="list-group-item list-group-item-action fw-bold d-flex align-items-center text-white"
        style="background: linear-gradient(135deg, #28a745, #218838); padding: 12px 16px; border: none;">
        <i class="bi bi-speedometer2 me-2 fs-5"></i>
        <span>Dashboard</span>
    </a>

    <!-- Sidebar Links -->
    <a href="{{ route("course.index") }}" class="list-group-item list-group-item-action d-flex align-items-center">
        <i class="bi bi-award me-2 text-primary fs-5"></i>
        <span>Manage Courses</span>
    </a>

    <a href="{{ route('categories.index') }}" class="list-group-item list-group-item-action d-flex align-items-center">
        <i class="bi bi-border-width me-2 text-primary fs-5"></i>
        <span>Manage Categories</span>
    </a>

    <a href="{{ route('admin.manageadmission') }}" class="list-group-item list-group-item-action d-flex align-items-center">
        <i class="bi bi-database me-2 text-primary fs-5"></i>
        <span>Manage Admission</span>
    </a>

    <a href="{{ route('admin.managestudent') }}" class="list-group-item list-group-item-action d-flex align-items-center">
        <i class="bi bi-people me-2 text-primary fs-5"></i>
        <span>Manage Students</span>
    </a>

    <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
        <i class="bi bi-cash-coin me-2 text-primary fs-5"></i>
        <span>Manage Payments</span>
    </a>

    <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
        <i class="bi bi-bar-chart me-2 text-primary fs-5"></i>
        <span>Manage Batches</span>
    </a>

    <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
        <i class="bi bi-gear me-2 text-primary fs-5"></i>
        <span>Settings</span>
    </a>

    <!-- Logout -->
    <a href="{{ route('public.logout') }}" 
        class="list-group-item list-group-item-action bg-danger text-white fw-bold d-flex align-items-center">
        <i class="bi bi-box-arrow-right me-2 fs-5"></i>
        <span>Logout</span>
    </a>
</div>
