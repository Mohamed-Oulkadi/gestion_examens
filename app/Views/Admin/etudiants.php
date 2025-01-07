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

    <style>
        hr.new1 {
            border: 1px solid #385e82;
            border-radius: 2px;
        }
    </style>
</head>
<?php include("navbar.php"); ?>

<div class="container-fluid">
    <div class="col-md-12">
    </div>
    <h2 class="mt-4">Assigner un étudiant a un filiére</h2>
    <div class="panel-body">
        <div style="margin-left: 5%; margin-right: 5%;">
            <div align="right">
                <button
                    type="button"
                    name="add"
                    id="add"
                    class="btn"
                    style="background-color:rgb(38, 125, 151); color:rgb(252, 252, 252)"
                    data-toggle="modal"
                    data-target="#add_data_Modal">
                    <span class="glyphicon glyphicon-plus"></span>&nbsp;Assigner
                </button>
            </div>

            <br>
            <div id="employee_table" class="table-responsive">
                <h2 class="mt-4">Assignations existantes</h2>
                <table class="table table-striped">


                    <thead>
                        <tr>
                            <th style="width: 10%;">ID</th>
                            <th style="width: 15%;">Nom et Prénom</th>
                            <th style="width: 15%;">email</th>
                            <th style="width: 15%;">username</th>
                            <th style="width: 15%;">Nom Filière</th>
                            <th></th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($etudiants)): ?>
                            <?php foreach ($etudiants as $index => $etudiant): ?>
                                <tr>
                                    <td><?= $index + 1; ?></td>
                                    <td><?= esc($etudiant['nom'] . " " . $etudiant['prenom']); ?></td>
                                    <td><?= esc($etudiant['email']); ?></td>
                                    <td><?= esc($etudiant['username']); ?></td>
                                    <td><?= esc($etudiant['filiere_nom']); ?></td>
                                    <td>
                                        <a href="editfiliere.php" class="btn btn-warning btn-sm">Modifier</a>

                                        <button class="btn btn-danger btn-sm">Supprimer</button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="6" class="text-center">Aucun étudiant trouvé</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>


            </div>
        </div>


        </body>

</html>
</div>


</div>
</div>
</div>
</div>
</div>




<div id="add_data_Modal" class="modal fade" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color:rgb(164, 183, 200); color: #385e82">
                <h4 class="modal-title text-center">Ajouter un nouvel étudiant</h4>
            </div>
            <div class="modal-body">
                <h2 class="mt-5">Les etudiants non assigner</h2><br><br>
                <form action="assigner" method="POST">
                    <div class="form-row">

                        <div class="form-group ">
                            <label for="etudiant" class="form-label">Etudiant</label>
                            <select class="form-control" id="etudiant" name="etudiant">
                                <option selected disabled >Choisir un etudiant</option>
                                <?php foreach ($etudiant_non_fil as $index => $etudiant): ?>
                                <option value="<?= esc($etudiant['id']); ?>"><?= esc($etudiant['prenom'] . " " . $etudiant['nom']); ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">

                        <div class="form-group ">
                            <label for="filiere" class="form-label">Filiere</label>
                            <select class="form-control" id="filiere" name="filiere">
                                <option selected disabled >Choisir un Filiere</option>
                                <!-- Loop for dynamic module list -->
                                <?php foreach ($filieres as $index => $filiere): ?>
                                <option value="<?= esc($filiere['id']); ?>"><?= esc($filiere['name']); ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="mt-3">
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Assigner</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>

                    </div>
                </form>
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