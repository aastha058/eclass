
@extends('admin.adminlayout')

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
                    <h2 class="text-primary">Manage Categories ({{ count($categories) }})</h2>
                    <a href="{{ route('categories.create') }}" class="btn btn-success">
                        <i class="bi bi-plus-circle"></i> Add New Category
                    </a>
                </div>
                <hr>

                <!-- Table -->
                <div class="table-responsive">
                    <table class="table table-hover table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Category Title</th>
                                <th>Category Description</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $cat)
                                <tr>
                                    <td>{{ $cat->id }}</td>
                                    <td>{{ $cat->cat_title }}</td>
                                    <td>{{ $cat->cat_description }}</td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group">
                                            <!-- Edit Button -->
                                            <a href="{{ route('categories.edit', $cat) }}" class="btn btn-sm btn-primary">
                                                <i class="bi bi-pencil-square"></i> Edit
                                            </a>
                                            <!-- Delete Button -->
                                            <form action="{{ route('categories.destroy', $cat) }}" method="post" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this category?')">
                                                    <i class="bi bi-trash"></i> Delete
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- No Categories Message -->
                @if ($categories->isEmpty())
                    <div class="alert alert-warning text-center mt-4">
                        <i class="bi bi-exclamation-circle"></i> No categories found. Add a new category to get started!
                    </div>
                @endif
            </div>
        </div>
    </div>

@endsection