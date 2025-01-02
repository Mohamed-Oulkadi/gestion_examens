<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modifier utilisateur</title>
</head>

<body>
    <?php include("nav.php"); ?>

    <div class="container-fluid">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color:rgb(33, 100, 145); color: #385e82">
                    <h4 style="font-family: 'Varela Round', sans-serif; color:aliceblue;" class="modal-title text-center">
                        Modifier les informations utilisateur
                    </h4>
                </div>

                <div class="modal-body">
                    <form method="post" action="updateutil.php" class="form">
                        <h3 style="color:#385e82; font-family: 'Staatliches', cursive;" class="titre">INFORMATIONS</h3>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="nom">Nom :</label>
                                <input type="text" name="nom" class="form-control" placeholder="Nom" required value="" />
                            </div>
                            <div class="form-group col-md-4">
                                <label for="prenom">Prénom :</label>
                                <input type="text" name="prenom" class="form-control" placeholder="Prénom" required value="" />
                            </div>
                            <div class="form-group col-md-4">
                                <label for="filiere">Nom Filière :</label>
                                <input type="text" name="filiere" class="form-control" placeholder="Filière" required value="" />
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="niveau">Niveau :</label>
                                <input type="text" name="niveau" class="form-control" placeholder="Niveau" required value="" />
                            </div>
                            <div class="form-group col-md-3">
                                <label for="code_massr">Code Massr :</label>
                                <input type="text" name="code_massr" class="form-control" placeholder="Code Massr" required value="" />
                            </div>
                            <div class="form-group col-md-3">
                                <label for="image">Image :</label>
                                <input type="file" name="image" class="form-control" />
                            </div>
                            <div class="form-group col-md-3">
                                <label for="sexe">Sexe :</label>
                                <select name="sexe" class="form-control">
                                    <option value="Homme" selected>Homme</option>
                                    <option value="Femme">Femme</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="email">Email :</label>
                                <input type="email" name="email" class="form-control" placeholder="Email@gmail.com" required value="" />
                            </div>
                            <div class="form-group col-md-6">
                                <label for="ntel">N_téléphone :</label>
                                <input class="form-control" type="text" name="ntel" placeholder="06 xxxx xxxx" required value="" />
                            </div>
                        </div>

                        

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <input type="submit" value="Enregistrer" class="btn btn-success" style="background-color:rgb(82, 145, 55); color:rgb(227, 232, 236)" />
                                <button type="button" class="btn btn-default" onclick="window.location='etudiant.php'" style="background-color:rgb(82, 145, 55); color:rgb(227, 232, 236)">Annuler</button>
                            </div>
                        </div>

                        <hr class="new1">
                        <br>
                        `
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
