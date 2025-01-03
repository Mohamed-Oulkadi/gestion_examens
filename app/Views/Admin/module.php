<?php
/**
 * Fichier: module.php
 * Description: Interface pour afficher et gérer les modules
 */
include('navbar.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Gestion des Modules</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Gestion des Modules</h1>

        <!-- Table for modules -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Filières</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Loop for dynamic module list -->
                <tr>
                    <td>1</td>
                    <td>Programmation</td>
                    <td>Introduction à la programmation</td>
                    <td>Informatique, Gestion</td>
                    <td>
                        <button class="btn btn-warning btn-sm">Modifier</button>
                        <button class="btn btn-danger btn-sm">Supprimer</button>
                    </td>
                </tr>
                <!-- Add more rows dynamically -->
            </tbody>
        </table>

        <!-- Add new module form -->
        <h2 class="mt-5">Ajouter un nouveau module</h2>
        <form action="/admin/add_module" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Nom</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nom du module" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" placeholder="Description du module" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="filieres" class="form-label">Filières</label>
                <select class="form-select" id="filieres" name="filieres[]" multiple required>
                    <!-- Loop for dynamic filiere list -->
                    <option value="1">Informatique</option>
                    <option value="2">Gestion</option>
                    <option value="3">Réseaux</option>
                </select>
                <small class="text-muted">Maintenez la touche Ctrl (Windows) ou Command (Mac) pour sélectionner plusieurs filières.</small>
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
