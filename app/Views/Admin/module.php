<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestion des etudiants</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/locale/fr.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">

</head>

<body>
    <?php include("navbar.php"); ?>

    <div class="container mt-5">
        <h1 class="mb-4">La liste des Modules :</h1>

        <!-- Table for existing assignments -->
        <h2 class="mt-4">Ajouter un Module</h2>
        <div align="right">
            <button
                type="button"
                name="add"
                id="add"
                class="btn"
                style="background-color:rgb(49, 165, 194); color:rgb(248, 248, 248)"
                data-toggle="modal"
                data-target="#add_data_Modal">
                <span class="glyphicon glyphicon-plus"></span>&nbsp;Ajouter
            </button>
        </div>
        <div class="panel-body">
            <div style="margin-left: 5%; margin-right: 5%;">


                <br>
                <div id="employee_table" class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom</th>
                                <th>Description</th>
                                <th>filieres</th>
                                <th>Prof</th>
                                <th></th>

                            </tr>
                        </thead>
                        <tbody>
                        <?php if (!empty($modules)): ?>
                    <?php foreach ($modules as $index => $module): ?>
                        <tr>
                            <td><?= $index + 1; ?></td>
                            <td><?= esc($module['module_name']); ?></td>
                            <td><?= esc($module['description']); ?></td>
                            <td><?= esc($module['filiere_name']); ?></td>
                            <td><?= esc($module['professeur_prenom']) . ' ' . esc($module['professeur_nom']); ?></td>
                            <td>
                                    <button class="btn btn-warning btn-sm">Modifier</button>
                                    <button class="btn btn-danger btn-sm">Supprimer</button>
                                </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5" class="text-center">Aucun module trouvé</td>
                    </tr>
                <?php endif; ?>
                           
                        </tbody>
                    </table>



                </div>
            </div>

        </div>
        <<div id="add_data_Modal" class="modal fade" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- En-tête de la modal -->
                    <div class="modal-header" style="background-color:rgb(164, 183, 200); color: #385e82;">
                        <h4 class="modal-title text-center">Ajouter un nouveau module</h4>
                    </div>

                    <!-- Contenu de la modal avec padding -->
                    <div class="modal-body p-10">
                        <form action="insert_module" method="POST">
                            <!-- Nom du module -->
                            <div class="form-group">
                                <label for="name" class="form-label">Nom</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="name"
                                    name="name"
                                    placeholder="Nom du module"
                                    required>
                            </div>

                            <!-- Description du module -->
                            <div class="form-group mt-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea
                                    class="form-control"
                                    id="description"
                                    name="description"
                                    placeholder="Description du module"
                                    rows="3"
                                    required></textarea>
                            </div>

                            <!-- Filières -->
                            <div class="form-group mt-3">
                                <label for="filieres" class="form-label">Filières</label>
                                <select
                                    class="form-control"
                                    id="filieres"
                                    name="filieres[]"
                                    multiple
                                    required>
                                    <!-- Boucle pour la liste dynamique des filières -->
                                    <option selected disabled >Choisir un Filiere</option>
                                <!-- Loop for dynamic module list -->
                                <?php foreach ($filieres as $index => $filiere): ?>
                                <option value="<?= esc($filiere['id']); ?>"><?= esc($filiere['name']); ?></option>
                                <?php endforeach; ?>
                                </select>
                                <small class="text-muted mt-2 d-block">
                                    Maintenez la touche Ctrl (Windows) ou Command (Mac) pour sélectionner plusieurs filières.
                                </small>
                            </div>

                            <!-- Prof -->
                            <div class="form-group mt-3">
                            <label for="professeur" class="form-label">professeur</label>
                                <select
                                    class="form-control"
                                    id="professeur"
                                    name="professeur"
                                    
                                    required>
                                    <!-- Boucle pour la liste dynamique des filières -->
                                    <option selected disabled >Choisir un professeur</option>
                                <?php foreach ($professeurs as $index => $professeur): ?>
                                <option value="<?= esc($professeur['id']); ?>"><?= esc($professeur['prenom'] . " " . $professeur['nom']); ?></option>
                                <?php endforeach; ?>
                                </select>
                                
                            </div>

                            <!-- Bouton de soumission -->
                            <div class="text-right mt-4">
                                <button type="submit" class="btn btn-primary">Ajouter</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>



    <script>
        $(document).ready(function() {
            $('#employee_data').DataTable({
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