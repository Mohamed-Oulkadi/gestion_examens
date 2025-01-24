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
            
            <div class="col-12 col-md-9 col-xl-10 py-3 px-4">
                <!-- Header -->
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Manage Exams</h1>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addExamModal">
                        <i class="bi bi-plus-circle me-2"></i>Add New Exam
                    </button>
                </div>

                <!-- Exams Table -->
                <div class="card shadow-sm">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle mb-0">
                                <thead class="bg-light">
                                    <tr>
                                        <th class="px-4 py-3">Module</th>
                                        <th class="px-4 py-3">Exam Title</th>
                                        <th class="px-4 py-3">Date</th>
                                        <th class="px-4 py-3">Duration</th>
                                        <th class="px-4 py-3 text-end">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // Sample data - Replace with database query
                                    $exams = [
                                        ['Database Systems', 'Final Exam', '2024-03-20', '2 hours'],
                                        ['Programming Basics', 'Midterm Exam', '2024-03-25', '1.5 hours']
                                    ];

                                    foreach ($exams as $exam) {
                                        echo "<tr>";
                                        echo "<td class='px-4'>{$exam[0]}</td>";
                                        echo "<td class='px-4'>{$exam[1]}</td>";
                                        echo "<td class='px-4'>{$exam[2]}</td>";
                                        echo "<td class='px-4'>{$exam[3]}</td>";
                                        echo "<td class='px-4 text-end'>
                                                <button class='btn btn-sm btn-outline-primary me-2' onclick='editExam(\"{$exam[0]}\", \"{$exam[1]}\", \"{$exam[2]}\", \"{$exam[3]}\")'>
                                                    <i class='bi bi-pencil-square me-1'></i>Edit
                                                </button>
                                                <button class='btn btn-sm btn-outline-danger'>
                                                    <i class='bi bi-trash me-1'></i>Delete
                                                </button>
                                              </td>";
                                        echo "</tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Add Exam Modal -->
                <div class="modal fade" id="addExamModal" tabindex="-1">
                    <div class="modal-dialog">
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
                                        <label class="form-label">Date</label>
                                        <input type="date" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Duration</label>
                                        <input type="text" class="form-control" placeholder="e.g., 2 hours" required>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" form="addExamForm" class="btn btn-primary">Add Exam</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Edit Exam Modal -->
                <div class="modal fade" id="editExamModal" tabindex="-1">
                    <div class="modal-dialog">
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
                                        <label class="form-label">Date</label>
                                        <input type="date" class="form-control" id="editDate" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Duration</label>
                                        <input type="text" class="form-control" id="editDuration" required>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" form="editExamForm" class="btn btn-primary">Save Changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function editExam(module, title, date, duration) {
            document.getElementById('editModule').value = module;
            document.getElementById('editTitle').value = title;
            document.getElementById('editDate').value = date;
            document.getElementById('editDuration').value = duration;
            new bootstrap.Modal(document.getElementById('editExamModal')).show();
        }
    </script>
</body>
</html>