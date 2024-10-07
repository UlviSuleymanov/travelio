@extends("layouts.admin.layout")

@section("css")

@endsection

@section("content")
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="form-container p-4">
                    <h2 class="mb-4 text-center">Edit Blog</h2>
                    <form action="{{ route('admin.slider-edit', ['id' => $slider->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST') <!-- Ensure method spoofing for PUT -->
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $slider->title) }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control" name="image" id="image" accept="image/*">
                            @if($slider->image)
                                <div class="mt-2">
                                    <img src="{{ asset('storage/' . $slider->image) }}" alt="Current Image" width="100">
                                    <p>Current Image</p>
                                </div>
                            @endif
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("js")

@endsection
