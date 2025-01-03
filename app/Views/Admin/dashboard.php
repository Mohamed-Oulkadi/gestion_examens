<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Admin Dashboard</title>
</head>
<body>
    <!-- Include Navbar -->
    <?php include('navbar.php'); ?>

    <!-- Dashboard Content -->
    <div class="container mt-5">
        <h1 class="mb-4">Dashboard Admin</h1>

        <div class="row">
            <!-- Card: Total Professeurs -->
            <div class="col-md-4">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Professeurs</h5>
                        <p class="card-text">Total : <strong>12</strong></p>
                        <a href="/admin/professeurs" class="btn btn-light btn-sm">Voir plus</a>
                    </div>
                </div>
            </div>

            <!-- Card: Total Modules -->
            <div class="col-md-4">
                <div class="card text-white bg-success mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Modules</h5>
                        <p class="card-text">Total : <strong>8</strong></p>
                        <a href="/admin/modules" class="btn btn-light btn-sm">Voir plus</a>
                    </div>
                </div>
            </div>

            <!-- Card: Total Filières -->
            <div class="col-md-4">
                <div class="card text-white bg-info mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Filières</h5>
                        <p class="card-text">Total : <strong>4</strong></p>
                        <a href="/admin/filieres" class="btn btn-light btn-sm">Voir plus</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Card: Total Étudiants -->
            <div class="col-md-4">
                <div class="card text-white bg-secondary mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Étudiants</h5>
                        <p class="card-text">Total : <strong>50</strong></p>
                        <a href="/admin/etudiants" class="btn btn-light btn-sm">Voir plus</a>
                    </div>
                </div>
            </div>

            <!-- Card: Total Examens -->
            <div class="col-md-4">
                <div class="card text-white bg-warning mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Examens</h5>
                        <p class="card-text">Total : <strong>15</strong></p>
                        <a href="/admin/examens" class="btn btn-light btn-sm">Voir plus</a>
                    </div>
                </div>
            </div>

            <!-- Card: Total Résultats -->
            <div class="col-md-4">
                <div class="card text-white bg-danger mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Résultats</h5>
                        <p class="card-text">Total : <strong>45</strong></p>
                        <a href="/admin/resultats" class="btn btn-light btn-sm">Voir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
