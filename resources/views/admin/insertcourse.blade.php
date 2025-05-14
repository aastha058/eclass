
@extends('admin.adminlayout')

@section('title')
    Insert Course
@endsection

@section('content')

    <div class="container mt-3">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-3 col-md-3 mb-3">
                @include("admin.sidebar")
            </div>

            <!-- Main Content -->
            <div class="col-9 mb-3">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="text-primary">Insert course</h2>
                    <a href="{{ route('course.index') }}" class="btn btn-outline-primary">
                        <i class="bi bi-list-ul"></i> View All Course
                    </a>
                </div>
                <hr>

                <!-- Form Card -->
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Create a New Course</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('course.store') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <!-- Category Title -->
                           <div class="row">
                             <div class="mb-3 col">
                                <label for="title" class="form-label fw-bold">Course Title</label>
                                <input type="text" id="title" name="title" value="{{ old('title') }}" class="form-control" placeholder="Enter course title">
                                @error('title')
                                    <p class="text-danger small mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3 col">
                                <label for="duration" class="form-label fw-bold">Course duration</label>
                                <input type="text" id="duration" name="duration" value="{{ old('duration') }}" class="form-control" placeholder="Enter course duration">
                                @error('duration')
                                    <p class="text-danger small mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3 col">
                                <label for="auther" class="form-label fw-bold">Course auther</label>
                                <input type="text" id="auther" name="auther" value="{{ old('auther') }}" class="form-control" placeholder="Enter course auther">
                                @error('auther')
                                    <p class="text-danger small mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                           </div>
                           <div class="row">
                             <div class="mb-3 col">
                                <label for="fees" class="form-label fw-bold">Course fees</label>
                                <input type="text" id="fees" name="fees" value="{{ old('fees') }}" class="form-control" placeholder="Enter course fee">
                                @error('fees')
                                    <p class="text-danger small mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                           <div class="row">
                             <div class="mb-3 col">
                                <label for="category_id" class="form-label fw-bold">Course category </label>
                                <select type="text" id="category_id" name="category_id" value="{{ old('category_id') }}" class="form-select" placeholder="Enter course fee">
                                    <option value="">Select category</option>
                                    @foreach ($categories as $category)
                                       <option value="{{ $category->id }}" {{ old('category') == $category->id ? 'selected' : '' }} >
                                       {{ $category->cat_title }}</option>
                                    </select>
                                    @endforeach
                                @error('category_id')
                                    <p class="text-danger small mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3 col">
                                <label for="discount_price" class="form-label fw-bold">Course discount price</label>
                                <input type="text" id="discount_price" name="discount_price" value="{{ old('discount_price') }}" class="form-control" placeholder="Enter Course discount fee">
                                @error('discount_price')
                                    <p class="text-danger small mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                           </div>

                            <!-- Category Description -->
                            <div class="mb-3">
                                <label for="description" class="form-label fw-bold">Course Description</label>
                                <textarea id="description" rows="5" name="description" class="form-control" placeholder="Enter course description">{{ old('description') }}</textarea>
                                @error('description')
                                    <p class="text-danger small mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                             <div class="mb-3">
                                <label for="image" class="form-label fw-bold">Course image</label>
                                <input type="file" id="image" name="image"  class="form-control" >
                                @error('image')
                                    <p class="text-danger small mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Submit Button -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success">
                                    <i class="bi bi-check-circle"></i> Create Course
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection