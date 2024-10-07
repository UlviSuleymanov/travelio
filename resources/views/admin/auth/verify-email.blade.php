@extends("layouts.admin.layout")

@section("css")
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
@endsection

@section("content")
    <div>
        <h1>Email Verification</h1>
        <p>Please check your email for a verification link. If you didn't receive an email, <a href="{{ route('verification.send') }}">click here to request another</a>.</p>
    </div>
@endsection

@section("js")
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
@endsection
