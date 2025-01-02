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
    <?php include("nav.php"); ?>

    <div class="container-fluid">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading" style="background-color:rgb(33, 100, 145); color: #385e82; height: 40px;">
                    <h5 class="text-center" style="margin-top: 4px; font-weight: bold; color:aliceblue">Liste des Etudiants</h5>
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
                                        <th style="width: 10%;">ID</th>
                                        <th style="width: 15%;">Nom</th>
                                        <th style="width: 15%;">Prénom</th>
                                        <th style="width: 15%;">Nom Filière</th>
                                        <th style="width: 15%;">Niveau</th>
                                        <th style="width: 10%;">Code Massr</th>
                                        <th style="width: 10%;">Image</th>
                                        <th style="width: 10%;">Sexe</th>
                                        <th class="text-center" style="width: 10%;">Modifier</th>
                                        <th class="text-center" style="width: 10%;">Supprimer</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><img src="" alt="Image" style="width: 50px; height: 50px;"></td>
                                        <td></td>
                                        <td>
                                            <a href="editetudiant.php">
                                                <center>
                                                    <button type="button" class="btn btn-info btn-xs" style="background-color: #afc8a4; color: #385e82">
                                                        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                                    </button>
                                                </center>
                                            </a>
                                        </td>
                                        <td>
                                            <center>
                                                <a href="supprimeretudiant.php">
                                                    <button style="background-color: #afc8a4; color: #385e82" type="button" class="btn btn-info btn-xs">
                                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                                    </button>
                                                </a>
                                            </center>
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
                    <h4 class="modal-title text-center">Ajouter un nouvel étudiant</h4>
               </div>
                <div class="modal-body">
                    <form method="post"  class="form">
                        <div class="form-row">
                        
                            <div class="form-group col-md-4">
                                <label for="nom">Nom :</label>
                                <input type="text" name="nom" class="form-control" placeholder="Nom" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="prenom">Prénom :</label>
                                <input type="text" name="prenom" class="form-control" placeholder="Prénom" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="filiere">Nom Filière :</label>
                                <input type="text" name="filiere" class="form-control" placeholder="Filière" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="niveau">Niveau :</label>
                                <input type="text" name="niveau" class="form-control" placeholder="Niveau" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="code_massr">Code Massr :</label>
                                <input type="text" name="code_massr" class="form-control" placeholder="Code Massr" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="image">Image :</label>
                                <input type="file" name="image" class="form-control" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="sexe">Sexe :</label>
                                <select name="sexe" class="form-control">
                                    <option value="Homme">Homme</option>
                                    <option value="Femme">Femme</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="email">Email :</label>
                                <input type="email" name="email" class="form-control" placeholder="Email@gmail.com" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="ntel">N_téléphone :</label>
                                <input class="form-control" type="text" name="ntel" placeholder="06 xxxx xxxx" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="pwd">Mot de passe :</label>
                                <input type="password" name="pwd" class="form-control" placeholder="Mot de passe" minlength="3" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="pwd1">Confirmer le mot de passe :</label>
                                <input type="password" name="pwd1" class="form-control" placeholder="Mot de passe" minlength="3" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <input type="submit" value="Enregistrer" class="btn btn-success" style="background-color: #afc8a4; color: #385e82">
                                <button type="button" class="btn btn-default" onclick="window.location='etudiant.php'" style="background-color: #afc8a4; color: #385e82">Annuler</button>
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
            function getLanguage() {
                return '//cdn.datatables.net/plug-ins/1.10.7/i18n/French.json';
            }

            $('#employee_data').DataTable({
                language: {
                    url: getLanguage()
                },
                paging: false,
                searching: true
            });

            $('#datetimepicker1, #datetimepicker2, #datetimepicker3').datetimepicker({
                locale: 'fr',
                format: 'DD/MM/YYYY'
            });

          
        });
    </script>
</body>
</html>
