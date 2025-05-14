
@extends('admin.adminlayout')

@section('content')

    <div class="container mt-5">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-12 col-md-3 mb-4">
                @include("admin.sidebar")
            </div>

            <!-- Main Content -->
            <div class="col-9 mb-3">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="text-primary">Manage Students ({{ count($students) }})</h2>
                </div>
                <hr>

                <!-- Students Table -->
                <div class="table-responsive">
                    <table class="table table-hover table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Contact</th>
                                <th>Email</th>
                                <th>Education</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $std)
                                <tr>
                                    <td>{{ $std->id }}</td>
                                    <td>{{ $std->name }}</td>
                                    <td>{{ $std->contact }}</td>
                                    <td>{{ $std->email }}</td>
                                    <td>{{ $std->education }}</td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-success btn-sm">
                                            <i class="bi bi-check-circle"></i> View
                                        </a>
                                        
                                        <a href="#" class="btn btn-danger btn-sm">
                                            <i class="bi bi-x-circle"></i> Inactive
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- No Students Message -->
                @if ($students->isEmpty())
                    <div class="alert alert-warning text-center mt-4">
                        <i class="bi bi-exclamation-circle"></i> No students found.
                    </div>
                @endif
            </div>
        </div>
    </div>

@endsection