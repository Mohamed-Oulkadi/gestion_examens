<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page des professeur</title>

    <!-- CSS et JavaScript externes -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>

    <style>
        hr.new1 {
            border: 1px solid #385e82;
            border-radius: 2px;
        }
    </style>
</head>
<body>
    <?php include("navbar.php"); ?>

    <div class="container mt-5">
        <!-- Section d'en-tête -->
        <h1 class="mb-4">Assigner un Module à un Professeur</h1>
        <div align="right">
            <button 
                type="button" 
                class="btn" 
                style="background-color: rgb(49, 165, 194); color: white;" 
                data-toggle="modal" 
                data-target="#add_data_Modal">
                <span class="glyphicon glyphicon-plus"></span> &nbsp;Assigner
            </button>
        </div>

        <!-- Table des assignations -->
        <h2 class="mt-4">Liste des Assignations</h2>
        <div class="panel-body">
            <div class="table-responsive">
                <table id="employee_table" class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Professeur</th>
                            <th>Module</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Exemples de données -->
                        <tr>
                            <td>1</td>
                            <td>Said Sfyani</td>
                            <td>Programmation</td>
                            <td>
                                <button class="btn btn-danger btn-sm">Supprimer</button>
                            </td>
                        </tr>
                        <!-- Les autres lignes seront ajoutées dynamiquement -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal pour l'ajout d'une assignation -->
    <div id="add_data_Modal" class="modal fade" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center">Nouvelle Assignation</h4>
                </div>
                <div class="modal-body">
                    <form action="/admin/assign_professor_module" method="POST">
                        <div class="form-group">
                            <label for="professor" class="form-label">Professeur</label>
                            <select class="form-control" id="professor" name="professor" required>
                                <option value="" disabled selected>Choisir un professeur</option>
                                <!-- Options dynamiques -->
                                <option value="1">Said Sfyani</option>
                                <option value="2">Fatima Amrani</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="module" class="form-label">Module</label>
                            <select class="form-control" id="module" name="module" required>
                                <option value="" disabled selected>Choisir un module</option>
                                <!-- Options dynamiques -->
                                <option value="1">Programmation</option>
                                <option value="2">Base de Données</option>
                            </select>
                        </div>
                        <div class="text-right mt-3">
                            <button type="submit" class="btn btn-primary">Assigner</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('#employee_table').DataTable({
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.10.7/i18n/French.json'
                },
                paging: true,
                searching: true
            });
        });
    </script>
</body>
</html>
