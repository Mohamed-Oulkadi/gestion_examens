<?php include 'partials/header.php'; ?>

<h1>Gestion des Notes</h1>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Étudiant</th>
            <th>Matière</th>
            <th>Note</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <!-- Exemple de données statiques -->
        <tr>
            <td>1</td>
            <td>Jean Dupont</td>
            <td>Mathématiques</td>
            <td>15</td>
            <td>
                <button class="btn btn-warning btn-sm">Modifier</button>
                <button class="btn btn-danger btn-sm">Supprimer</button>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>Marie Durand</td>
            <td>Physique</td>
            <td>18</td>
            <td>
                <button class="btn btn-warning btn-sm">Modifier</button>
                <button class="btn btn-danger btn-sm">Supprimer</button>
            </td>
        </tr>
    </tbody>
</table>

<button class="btn btn-success">Ajouter une note</button>

<?php include 'partials/footer.php'; ?>
