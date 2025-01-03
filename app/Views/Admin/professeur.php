<?php include('navbar.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Assigner Professeurs aux Modules</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Assigner Professeurs aux Modules</h1>

        <!-- Table for existing assignments -->
        <h2 class="mt-4">Assignations existantes</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Professeur</th>
                    <th>Module</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Loop for existing assignments -->
                <tr>
                    <td>1</td>
                    <td>Said Sfyani</td>
                    <td>Programmation</td>
                    <td>
                        <button class="btn btn-danger btn-sm">Supprimer</button>
                    </td>
                </tr>
                <!-- Add more rows dynamically -->
            </tbody>
        </table>

        <!-- Form to assign a professor to a module -->
        <h2 class="mt-5">Nouvelle Assignation</h2>
        <form action="/admin/assign_professor_module" method="POST">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="professor" class="form-label">Professeur</label>
                    <select class="form-select" id="professor" name="professor">
                        <option selected disabled>Choisir un professeur</option>
                        <!-- Loop for dynamic professor list -->
                        <option value="1">Said Sfyani</option>
                        <option value="2">Fatima Amrani</option>
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="module" class="form-label">Module</label>
                    <select class="form-select" id="module" name="module">
                        <option selected disabled>Choisir un module</option>
                        <!-- Loop for dynamic module list -->
                        <option value="1">Programmation</option>
                        <option value="2">Base de Données</option>
                    </select>
                </div>
            </div>

            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Assigner</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
