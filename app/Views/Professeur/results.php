<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results Management - Professor Portal</title>
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
                    <h1 class="h2">Gestion des Notes</h1>
                </div>

                <?php
                // Sample data - Replace with database query
                $modules = [
                    'Database Systems' => [
                        ['ST001', 'John Doe', 15],
                        ['ST002', 'Jane Smith', 8],
                        ['ST003', 'Mike Johnson', null],
                    ],
                    'Programming Basics' => [
                        ['ST001', 'John Doe', 12],
                        ['ST002', 'Jane Smith', 16],
                        ['ST004', 'Sarah Wilson', null],
                    ]
                ];

                foreach ($modules as $moduleName => $students): ?>
                    <!-- Module Section -->
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header bg-primary text-white">
                            <h5 class="card-title mb-0"><?php echo $moduleName; ?></h5>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover align-middle mb-0">
                                    <thead class="bg-light">
                                        <tr>
                                            <th class="px-4">Student ID</th>
                                            <th class="px-4">Name</th>
                                            <th class="px-4">Note /20</th>
                                            <th class="px-4">Status</th>
                                            <th class="px-4 text-end">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($students as $student):
                                            $status = '';
                                            $statusClass = '';
                                            
                                            if ($student[2] === null) {
                                                $status = 'En Attente';
                                                $statusClass = 'warning';
                                            } else if ($student[2] >= 10) {
                                                $status = 'Validé';
                                                $statusClass = 'success';
                                            } else {
                                                $status = 'Non Validé';
                                                $statusClass = 'danger';
                                            }
                                        ?>
                                        <tr>
                                            <td class="px-4"><?php echo $student[0]; ?></td>
                                            <td class="px-4"><?php echo $student[1]; ?></td>
                                            <td class="px-4"><?php echo $student[2] !== null ? $student[2] : '-'; ?></td>
                                            <td class="px-4">
                                                <span class="badge bg-<?php echo $statusClass; ?>"><?php echo $status; ?></span>
                                            </td>
                                            <td class="px-4 text-end">
                                                <button class="btn btn-sm btn-outline-primary" 
                                                        onclick="editScore('<?php echo $student[0]; ?>', '<?php echo $moduleName; ?>', '<?php echo $student[2]; ?>')">
                                                    <i class="bi bi-pencil-square me-1"></i>Edit
                                                </button>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- Edit Score Modal -->
    <div class="modal fade" id="editScoreModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Update Score</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="editScoreForm">
                        <input type="hidden" id="studentId" name="studentId">
                        <input type="hidden" id="moduleName" name="moduleName">
                        <div class="mb-3">
                            <label class="form-label">Score (0-20)</label>
                            <input type="number" class="form-control" name="score" min="0" max="20" step="0.5" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" form="editScoreForm" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function editScore(studentId, moduleName, currentScore) {
            document.getElementById('studentId').value = studentId;
            document.getElementById('moduleName').value = moduleName;
            document.querySelector('input[name="score"]').value = currentScore || '';
            new bootstrap.Modal(document.getElementById('editScoreModal')).show();
        }

        document.getElementById('editScoreForm').addEventListener('submit', function(e) {
            e.preventDefault();
            // Add AJAX call to save score
            console.log('Saving score...');
            console.log('Student ID:', document.getElementById('studentId').value);
            console.log('Module:', document.getElementById('moduleName').value);
            console.log('Score:', document.querySelector('input[name="score"]').value);
        });
    </script>
</body>
</html>