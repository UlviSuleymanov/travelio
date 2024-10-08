@extends('layouts.admin.layout')

@section('content')

    <div class="row gap-0">
        <div class="col-md-8 mt-5 gap-0" style="margin-left: 300px">
            <div class="">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <h2 class="text-center mb-4">Blog Management</h2>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Slug</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($blogs as $blog)
                                    <tr>
                                        <td>{{ $blog->id }}</td>
                                        <td>{{ $blog->title }}</td>
                                        <td>{{ \Illuminate\Support\Str::limit($blog->description, 100) }}</td>
                                        <td>{{ $blog->slug }}</td>
                                        <td>
                                            <input type="checkbox" value="{{$blog->status}}"
                                                   class="form-check-input status-checkbox"
                                                   data-id="{{ $blog->id }}" {{-- Store blog ID for easy access --}}
                                                {{ $blog->status == 1 ? 'checked' : '' }}>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.blogs-edit', ['id' => $blog->id]) }}"
                                               class="btn btn-sm btn-primary me-1">Update</a>
                                            <form action="{{ route('admin.blogs-delete', ['id' => $blog->id]) }}"
                                                  method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Are you sure you want to delete this blog?');">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">No blogs found.</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section("js")


@endsection
