<?include('navbar.php');?>
<!DOCTYPE html>
<html lang="en">
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des resultats</title>

    <!-- CSS et JavaScript externes -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>

    <style>
        hr.new1 {
            border: 1px solid #385e82;
            border-radius: 2px;
        }
    </style>
</head
<body>
    <!-- Include Navbar -->
    <?php include('navbar.php'); ?>

    <div class="container mt-5">
        <h1 class="mb-4">Liste des Résultats</h1>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nom de l'examen</th>
                    <th>Étudiant</th>
                    <th>Filière</th>
                    <th>Module</th>
                    <th>Professeur</th>
                    <th>Note</th>
                </tr>
            </thead>
            <tbody>
                <!-- Loop for dynamic result data -->
                <tr>
                    <td>1</td>
                    <td>Examen Programmation</td>
                    <td>Mohammed Jibali</td>
                    <td>Informatique</td>
                    <td>Programmation</td>
                    <td>Said Sfyani</td>
                    <td>14.5</td>
                </tr>
                <!-- Add more rows dynamically -->
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
