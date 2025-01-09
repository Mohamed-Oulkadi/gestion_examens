<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modifier Filière</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .modal-content {
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 20px; 
        }

        .modal-header {
            background-color: #216491;
            color: #fff;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            padding: 15px 20px; 
        }

        .form-label {
            font-weight: 600;
            color: #385e82;
        }

        .form-control {
            border-radius: 8px;
            padding: 10px; 
        }

        .btn-success {
            background-color: #529137;
            border: none;
            transition: background-color 0.3s ease;
            padding: 10px 20px; 
        }

        .btn-success:hover {
            background-color: #3e7a2c;
        }

        .btn-default {
            background-color: #ddd;
            color: #333;
            border: none;
            transition: background-color 0.3s ease;
            padding: 10px 20px;
        }

        .btn-default:hover {
            background-color: #bbb;
        }

        .form-group {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <?php include("navbar.php"); ?>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="modal-content p-4">
                    <div class="modal-header">
                        <h4 class="modal-title text-center w-100">
                            Modifier les informations de la filière
                        </h4>
                    </div>

                    <div class="modal-body">
                        <form method="post" action="updatefiliere.php" class="form">
                            <h5 class="text-center mb-4" style="color:#385e82; font-family: 'Staatliches', cursive;">
                                Informations
                            </h5>

                            
                            <div class="form-group">
                                <label for="nom" class="form-label">Nom de la filière</label>
                                <input type="text" name="nom_filiere" id="nom" class="form-control" placeholder="Entrez le nom de la filière" required>
                            </div>

                            
                            <div class="form-group">
                                <label for="description" class="form-label">Description de la filière</label>
                                <textarea name="description" id="description" class="form-control" rows="4" placeholder="Entrez une description" required></textarea>
                            </div>

                            
                            <div class="d-flex justify-content-between mt-4">
                                <button type="submit" class="btn btn-success">Enregistrer</button>
                                <button type="button" class="btn btn-default" onclick="window.location='filiere.php'">Annuler</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
