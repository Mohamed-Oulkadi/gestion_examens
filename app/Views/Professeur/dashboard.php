<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professor Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .welcome-section {
            background: linear-gradient(135deg, #2980b9, #2c3e50);
            color: white;
            border-radius: 15px;
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .stats-card {
            background: white;
            border: none;
            border-radius: 15px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }

        .stats-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        }

        .icon-wrapper {
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
            margin-right: 1rem;
        }

        .bg-gradient-primary {
            background: linear-gradient(135deg, #2980b9, #3498db);
        }

        .bg-gradient-success {
            background: linear-gradient(135deg, #27ae60, #2ecc71);
        }

        .bg-gradient-warning {
            background: linear-gradient(135deg, #f39c12, #f1c40f);
        }

        .bg-gradient-danger {
            background: linear-gradient(135deg, #c0392b, #e74c3c);
        }

        .activity-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }

        .activity-card .card-header {
            background: white;
            border-bottom: 1px solid rgba(0,0,0,.05);
        }

        .timeline-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            margin-right: 1rem;
        }

        .progress {
            height: 8px;
            border-radius: 4px;
            background-color: #f1f3f4;
        }

        @media (max-width: 768px) {
            .welcome-section {
                padding: 1.5rem;
                margin-bottom: 1.5rem;
            }

            .stats-card {
                margin-bottom: 1rem;
            }
        }
    </style>
</head>
<body class="bg-light">
    <div class="container-fluid">
        <div class="row">
            <?php include 'navbar.php'; ?>
            
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
                <!-- Welcome Section -->
                <div class="welcome-section">
                    <div class="row align-items-center">
                        <div class="col">
                            <h1 class="h3 mb-1">Welcome Back, Professor!</h1>
                            <p class="mb-0 opacity-75">Today is <?php echo date('l, F j, Y'); ?></p>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-person-circle display-4"></i>
                        </div>
                    </div>
                </div>

                <!-- Stats Grid -->
                <div class="row g-4 mb-4">
                    <!-- Modules Stats -->
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="stats-card">
                            <div class="card-body d-flex align-items-center">
                                <div class="icon-wrapper bg-gradient-primary text-white">
                                    <i class="bi bi-book fs-3"></i>
                                </div>
                                <div>
                                    <h6 class="text-muted mb-1">Total Modules</h6>
                                    <h3 class="mb-0">4</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Students Stats -->
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="stats-card">
                            <div class="card-body d-flex align-items-center">
                                <div class="icon-wrapper bg-gradient-success text-white">
                                    <i class="bi bi-people fs-3"></i>
                                </div>
                                <div>
                                    <h6 class="text-muted mb-1">Total Students</h6>
                                    <h3 class="mb-0">120</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Exams Stats -->
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="stats-card">
                            <div class="card-body d-flex align-items-center">
                                <div class="icon-wrapper bg-gradient-warning text-white">
                                    <i class="bi bi-file-text fs-3"></i>
                                </div>
                                <div>
                                    <h6 class="text-muted mb-1">Upcoming Exams</h6>
                                    <h3 class="mb-0">3</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Claims Stats -->
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="stats-card">
                            <div class="card-body d-flex align-items-center">
                                <div class="icon-wrapper bg-gradient-danger text-white">
                                    <i class="bi bi-exclamation-circle fs-3"></i>
                                </div>
                                <div>
                                    <h6 class="text-muted mb-1">Pending Claims</h6>
                                    <h3 class="mb-0">5</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Activities Section -->
                <div class="row g-4">
                    <!-- Recent Claims -->
                    <div class="col-12 col-xl-6 mb-4">
                        <div class="activity-card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Recent Claims</h5>
                                <a href="reclamations.php" class="btn btn-sm btn-primary">View All</a>
                            </div>
                            <div class="card-body p-0">
                                <div class="list-group list-group-flush">
                                    <div class="list-group-item d-flex align-items-center">
                                        <div class="timeline-dot bg-warning"></div>
                                        <div class="flex-grow-1">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h6 class="mb-0">Grade Review Request</h6>
                                                <small class="text-muted">2h ago</small>
                                            </div>
                                            <small class="text-muted">From John Doe - Database Systems</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Module Performance -->
                    <div class="col-12 col-xl-6 mb-4">
                        <div class="activity-card">
                            <div class="card-header">
                                <h5 class="mb-0">Module Performance</h5>
                            </div>
                            <div class="card-body">
                                <div class="mb-4">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span>Database Systems</span>
                                        <span class="text-primary">85%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" style="width: 85%"></div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span>Programming Basics</span>
                                        <span class="text-success">78%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" style="width: 78%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Upcoming Exams -->
                <div class="row">
                    <div class="col-12">
                        <div class="activity-card">
                            <div class="card-header">
                                <h5 class="mb-0">Upcoming Exams Schedule</h5>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover align-middle mb-0">
                                        <thead class="bg-light">
                                            <tr>
                                                <th class="px-4">Module</th>
                                                <th class="px-4">Date</th>
                                                <th class="px-4">Time</th>
                                                <th class="px-4">Students</th>
                                                <th class="px-4">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="px-4">Database Systems</td>
                                                <td class="px-4">Mar 20, 2024</td>
                                                <td class="px-4">10:00 - 12:00</td>
                                                <td class="px-4">30</td>
                                                <td class="px-4">
                                                    <span class="badge bg-warning">Upcoming</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="px-4">Programming Basics</td>
                                                <td class="px-4">Mar 25, 2024</td>
                                                <td class="px-4">14:00 - 16:00</td>
                                                <td class="px-4">25</td>
                                                <td class="px-4">
                                                    <span class="badge bg-info">Scheduled</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>