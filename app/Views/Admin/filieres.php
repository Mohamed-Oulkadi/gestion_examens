<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pages des filières</title>

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
        <h1 class="mb-4">La liste des filières</h1>

        <!-- Table for existing assignments -->
        <h2 class="mt-4">Ajouter un Filière</h2>
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
                    <table id="employee_data" class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 20%;">ID Filière</th>
                                <th style="width: 20%;">Nom Filière</th>
                                <th style="width: 20%;">Descrption de la filiere</th>
                              <th style="width: 15%;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($filieres)): ?>
                                <?php foreach ($filieres as $index => $filiere): ?>
                                    <tr>
                                        <td><?= $index + 1; ?></td>
                                        <td><?= esc($filiere['name']); ?></td>
                                        <td><?= esc($filiere['description']); ?></td>

                                        <td>
                                            <a href="editfiliere.php" class="btn btn-warning btn-sm">Modifier</a>

                                            <button class="btn btn-danger btn-sm">Supprimer</button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="4" class="text-center">Aucune filière trouvée</td>
                                </tr>
                            <?php endif; ?>

                        </tbody>
                    </table>



                </div>
            </div>

        </div>
        <div id="add_data_Modal" class="modal fade" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:rgb(164, 183, 200); color: #385e82">
                        <h4 class="modal-title text-center">Ajouter une nouvellle filière</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="ajouter_filiere" class="form">
                            <div class="form-row">

                                <div class="form-group ">
                                    <label for="nom">Nom de Filiere :</label>
                                    <input type="text" name="nom_filiere" class="form-control" placeholder="Nom de la filiere" required>
                                </div>
                                <div class="form-group ">
                                    <label for="niveau">Descrition de la filiere d'etude :</label>
                                    <input type="text" name="description" class="form-control" placeholder="Description" required>
                                </div>

                            </div>



                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <input type="submit" value="Enregistrer" class="btn btn-success" style="background-color: #afc8a4; color: #385e82">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                            <hr class="new1">


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