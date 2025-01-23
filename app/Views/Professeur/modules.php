<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Modules - Professor Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container-fluid">
        <div class="row">
            <?php include 'navbar.php'; ?>
            
            <!-- Main Content -->
            <div class="col-12 col-md-9 col-xl-10 py-3 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">My Modules</h1>
                </div>

                <!-- Modules Grid -->
                <div class="row g-4">
                    <?php
                    // Sample data - Replace with database query
                    $modules = [
                        [
                            'id' => 1,
                            'name' => 'Database Systems',
                            'students' => 35,
                            'upcoming_exam' => 'Mid-term Exam',
                            'exam_date' => '2024-03-20',
                            'last_result' => 85
                        ],
                        [
                            'id' => 2,
                            'name' => 'Programming Basics',
                            'students' => 42,
                            'upcoming_exam' => 'Final Exam',
                            'exam_date' => '2024-03-25',
                            'last_result' => 78
                        ]
                    ];

                    foreach ($modules as $module) {
                        echo <<<HTML
                        <div class="col-12 col-md-6 col-xl-4">
                            <div class="card h-100 module-card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">{$module['name']}</h4>
                                    
                                    <div class="d-flex justify-content-between mb-3">
                                        <div>
                                            <i class="bi bi-people text-primary me-2"></i>
                                            <span>{$module['students']} Students</span>
                                        </div>
                                        <a href="students.php?module={$module['id']}" class="text-decoration-none">
                                            View List <i class="bi bi-arrow-right"></i>
                                        </a>
                                    </div>

                                    <div class="mb-3">
                                        <h6 class="text-muted mb-2">Upcoming Exam</h6>
                                        <p class="mb-1">{$module['upcoming_exam']}</p>
                                        <small class="text-muted">{$module['exam_date']}</small>
                                    </div>

                                    <div class="mb-3">
                                        <h6 class="text-muted mb-2">Last Result Average</h6>
                                        <div class="d-flex align-items-center">
                                            <div class="progress flex-grow-1 me-2" style="height: 6px;">
                                                <div class="progress-bar" style="width: {$module['last_result']}%"></div>
                                            </div>
                                            <span class="text-primary">{$module['last_result']}%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-transparent">
                                    <div class="d-flex justify-content-between">
                                        <a href="exams.php?module={$module['id']}" class="btn btn-outline-primary">
                                            <i class="bi bi-file-text me-1"></i> Exams
                                        </a>
                                        <a href="results.php?module={$module['id']}" class="btn btn-outline-success">
                                            <i class="bi bi-graph-up me-1"></i> Results
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        HTML;
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <style>
        .module-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0,0,0,0.05);
            transition: transform 0.3s ease;
        }
        
        .module-card:hover {
            transform: translateY(-5px);
        }
        
        .progress {
            background-color: #e9ecef;
            border-radius: 10px;
        }
        
        .progress-bar {
            background-color: #0d6efd;
            border-radius: 10px;
        }

        @media (max-width: 768px) {
            .module-card {
                margin-bottom: 1rem;
            }
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>