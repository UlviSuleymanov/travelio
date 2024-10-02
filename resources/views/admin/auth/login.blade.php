@extends("layouts.admin.layout")

@section("css")
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
@endsection

@section("content")
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">Login</h2>
                        <form id="loginForm" action="{{route("auth.login.post")}}" method="POST">
                            @csrf
                            @if(session()->has("success"))
                                <div class="alert alert-success">{{session()->get("success")}}</div>
                            @endif
                            <div class="mb-3">
                                <label for="loginEmail" class="form-label">Email address</label>
                                <input type="text" class="form-control" id="loginEmail" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="loginPassword" class="form-label">Password</label>
                                <input type="text" class="form-control" id="loginPassword" name="password" required>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                        <div class="mt-3 text-center">
                            <a href="{{route("auth.signup")}}" class="text-decoration-none">Don't have an account? Sign up</a>
                        </div>
                        <div class="mt-2 text-center">
                            <a href="{{route("auth.forgot-password")}}" id="forgotPassword" class="text-decoration-none">Forgot password?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("js")
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
@endsection
