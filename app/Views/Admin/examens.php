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
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>