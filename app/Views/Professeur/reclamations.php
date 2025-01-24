<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Réclamations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container-fluid">
        <div class="row">
        <?php include './navbar.php'; ?>

            
            <div class="col-12 col-md-9 col-xl-10 py-3 px-4">
                <!-- Header -->
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Gestion des Réclamations</h1>
                </div>

                <!-- Claims Table -->
                <div class="card shadow-sm">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle mb-0">
                                <thead class="bg-light">
                                    <tr>
                                        <th class="px-4 py-3">Date</th>
                                        <th class="px-4 py-3">Étudiant</th>
                                        <th class="px-4 py-3">Module</th>
                                        <th class="px-4 py-3">Description</th>
                                        <th class="px-4 py-3">État</th>
                                        <th class="px-4 py-3 text-end">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // Sample data - Replace with database query
                                    $claims = [
                                        ['2024-03-10', 'John Doe', 'Mathematics', 'Question about grade calculation', 'en cours'],
                                        ['2024-03-09', 'Jane Smith', 'Physics', 'Review request for final exam', 'accepté'],
                                        ['2024-03-08', 'Mike Johnson', 'Chemistry', 'Grade dispute', 'rejetée']
                                    ];

                                    foreach ($claims as $claim) {
                                        // Status badge color
                                        $statusClass = match($claim[4]) {
                                            'en cours' => 'bg-warning',
                                            'accepté' => 'bg-success',
                                            'rejetée' => 'bg-danger',
                                            default => 'bg-secondary'
                                        };

                                        echo "<tr>";
                                        echo "<td class='px-4'>{$claim[0]}</td>";
                                        echo "<td class='px-4'>{$claim[1]}</td>";
                                        echo "<td class='px-4'>{$claim[2]}</td>";
                                        echo "<td class='px-4'>{$claim[3]}</td>";
                                        echo "<td class='px-4'><span class='badge {$statusClass}'>{$claim[4]}</span></td>";
                                        echo "<td class='px-4 text-end'>";
                                        if ($claim[4] === 'en cours') {
                                            echo "<div class='btn-group'>
                                                    <button type='button' class='btn btn-sm btn-success me-1' onclick='updateStatus(\"accept\")'>
                                                        <i class='bi bi-check-circle me-1'></i>Accepter
                                                    </button>
                                                    <button type='button' class='btn btn-sm btn-danger' onclick='updateStatus(\"reject\")'>
                                                        <i class='bi bi-x-circle me-1'></i>Rejeter
                                                    </button>
                                                </div>";
                                        }
                                        echo "</td>";
                                        echo "</tr>";
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function updateStatus(action) {
            // Add AJAX call to update status
            console.log('Updating status:', action);
        }
    </script>
</body>
</html>