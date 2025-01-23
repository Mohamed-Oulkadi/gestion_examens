<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professor Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container-fluid">
        <div class="row">
            <?php include 'navbar.php'; ?>
            
            <!-- Main Content -->
            <div class="col-12 col-md-9 col-xl-10 py-3 px-4">
                <!-- Welcome Section -->
                <div class="p-4 mb-4 rounded-3 welcome-section">
                    <h2>Welcome Back, Professor!</h2>
                    <p class="mb-0">Here's your teaching overview for today</p>
                </div>

                <!-- Stats Cards -->
                <div class="row g-4 mb-4">
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="card stat-card h-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-3">
                                        <i class="bi bi-book text-primary fs-1"></i>
                                    </div>
                                    <div>
                                        <h6 class="card-title mb-0">Total Modules</h6>
                                        <h2 class="mt-2 mb-0">4</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="card stat-card h-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-3">
                                        <i class="bi bi-people text-success fs-1"></i>
                                    </div>
                                    <div>
                                        <h6 class="card-title mb-0">Total Students</h6>
                                        <h2 class="mt-2 mb-0">120</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="card stat-card h-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-3">
                                        <i class="bi bi-file-text text-warning fs-1"></i>
                                    </div>
                                    <div>
                                        <h6 class="card-title mb-0">Upcoming Exams</h6>
                                        <h2 class="mt-2 mb-0">3</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="card stat-card h-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-3">
                                        <i class="bi bi-graph-up text-info fs-1"></i>
                                    </div>
                                    <div>
                                        <h6 class="card-title mb-0">Average Score</h6>
                                        <h2 class="mt-2 mb-0">78%</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="row">
                    <!-- Upcoming Exams -->
                    <div class="col-12 col-lg-6 mb-4">
                        <div class="card h-100">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Upcoming Exams</h5>
                            </div>
                            <div class="card-body">
                                <div class="list-group list-group-flush">
                                    <div class="list-group-item">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h6 class="mb-1">Database Systems Mid-term</h6>
                                            <small class="text-muted">Tomorrow</small>
                                        </div>
                                        <p class="mb-1">10:00 AM - 12:00 PM</p>
                                    </div>
                                    <div class="list-group-item">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h6 class="mb-1">Programming Final</h6>
                                            <small class="text-muted">Next Week</small>
                                        </div>
                                        <p class="mb-1">2:00 PM - 4:00 PM</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Results -->
                    <div class="col-12 col-lg-6 mb-4">
                        <div class="card h-100">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Recent Results</h5>
                            </div>
                            <div class="card-body">
                                <div class="list-group list-group-flush">
                                    <div class="list-group-item">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h6 class="mb-1">Algorithms Quiz</h6>
                                            <span class="badge bg-success">85%</span>
                                        </div>
                                        <p class="mb-1">Class Average</p>
                                    </div>
                                    <div class="list-group-item">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h6 class="mb-1">Data Structures Test</h6>
                                            <span class="badge bg-primary">78%</span>
                                        </div>
                                        <p class="mb-1">Class Average</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .welcome-section {
            background: linear-gradient(to right, #2980b9, #2c3e50);
            color: white;
        }
        
        .stat-card {
            border: none;
            border-radius: 15px;
            transition: transform 0.3s ease;
        }
        
        .stat-card:hover {
            transform: translateY(-5px);
        }

        @media (max-width: 768px) {
            .welcome-section {
                padding: 1.5rem !important;
            }
            .stat-card {
                margin-bottom: 1rem;
            }
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>