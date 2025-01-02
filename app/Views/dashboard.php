<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="css/styleh.css">
   
</head>
<body>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Varela+Round&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Staatliches&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Mukta:wght@200&display=swap');
   @import url('https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@200&display=swap'); 
 .navbar{
     background: linear-gradient(to bottom right, #263314, #0d324d);
    border-radius: 0;
  }
  body{
font-family: 'Mukta', sans-serif;
  }
  
  .thead{
font-family: 'Mukta', sans-serif;
  } 

  .tr  {
font-family: 'Mukta', sans-serif;
  }


  .panel-heading{

 
  }

  .panel-heading{
       background-color: #afc8a4;
     color: #385e82 ; 
     height: 40px;

  }
  .stat-panel {
    border: solid;
    border-color: #98d9b6;
    background-color: #F3FBF6;
    padding: 20px;
    margin: 10px;
    border-radius: 10px;
    text-align: center;
}

.stat-panel span {
    font-size: 40px;
    color: #98d9b6;
}

.stat-panel a {
    text-decoration: none;
    color: #98d9b6;
    font-size: large;
}

.stat-panel a:hover {
    color: #76b49e;
}
b {
  animation: color-change 1s infinite;
}

@keyframes color-change {
  0% { color: rgb(70, 110, 196); }
  100% { color: rgb(52, 72, 136); }
}
</style>

<?php include('nav.php'); ?>
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
    <h1 class="text-center text-primary">Les différentes statistiques de l'année <b><?php echo date('Y'); ?></b></h1>
    <br><br>
    <div class="row">
        <div class="col-md-4">
            <div class="stat-panel">
                <span class="glyphicon glyphicon-education"></span>
                <div>Nombre d'étudiants</div>
                <a href="etudiants.php">100</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="stat-panel">
                <span class="glyphicon glyphicon-user"></span>
                <div>Nombre d'utilisateurs</div>
                <a href="utilisateurs.php">50</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="stat-panel">
                <span class="glyphicon glyphicon-refresh"></span>
                <div>Demandes de recorrections</div>
                <a href="recorrections.php">20</a>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
