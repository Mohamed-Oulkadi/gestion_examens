<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page des professeurs</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/styleh.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>

    <style>
        hr.new1 {
            border: 1px solid #385e82;
            border-radius: 2px;
        }
        .stat-panel {
            margin: 15px 0;
            text-align: center;
        }
        .stat-panel span {
            font-size: 48px;
            color: #337ab7;
        }
        .stat-panel div {
            font-size: 18px;
            margin-top: 10px;
        }
        .stat-panel a {
            font-size: 20px;
            color: #5cb85c;
            text-decoration: none;
        }
        .stat-panel a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <?php include('navbar.php'); ?>
    <br><br>
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
                                    Bienvenue sur votre espace <strong>Admin</strong> de l'application de gestion des examens ! 
                                    Ici, vous trouverez toutes les informations importantes pour une gestion efficace.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>

    <div class="container tableau-stat text-center">
        <h1 class="text-center text-primary">
            Les différentes statistiques de l'année <b><?php echo date('Y'); ?></b>
        </h1>
        <br><br>
        <div class="row">
            <div class="col-md-4">
                <div class="stat-panel">
                    <span class="glyphicon glyphicon-education"></span>
                    <div>Nombre d'étudiants</div>
                    <a href="etudiants.php">2</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-panel">
                    <span class="glyphicon glyphicon-user"></span>
                    <div>Nombre de filieres</div>
                    <a href="utilisateurs.php">7</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-panel">
                    <span class="glyphicon glyphicon-refresh"></span>
                    <div>Nombre de module</div>
                    <a href="recorrections.php">8</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
