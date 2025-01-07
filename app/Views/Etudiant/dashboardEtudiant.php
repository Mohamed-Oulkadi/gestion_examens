<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="css/styleh.css">
    <title>Espace Étudiant</title>
</head>
<body>
<?php include("nav.php"); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div>
                <div class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background-image: linear-gradient(rgb(57, 90, 95), #213321); border-color: #213321; height: 50px;"></div>
                        <div class="panel-body">
                            <p style="font-family: 'Verdana'; text-align: center;">
                                Bienvenue sur votre espace <strong>Étudiant</strong> ! Consultez vos résultats et restez informé des dernières mises à jour.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>

<div class="container tableau-notes text-center">
    <h1 class="text-center text-primary">Vos Notes</h1>
    <br><br>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>ID Étudiant</th>
                        <th>ID Cours</th>
                        <th>Matière</th>
                        <th>Note</th>
                        <th>Date de l'examen</th>
                    </tr>
                </thead>
                <tbody>
                   
                    <tr>
                        <td>1</td>
                        <td>101</td>
                        <td>1</td>
                        <td>Mathématiques</td>
                        <td>15.5</td>
                        <td>2024-12-20</td>
                  
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>102</td>
                        <td>2</td>
                        <td>Physique</td>
                        <td>14.0</td>
                        <td>2024-11-15</td>
                    
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>103</td>
                        <td>3</td>
                        <td>Informatique</td>
                        <td>En cours </td>
                        <td>2024-10-10</td>
                       
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Inclusion des scripts pour la fonctionnalité du tableau -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        $('table').DataTable();
    });
</script>
</body>
</html>
