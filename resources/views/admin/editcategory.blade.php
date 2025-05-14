@extends('admin.adminlayout')

@section('title')
Edit {{ $category->cat_title }} Categories

@endsection

@section('content')

    <div class="container mt-5">
        <div class="row">
           
            <div class="col-3 col-md-3 mb-4">
               @include("admin.sidebar")
            </div>

            
            <div class="col-9 mb-3">
                <div class="d-flex justify-content-between align-items-center mb-4">
                        <h2>Edit {{ $category->cat_title }}'s Category</h2>
                        <a href="{{ route('categories.index') }}" class="btn btn-success" ><i class="bi bi-send-fill"></i> View all Categories</a>
                </div>
                <hr>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('categories.update', $category) }}" method="POST" >
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label for="">Category title</label>
                                <input type="text" name="cat_title" value="{{ $category->cat_title }}" class="form-control">
                                @error('cat_title')
                                <p class="text-danger small">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Category Description</label>
                                <textarea rows="5" name="cat_description" class="form-control">{{ $category->cat_description }}</textarea>
                                @error('cat_description')
                                <p class="text-danger small">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="submit" class="btn btn-success w-100"  value="edit Category">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection