<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestion des utilisateurs</title>

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
<body>
    <?php include("nav.php"); ?>

    <div class="container-fluid">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading" style="background-color:rgb(33, 100, 145); color: #385e82; height: 40px;">
                    <h5 class="text-center" style="margin-top: 4px; font-weight: bold; color:aliceblue">Liste des Utilisateurs</h5>
                </div>

                <div class="panel-body">
                    <div style="margin-left: 5%; margin-right: 5%;">
                    <div align="right">
    <button 
        type="button" 
        name="add" 
        id="add" 
        class="btn" 
        style="background-color: #afc8a4; color: #385e82" 
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
                                        <th style="width: 20%;">Login</th>
                                        <th style="width: 20%;">Email</th>
                                        <th style="width: 20%;">N_Téléphone</th>
                                        <th style="width: 20%;">Role</th>
                                        <th style="width: 20%;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="success">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="editutilisateur.php">
                                                <span class="glyphicon glyphicon-edit"></span>
                                            </a>
                                            &nbsp;&nbsp;
                                            <a onclick="return confirm('Etes-vous sûr de vouloir supprimer cet utilisateur?')" href="supprimerutilisateur.php">
                                                <span class="glyphicon glyphicon-trash"></span>
                                            </a>
                                            &nbsp;&nbsp;
                                            <a href="activerutilisateur.php">
                                                <span class="glyphicon glyphicon-ok"></span>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div>
                            <ul class="pagination">
                                
                                    <li class="active">
                                        <a href="utilisateur.php?page=<?php echo "1"; ?>">
                                            <?php echo "1"; ?>
                                        </a>
                                    </li>
                              
                            </ul>
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
                    <h4 class="modal-title text-center">Ajouter un nouvel utilisateur</h4>
                </div>
                <div class="modal-body">
                    <form method="post" class="form">
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="Societe">Login :</label>
                                <input type="text" name="login" class="form-control" placeholder="Login">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="produit">Email :</label>
                                <input type="email" name="email" class="form-control" placeholder="Email@gmail.com">
                            </div>

                            <div class="form-group col-md-3">
                                <label for="Ntel">N_téléphone :</label>
                                <input class="form-control" type="text" name="Ntel" placeholder="06 xxxx xxxx">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="pwd">Mot de passe :</label>
                                <input type="password" name="pwd" class="form-control" placeholder="Mot de passe" minlength="3">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="pwd1">Confirmer le mot de passe :</label>
                                <input type="password" name="pwd1" class="form-control" placeholder="Mot de passe" minlength="3">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="role">Role :</label>
                                <select name="role" class="form-control">
                                    <option value="ADMIN">Administrateur</option>
                                    <option value="ETUDIANT">Etudiant</option>
                                    <option value="PROFESSEUR">Professeur</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="etat">Etat :</label>
                                <select name="etat" class="form-control">
                                    <option value="1">Activer</option>
                                    <option value="0">Désactiver</option>
                                </select>
                            </div>
                            <div class="form-row">
                            <div class="form-group col-md-12">
                                <input type="submit" value="Enregistrer" class="btn btn-success" style="background-color: #afc8a4; color: #385e82">
                                <button type="button" class="btn btn-default" onclick="window.location='utilisateur.php'" style="background-color: #afc8a4; color: #385e82">Annuler</button>
                            </div>
                        </div>
                        </div>

                        <hr class="new1">

                        
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
