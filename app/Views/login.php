<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Exam Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(120deg, #2980b9, #2c3e50);
            height: 100vh;
        }
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }
        .card-header {
            background: linear-gradient(to right, #2980b9, #2c3e50);
            border-radius: 15px 15px 0 0 !important;
        }
        .form-control {
            border-radius: 10px;
            padding: 12px;
        }
        .btn-login {
            padding: 12px;
            border-radius: 10px;
            background: linear-gradient(to right, #2980b9, #2c3e50);
            border: none;
            transition: all 0.3s ease;
        }
        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-md-6 col-lg-4">
                <div class="text-center mb-4">
                    <i class="bi bi-mortarboard-fill text-white display-1"></i>
                    <h2 class="text-white mt-3">Exam Management</h2>
                </div>
                <div class="card">
                    <div class="card-header py-4">
                        <h4 class="text-white text-center mb-0">Welcome Back!</h4>
                    </div>
                    <div class="card-body p-4">
                        <form id="loginForm" class="needs-validation" novalidate>
                            <div class="mb-4">
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-0">
                                        <i class="bi bi-person"></i>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Username or Email" required>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-0">
                                        <i class="bi bi-lock"></i>
                                    </span>
                                    <input type="password" class="form-control" placeholder="Password" required>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mb-4">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="rememberMe">
                                    <label class="form-check-label" for="rememberMe">Remember me</label>
                                </div>
                                <a href="#" class="text-primary text-decoration-none">Forgot password?</a>
                            </div>
                            <button type="submit" class="btn btn-primary btn-login w-100 mb-3">
                                Login
                            </button>
                            <div class="text-center">
                                <span class="text-muted">Don't have an account?</span>
                                <a href="register.html" class="text-primary text-decoration-none">Register</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>