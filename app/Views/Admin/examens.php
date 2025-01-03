<?php include('navbar.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Liste des Examens</title>
</head>
<body>
    <!-- Include Navbar -->
    <?php include('navbar.php'); ?>

    <div class="container mt-5">
        <h1 class="mb-4">Liste des Examens</h1>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nom de l'examen</th>
                    <th>Module</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <!-- Loop for dynamic exam data -->
                <tr>
                    <td>1</td>
                    <td>Examen Programmation</td>
                    <td>Programmation</td>
                    <td>2024-01-15</td>
                </tr>
                <!-- Add more rows dynamically -->
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>