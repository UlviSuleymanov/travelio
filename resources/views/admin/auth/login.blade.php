<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Toastr CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
</head>

<body>
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
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        $(document).ready(function() {
            // Configure Toastr
            toastr.options = {
                "closeButton": true,
                "progressBar": true,
                "positionClass": "toast-top-right",
            }

            // Login form submission
            $("#loginForm").submit(function(e) {
                e.preventDefault();
                var email = $("#loginEmail").val();
                var password = $("#loginPassword").val();

                // Here you would typically send an AJAX request to your server
                // For this example, we'll just simulate a successful login
                setTimeout(function() {
                    toastr.success("Login successful!", "Welcome back!");
                    // Clear the form
                    $("#loginForm")[0].reset();
                }, 1000);
            });

            // Forgot password link
            $("#forgotPassword").click(function(e) {
                e.preventDefault();
                var email = $("#loginEmail").val();
                if (email) {
                    // Here you would typically send an AJAX request to your server
                    // For this example, we'll just simulate a password reset email
                    toastr.info("Password reset instructions sent to " + email, "Check your email");
                } else {
                    toastr.warning("Please enter your email address first", "Email required");
                }
            });
        });
    </script>
</body>
</html>
