
@extends('admin.adminlayout')
@section('title')
    Manage Course

@endsection

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
                    <h2 class="text-primary">Manage Course ({{ count($courses) }})</h2>
                     <a href="{{ route('course.create') }}" class="btn btn-success">
                        <i class="bi bi-plus-circle"></i> Add New Course
                    </a>
                </div>
                <hr>

                <!-- Students Table -->
                <div class="table-responsive">
                    <table class="table table-hover table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>TITLE</th>
                                <th>AUTHER</th>
                                <th>DURATION</th>
                                <th>CATEGORY</th>
                                <th>FEE</th>
                                <th>IMAGE</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($courses as $course)
                                <tr>
                                    <td>{{ $course->id }}</td>
                                    <td>{{ $course->title }}</td>
                                    <td>{{ $course->auther }}</td>
                                    <td>{{ $course->duration == 1 ? '1 week' : $course->duration . 'weeks' }}</td>
                                    <td>{{ $course->category->cat_title }}</td>
                                    <td>{{ $course->discount_price }}<del>{{ $course->fees }}</del></td>
                                    <td><img src="{{ asset('storage/'. $course->image ) }}" width="80px" class="course_image" alt=""></td>
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
                @if ($courses->isEmpty())
                    <div class="alert alert-warning text-center mt-4">
                        <i class="bi bi-exclamation-circle"></i> No students found.
                    </div>
                @endif
            </div>
        </div>
    </div>

@endsection