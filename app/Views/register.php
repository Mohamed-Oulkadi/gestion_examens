<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Exam Management System</title>
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
        .btn-register {
            padding: 12px;
            border-radius: 10px;
            background: linear-gradient(to right, #2980b9, #2c3e50);
            border: none;
            transition: all 0.3s ease;
        }
        .btn-register:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-md-6">
                <div class="text-center mb-4">
                    <i class="bi bi-mortarboard-fill text-white display-1"></i>
                    <h2 class="text-white mt-3">Join Exam Management</h2>
                </div>
                <div class="card">
                    <div class="card-header py-4">
                        <h4 class="text-white text-center mb-0">Create Account</h4>
                    </div>
                    <div class="card-body p-4">
                        <form id="registrationForm" class="needs-validation" novalidate>
                            <div class="mb-3">
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-0">
                                        <i class="bi bi-person"></i>
                                    </span>
                                    <input type="text" class="form-control" id="username" placeholder="Username" required>
                                </div>
                                <div class="invalid-feedback">Please choose a username.</div>
                            </div>
                            <div class="mb-3">
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-0">
                                        <i class="bi bi-envelope"></i>
                                    </span>
                                    <input type="email" class="form-control" id="email" placeholder="Email address" required>
                                </div>
                                <div class="invalid-feedback">Please enter a valid email.</div>
                            </div>
                            <div class="mb-3">
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-0">
                                        <i class="bi bi-lock"></i>
                                    </span>
                                    <input type="password" class="form-control" id="password" placeholder="Password" required>
                                </div>
                                <div class="invalid-feedback">Please enter a password.</div>
                            </div>
                            <div class="mb-4">
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-0">
                                        <i class="bi bi-shield-lock"></i>
                                    </span>
                                    <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password" required>
                                </div>
                                <div class="invalid-feedback">Passwords do not match.</div>
                            </div>
                            <div class="mb-4">
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-0">
                                        <i class="bi bi-person-badge"></i>
                                    </span>
                                    <select class="form-select" id="role" required>
                                        <option value="">Select Role</option>
                                        <option value="student">Student</option>
                                        <option value="teacher">Teacher</option>
                                    </select>
                                </div>
                                <div class="invalid-feedback">Please select a role.</div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-register w-100 mb-3">
                                Register
                            </button>
                            <div class="text-center">
                                <span class="text-muted">Already have an account?</span>
                                <a href="login.html" class="text-primary text-decoration-none">Login</a>
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