<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modifier Étudiant</title>
</head>

<body>
    <?php include("nav.php"); ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color: rgb(33, 100, 145); color: #385e82;">
                        <h4 class="modal-title text-center" style="font-family: 'Varela Round', sans-serif; color:aliceblue;">
                            Modifier les Informations de l'Étudiant
                        </h4>
                    </div>

                    <div class="panel-body">
                        <form method="post" action="">
                            <div class="form-group">
                                <label for="nom">Nom</label>
                                <input type="text" name="nom" class="form-control" value="" required />
                            </div>
                            <div class="form-group">
                                <label for="prenom">Prénom</label>
                                <input type="text" name="prenom" class="form-control" value="" required />
                            </div>
                            <div class="form-group">
                                <label for="filiere">Filière</label>
                                <input type="text" name="filiere" class="form-control" value="" required />
                            </div>
                            <div class="form-group">
                                <label for="niveau">Niveau</label>
                                <input type="text" name="niveau" class="form-control" value="" required />
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" value="" required />
                            </div>
                            <div class="form-group">
                                <label for="ntel">Numéro de téléphone</label>
                                <input type="text" name="ntel" class="form-control" value=">" required />
                            </div>
                            <div class="form-group">
                                <label for="sexe">Sexe</label>
                                <select name="sexe" class="form-control">
                                    <option value="Homme" selected>Homme</option>
                                    <option value="Femme" >>Femme</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success">Enregistrer</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</body>

</html>
