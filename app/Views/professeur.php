<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestion des Professeurs</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>

    <style>
        hr.new1 {
            border: 1px solid #385e82;
            border-radius: 2px;
        }

        .modal-header {
            background-color: rgb(164, 183, 200);
            color: #385e82;
        }

        .btn-custom {
            background-color: #afc8a4;
            color: #385e82;
        }

        .panel-heading {
            background-color: rgb(33, 100, 145);
            color: aliceblue;
            height: 40px;
        }
    </style>
</head>
<body>
    <?php include("nav.php"); ?>

    <div class="container-fluid">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading" style="background-color:rgb(33, 100, 145); color: #385e82; height: 40px;">
                    <h5 class="text-center" style="margin-top: 4px; font-weight: bold; color:aliceblue">Liste des Professeur</h5>
                </div>

                <div class="panel-body">
                    <div style="margin-left: 5%; margin-right: 5%;">
                    <div align="right">
                        <button 
                            type="button" 
                            name="add" 
                            id="add" 
                            class="btn btn-custom" 
                            data-toggle="modal" 
                            data-target="#add_data_Modal">
                            <span class="glyphicon glyphicon-plus"></span>&nbsp;Ajouter
                        </button>
                    </div>
                    <br>
                    <div id="employee_table" class="table-responsive">
                        <table id="employee_data" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th>Nom Filière</th>
                                    <th>Email</th>
                                    <th>Téléphone</th>
                                    <th>Sexe</th>
                                    <th class="text-center">Modifier</th>
                                    <th class="text-center">Supprimer</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Dupont</td>
                                    <td>Jean</td>
                                    <td>Informatique</td>
                                    <td>jean.dupont@example.com</td>
                                    <td>0612345678</td>
                                    <td>Homme</td>
                                    <td class="text-center">
                                        <a href="editprofesseur.php">
                                        <button class="btn btn-custom btn-xs">
                                            <span class="glyphicon glyphicon-edit"></span>
                                        </button>
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <button class="btn btn-custom btn-xs">
                                            <span class="glyphicon glyphicon-trash"></span>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="add_data_Modal" class="modal fade" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center">Ajouter un Professeur</h4>
                </div>
                <div class="modal-body">
                    <form method="post" class="form">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nom">Nom :</label>
                                <input type="text" name="nom" class="form-control" placeholder="Nom" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="prenom">Prénom :</label>
                                <input type="text" name="prenom" class="form-control" placeholder="Prénom" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="filiere">Filière :</label>
                                <input type="text" name="filiere" class="form-control" placeholder="Filière" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email :</label>
                                <input type="email" name="email" class="form-control" placeholder="email@example.com" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="telephone">Téléphone :</label>
                                <input type="text" name="telephone" class="form-control" placeholder="06-xxx-xxx-xx" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="sexe">Sexe :</label>
                                <select name="sexe" class="form-control">
                                    <option value="Homme">Homme</option>
                                    <option value="Femme">Femme</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                        <label for="nom_utilisateur">Nom d'utilisateur :</label>
                        <input type="text" name="nom_utilisateur" class="form-control" placeholder="Nom d'utilisateur" required>
                             </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="pwd1">Confirmer :</label>
                            <input type="password" name="pwd1" class="form-control" placeholder="Confirmer le mot de passe" required>
                       
                            </div>
                            <div class="form-group col-md-6">
                                <label for="pwd">Mot de passe :</label>
                                <input type="password" name="pwd" class="form-control" placeholder="Mot de passe" required>
                            </div>
                        </div>
                       
                        <div class="form-group text-center">
                            <input type="submit" value="Enregistrer" class="btn btn-success btn-custom">
                            <button type="button" class="btn btn-default btn-custom" data-dismiss="modal">Annuler</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
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
