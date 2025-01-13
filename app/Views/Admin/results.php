<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results Management - Exam System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <?php include 'navbar.php'; ?>
            
            <div class="col py-3">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Exam Results</h1>
                </div>

                <!-- Results Table -->
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Student ID</th>
                                <th>Student Name</th>
                                <th>Exam</th>
                                <th>Score</th>
                                <th>Grade</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Sample data - Replace with database query
                            $results = [
                                ['ST001', 'John Doe', 'Mathematics', 85, 'A', '2024-03-15'],
                                ['ST002', 'Jane Smith', 'Physics', 78, 'B', '2024-03-14'],
                                ['ST003', 'Mike Johnson', 'Chemistry', 92, 'A', '2024-03-13'],
                            ];

                            foreach ($results as $result) {
                                echo "<tr>";
                                echo "<td>{$result[0]}</td>";
                                echo "<td>{$result[1]}</td>";
                                echo "<td>{$result[2]}</td>";
                                echo "<td>{$result[3]}</td>";
                                echo "<td><span class='badge bg-" . ($result[4] == 'A' ? 'success' : 'primary') . "'>{$result[4]}</span></td>";
                                echo "<td>{$result[5]}</td>";
                                echo "</tr>";
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