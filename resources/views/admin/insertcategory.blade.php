
@extends('admin.adminlayout')

@section('title')
    Insert Categories
@endsection

@section('content')

    <div class="container mt-5">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-3 col-md-3 mb-4">
                @include("admin.sidebar")
            </div>

            <!-- Main Content -->
            <div class="col-9 mb-3">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="text-primary">Insert Category</h2>
                    <a href="{{ route('categories.index') }}" class="btn btn-outline-primary">
                        <i class="bi bi-list-ul"></i> View All Categories
                    </a>
                </div>
                <hr>

                <!-- Form Card -->
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Create a New Category</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('categories.store') }}" method="POST">
                            @csrf
                            <!-- Category Title -->
                            <div class="mb-4">
                                <label for="cat_title" class="form-label fw-bold">Category Title</label>
                                <input type="text" id="cat_title" name="cat_title" value="{{ old('cat_title') }}" class="form-control" placeholder="Enter category title">
                                @error('cat_title')
                                    <p class="text-danger small mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Category Description -->
                            <div class="mb-4">
                                <label for="cat_description" class="form-label fw-bold">Category Description</label>
                                <textarea id="cat_description" rows="5" name="cat_description" class="form-control" placeholder="Enter category description">{{ old('cat_description') }}</textarea>
                                @error('cat_description')
                                    <p class="text-danger small mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Submit Button -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success">
                                    <i class="bi bi-check-circle"></i> Create Category
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection