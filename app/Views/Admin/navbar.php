<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
</head>
<body style="font-family: 'Verdana', monospace; box-sizing: border-box; margin: 0; padding: 0;">
<nav class="navbar navbar-inverse" style="background: linear-gradient(to bottom right, rgb(0, 0, 0), rgb(0, 0, 0)); width: 100%;">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="Dashbord.php" style="color: #FFFFFF;">Gestion des Examens</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="/admin/dashboard" style="color: #FFFFFF;">Dashboard</a></li>
                <li><a href="/admin/professeurs" style="color: #FFFFFF;">Professeurs</a></li>
                <li><a href="/admin/modules" style="color: #FFFFFF;">Modules</a></li>
                <li><a href="/admin/filieres" style="color: #FFFFFF;">Filières</a></li>
                <li><a href="/admin/etudiants" style="color: #FFFFFF;">Étudiants</a></li>
                <li><a href="/admin/examens" style="color: #FFFFFF;">Examens</a></li>
                <li><a href="/admin/resultats" style="color: #FFFFFF;">Résultats</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/logout" style="color: #FF4D4D;"><span class="glyphicon glyphicon-log-out"></span> Déconnexion</a></li>
            </ul>
        </div>
    </div>
</nav>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
