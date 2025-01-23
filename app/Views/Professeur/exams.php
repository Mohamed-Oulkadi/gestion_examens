
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exams Management - Professor Portal</title>
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
                    <h1 class="h2">Manage Exams</h1>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addExamModal">
                        <i class="bi bi-plus-circle me-2"></i>Add New Exam
                    </button>
                </div>

                <!-- Module Filter -->
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-12 col-md-4">
                                <label class="form-label">Filter by Module</label>
                                <select class="form-select" id="moduleFilter">
                                    <option value="">All Modules</option>
                                    <option>Database Systems</option>
                                    <option>Programming Basics</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Exams Table -->
                <div class="card">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="bg-light">
                                    <tr>
                                        <th>Module</th>
                                        <th>Exam Title</th>
                                        <th>Date</th>
                                        <th>Duration</th>
                                        <th>Status</th>
                                        <th class="text-end">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $exams = [
                                        ['Database Systems', 'Midterm Exam', '2024-03-20 10:00', '2', 'Upcoming'],
                                        ['Programming Basics', 'Final Exam', '2024-03-25 14:00', '3', 'Draft']
                                    ];

                                    foreach ($exams as $exam) {
                                        $statusClass = ($exam[4] == 'Upcoming') ? 'warning' : 'secondary';
                                        echo <<<HTML
                                        <tr>
                                            <td>{$exam[0]}</td>
                                            <td>{$exam[1]}</td>
                                            <td>{$exam[2]}</td>
                                            <td>{$exam[3]} hours</td>
                                            <td><span class="badge bg-{$statusClass}">{$exam[4]}</span></td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-primary me-1" onclick="editExam({
                                                    module: '{$exam[0]}',
                                                    title: '{$exam[1]}',
                                                    datetime: '{$exam[2]}',
                                                    duration: '{$exam[3]}'
                                                })">
                                                    <i class="bi bi-pencil"></i>
                                                </button>
                                                <button class="btn btn-sm btn-danger">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        HTML;
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Exam Modal -->
    <div class="modal fade" id="addExamModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Exam</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="addExamForm">
                        <div class="mb-3">
                            <label class="form-label">Module</label>
                            <select class="form-select" required>
                                <option value="">Select Module</option>
                                <option>Database Systems</option>
                                <option>Programming Basics</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Exam Title</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Date & Time</label>
                            <input type="datetime-local" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Duration (hours)</label>
                            <input type="number" class="form-control" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" form="addExamForm" class="btn btn-primary">Create Exam</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Exam Modal -->
    <div class="modal fade" id="editExamModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Exam</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="editExamForm">
                        <div class="mb-3">
                            <label class="form-label">Module</label>
                            <select class="form-select" id="editModule" required>
                                <option value="">Select Module</option>
                                <option>Database Systems</option>
                                <option>Programming Basics</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Exam Title</label>
                            <input type="text" class="form-control" id="editTitle" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Date & Time</label>
                            <input type="datetime-local" class="form-control" id="editDateTime" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Duration (hours)</label>
                            <input type="number" class="form-control" id="editDuration" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" form="editExamForm" class="btn btn-primary">Update Exam</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function editExam(exam) {
            document.getElementById('editModule').value = exam.module;
            document.getElementById('editTitle').value = exam.title;
            document.getElementById('editDateTime').value = exam.datetime;
            document.getElementById('editDuration').value = exam.duration;
            
            new bootstrap.Modal(document.getElementById('editExamModal')).show();
        }

        // Form submit handlers
        document.getElementById('addExamForm').addEventListener('submit', function(e) {
            e.preventDefault();
            // Add AJAX call here to save new exam
        });

        document.getElementById('editExamForm').addEventListener('submit', function(e) {
            e.preventDefault();
            // Add AJAX call here to update exam
        });
    </script>
</body>
</html>