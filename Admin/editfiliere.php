<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modifier filiere</title>
</head>

<body>
    <?php include("nav.php"); ?>

    <div class="container-fluid">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color:rgb(33, 100, 145); color: #385e82">
                    <h4 style="font-family: 'Varela Round', sans-serif; color:aliceblue;" class="modal-title text-center">
                        Modifier les informations de la filiere
                    </h4>
                </div>

                <div class="modal-body">
                    <form method="post" action="updatefiliere.php" class="form">
                        <h3 style="color:#385e82; font-family: 'Staatliches', cursive;" class="titre">INFORMATIONS</h3>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="nom">Nom de la filiere:</label>
                                <input type="text" name="nom_filiere" class="form-control" placeholder="Nom de la filiere" required value="" />
                            </div>
                            </div>
                            <div class="form-row">
                            <div class="form-group">
                                <label for="niveau">niveau :</label>
                                <input type="text" name="niveau" class="form-control" placeholder="Niveau" required value="" />
                            </div>
                          

                        

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <input type="submit" value="Enregistrer" class="btn btn-success" style="background-color:rgb(82, 145, 55); color:rgb(227, 232, 236)" />
                                <button type="button" class="btn btn-default" onclick="window.location='filiere.php'" style="background-color:rgb(82, 145, 55); color:rgb(227, 232, 236)">Annuler</button>
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
