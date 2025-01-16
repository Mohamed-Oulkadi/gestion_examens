<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exams Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <?php include 'navbar.php'; ?>
            
            <div class="col py-3">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Exams Management</h1>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addExamModal">
                        <i class="bi bi-plus-circle me-2"></i>Add Exam
                    </button>
                </div>

                <!-- Exams Table -->
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Exam Name</th>
                                <th>Subject</th>
                                <th>Date</th>
                                <th>Duration</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Sample data - Replace with database query
                            $exams = [
                                ['Final Exam', 'Mathematics', '2024-03-20', '2 hours', 'Upcoming'],
                                ['Midterm', 'Physics', '2024-03-15', '1.5 hours', 'Completed'],
                                ['Quiz 1', 'Chemistry', '2024-03-25', '1 hour', 'Draft']
                            ];

                            foreach ($exams as $exam) {
                                $statusClass = match($exam[4]) {
                                    'Upcoming' => 'warning',
                                    'Completed' => 'success',
                                    'Draft' => 'secondary',
                                    default => 'primary'
                                };
                                
                                echo "<tr>";
                                echo "<td>{$exam[0]}</td>";
                                echo "<td>{$exam[1]}</td>";
                                echo "<td>{$exam[2]}</td>";
                                echo "<td>{$exam[3]}</td>";
                                echo "<td><span class='badge bg-{$statusClass}'>{$exam[4]}</span></td>";
                                echo "<td>
                                        <button class='btn btn-sm btn-primary me-1' onclick='editExam(`{$exam[0]}`, `{$exam[1]}`, `{$exam[2]}`, `{$exam[3]}`)'>
                                            <i class='bi bi-pencil'></i>
                                        </button>
                                        <button class='btn btn-sm btn-danger' onclick='deleteExam(`{$exam[0]}`)'>
                                            <i class='bi bi-trash'></i>
                                        </button>
                                    </td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
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
                                        <label class="form-label">Exam Name</label>
                                        <input type="text" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Subject</label>
                                        <input type="text" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Date</label>
                                        <input type="date" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Duration</label>
                                        <input type="text" class="form-control" placeholder="e.g. 2 hours" required>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" form="addExamForm" class="btn btn-primary">Save Exam</button>
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
                                        <label class="form-label">Exam Name</label>
                                        <input type="text" class="form-control" id="editExamName" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Subject</label>
                                        <input type="text" class="form-control" id="editSubject" required>
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
        function editExam(examName, subject, date, duration) {
            document.getElementById('editExamName').value = examName;
            document.getElementById('editSubject').value = subject;
            document.getElementById('editDate').value = date;
            document.getElementById('editDuration').value = duration;
            
            new bootstrap.Modal(document.getElementById('editExamModal')).show();
        }

        function deleteExam(examName) {
            if(confirm(`Are you sure you want to delete ${examName}?`)) {
                // Add AJAX call for deletion
                console.log(`Deleting exam: ${examName}`);
            }
        }

        document.getElementById('addExamForm').addEventListener('submit', function(e) {
            e.preventDefault();
            // Add AJAX call for creating new exam
        });

        document.getElementById('editExamForm').addEventListener('submit', function(e) {
            e.preventDefault();
            // Add AJAX call for updating exam
        });
    </script>
</body>
</html>