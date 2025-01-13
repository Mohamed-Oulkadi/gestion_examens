<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Exam Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <style>
    .sidebar {
        background: linear-gradient(180deg, #2c3e50 0%, #3498db 100%);
    }
    
    .stat-card {
        border: none;
        border-radius: 15px;
        transition: transform 0.3s ease;
        margin-bottom: 1rem;
    }
    
    .stat-card:hover {
        transform: translateY(-5px);
    }
    
    .welcome-section {
        background: linear-gradient(to right, #2980b9, #2c3e50);
        color: white;
        padding: 2rem;
        border-radius: 15px;
        margin-bottom: 2rem;
    }

    /* Responsive Styles */
    @media (max-width: 576px) {
        .welcome-section {
            padding: 1.5rem;
            margin-bottom: 1.5rem;
        }
        
        .welcome-section h2 {
            font-size: 1.5rem;
        }
        
        .stat-card {
            margin-bottom: 0.75rem;
        }
    }

    @media (max-width: 768px) {
        .stat-card {
            margin-bottom: 1rem;
        }
        
        .welcome-section {
            padding: 1.75rem;
        }
    }

    @media (max-width: 992px) {
        .sidebar {
            position: static;
            width: 100%;
        }
    }

    @media (min-width: 993px) {
        .stat-card {
            height: 100%;
        }
    }
</style>
</head>
<body class="bg-light">
    <div class="container-fluid">
        <div class="row flex-nowrap">
        <?php include 'navbar.php'; ?>
            <!-- Main Content -->
            <div class="col py-3">
                <!-- Welcome Section -->
                <div class="welcome-section">
                    <h2>Welcome Back, Admin!</h2>
                    <p class="mb-0">Here's what's happening with your exam system today.</p>
                </div>

                           <!-- Statistics Cards -->
            <div class="row g-4 mb-4">
                <!-- Students Card -->
                <div class="col-md-4">
                    <div class="card stat-card bg-primary text-white h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h6 class="card-title">Students</h6>
                                    <h2 class="mb-0">1,285</h2>
                                </div>
                                <div class="fs-1">
                                    <i class="bi bi-people"></i>
                                </div>
                            </div>
                            <div class="mt-3">
                                <span class="text-white-50">Total Students</span>
                            </div>
                        </div>
                    </div>
                </div>
            
                <!-- Teachers Card -->
                <div class="col-md-4">
                    <div class="card stat-card bg-success text-white h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h6 class="card-title">Teachers</h6>
                                    <h2 class="mb-0">42</h2>
                                </div>
                                <div class="fs-1">
                                    <i class="bi bi-person-badge"></i>
                                </div>
                            </div>
                            <div class="mt-3">
                                <span class="text-white-50">Total Teachers</span>
                            </div>
                        </div>
                    </div>
                </div>
            
                <!-- Exams Card -->
                <div class="col-md-4">
                    <div class="card stat-card bg-info text-white h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h6 class="card-title">Exams</h6>
                                    <h2 class="mb-0">156</h2>
                                </div>
                                <div class="fs-1">
                                    <i class="bi bi-file-text"></i>
                                </div>
                            </div>
                            <div class="mt-3">
                                <span class="text-white-50">Active Exams</span>
                            </div>
                        </div>
                    </div>
                </div>
            
                <!-- Results Card -->
                <div class="col-md-4">
                    <div class="card stat-card bg-warning text-white h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h6 class="card-title">Results</h6>
                                    <h2 class="mb-0">892</h2>
                                </div>
                                <div class="fs-1">
                                    <i class="bi bi-card-checklist"></i>
                                </div>
                            </div>
                            <div class="mt-3">
                                <span class="text-white-50">Published Results</span>
                            </div>
                        </div>
                    </div>
                </div>
            
                <!-- Modules Card -->
                <div class="col-md-4">
                    <div class="card stat-card bg-danger text-white h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h6 class="card-title">Modules</h6>
                                    <h2 class="mb-0">24</h2>
                                </div>
                                <div class="fs-1">
                                    <i class="bi bi-book"></i>
                                </div>
                            </div>
                            <div class="mt-3">
                                <span class="text-white-50">Total Modules</span>
                            </div>
                        </div>
                    </div>
                </div>
            
                <!-- Departments Card -->
                <div class="col-md-4">
                    <div class="card stat-card bg-secondary text-white h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h6 class="card-title">Departments</h6>
                                    <h2 class="mb-0">8</h2>
                                </div>
                                <div class="fs-1">
                                    <i class="bi bi-diagram-3"></i>
                                </div>
                            </div>
                            <div class="mt-3">
                                <span class="text-white-50">Total Departments</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                    
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>