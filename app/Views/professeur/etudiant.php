<?php include 'partials/header.php'; ?>

<h1>Liste des Étudiants</h1>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <!-- Exemple de données statiques -->
        <tr>
            <td>1</td>
            <td>Dupont</td>
            <td>Jean</td>
            <td>jean.dupont@example.com</td>
            <td>
                <button class="btn btn-primary btn-sm">Voir détails</button>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>Durand</td>
            <td>Marie</td>
            <td>marie.durand@example.com</td>
            <td>
                <button class="btn btn-primary btn-sm">Voir détails</button>
            </td>
        </tr>
    </tbody>
</table>

<?php include 'partials/footer.php'; ?>
