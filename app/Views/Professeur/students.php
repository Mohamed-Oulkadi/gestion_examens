<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students by Module - Professor Portal</title>
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
                    <h1 class="h2">My Modules & Students</h1>
                </div>

                <!-- Modules Accordion -->
                <div class="accordion" id="modulesAccordion">
                    <?php
                    // Sample data - Replace with database query
                    $modules = [
                        'Database Systems' => [
                            'total' => 35,
                            'students' => [
                                ['ST001', 'John Doe'],
                                ['ST002', 'Jane Smith']
                            ]
                        ],
                        'Programming Basics' => [
                            'total' => 42,
                            'students' => [
                                ['ST003', 'Mike Johnson'],
                                ['ST004', 'Sarah Wilson']
                            ]
                        ]
                    ];

                    foreach ($modules as $moduleName => $moduleData) {
                        echo <<<HTML
                        <div class="accordion-item mb-3 border rounded">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#module-{$moduleName}">
                                    <div class="d-flex align-items-center w-100">
                                        <i class="bi bi-book me-2"></i>
                                        <strong>{$moduleName}</strong>
                                        <span class="badge bg-primary ms-3">{$moduleData['total']} Students</span>
                                    </div>
                                </button>
                            </h2>
                            <div id="module-{$moduleName}" class="accordion-collapse collapse show">
                                <div class="accordion-body p-0">
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead class="bg-light">
                                                <tr>
                                                    <th>Student ID</th>
                                                    <th>Name</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                        HTML;

                        foreach ($moduleData['students'] as $student) {
                            echo <<<HTML
                                <tr>
                                    <td>{$student[0]}</td>
                                    <td>{$student[1]}</td>
                                </tr>
                            HTML;
                        }

                        echo <<<HTML
                                            </tbody>
                                        </table>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>