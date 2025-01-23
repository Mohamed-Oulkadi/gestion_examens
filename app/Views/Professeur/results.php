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
                    <h1 class="h2">Module Results</h1>
                </div>

                <!-- Filters -->
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-12 col-md-4">
                                <label class="form-label">Module</label>
                                <select class="form-select" id="moduleFilter">
                                    <option value="">All Modules</option>
                                    <option>Database Systems</option>
                                    <option>Programming Basics</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-4">
                                <label class="form-label">Status</label>
                                <select class="form-select" id="statusFilter">
                                    <option value="">All Status</option>
                                    <option>Validé</option>
                                    <option>Non Validé</option>
                                    <option>En Attente</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Results Table -->
                <div class="card">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="bg-light">
                                    <tr>
                                        <th>Student ID</th>
                                        <th>Name</th>
                                        <th>Module</th>
                                        <th>Score/20</th>
                                        <th>Status</th>
                                        <th class="text-end">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $results = [
                                        ['ST001', 'John Doe', 'Database Systems', 15, true],
                                        ['ST002', 'Jane Smith', 'Programming Basics', 8, false],
                                        ['ST003', 'Mike Johnson', 'Database Systems', null, null],
                                    ];

                                    foreach ($results as $result) {
                                        $status = '';
                                        $statusClass = '';
                                        
                                        if ($result[3] === null) {
                                            $status = 'En Attente';
                                            $statusClass = 'warning';
                                        } else if ($result[3] >= 10) {
                                            $status = 'Validé';
                                            $statusClass = 'success';
                                        } else {
                                            $status = 'Non Validé';
                                            $statusClass = 'danger';
                                        }

                                        echo "<tr>
                                            <td>{$result[0]}</td>
                                            <td>{$result[1]}</td>
                                            <td>{$result[2]}</td>
                                            <td>" . ($result[3] !== null ? $result[3] : '-') . "</td>
                                            <td><span class=\"badge bg-{$statusClass}\">{$status}</span></td>
                                            <td class=\"text-end\">
                                                <button class=\"btn btn-sm btn-primary\" onclick=\"editScore('{$result[0]}', '{$result[3]}')\">
                                                    <i class=\"bi bi-pencil\"></i>
                                                </button>
                                            </td>
                                        </tr>";
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
        function editScore(studentId, currentScore) {
            document.getElementById('studentId').value = studentId;
            document.querySelector('input[name="score"]').value = currentScore;
            new bootstrap.Modal(document.getElementById('editScoreModal')).show();
        }
    </script>
</body>
</html>