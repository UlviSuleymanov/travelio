@extends('layouts.admin.layout')

@section('content')


    <body class="container-fluid">
    <div class="row gap-0">
        <div class="col-md-8 mt-5 gap-0" style="margin-left: 300px">

            <div class="">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <a href="{{route('admin.marquee-add')}}" class="btn btn-primary">Əlavə et</a>
                        <h2 class="text-center mb-4">Slider</h2>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
{{--                                    <th>Status</th>--}}
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($marquees as $marquee)
                                    <tr>
                                        <td>{{ $marquee->id }}</td>
                                        <td>{{ $marquee->title }}</td>
{{--                                        <td>--}}
{{--                                            <input type="checkbox" value="{{$marquee->status}}"--}}
{{--                                                   class="form-check-input status-checkbox"--}}
{{--                                                   data-id="{{ $marquee->id }}"--}}
{{--                                                {{ $marquee->status == 1 ? 'checked' : '' }}>--}}
{{--                                        </td>--}}
                                        <td>
                                            <a href="{{ route('admin.marquee-edit', ['id' => $marquee->id]) }}"
                                               class="btn btn-sm btn-primary me-1">Update</a>
                                            <form action="{{ route('admin.marquee-delete', ['id' => $marquee->id]) }}"
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
                                        <td colspan="6" class="text-center">No Slider found.</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
@endsection

@section("js")


@endsection
