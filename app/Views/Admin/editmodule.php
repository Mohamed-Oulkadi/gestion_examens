<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modifier module</title>
</head>

<body>
    <?php include("navbar.php"); ?>

    <div class="container-fluid mt-4">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: rgb(33, 100, 145); color: aliceblue;">
                    <h4 class="modal-title text-center" style="font-family: 'Varela Round', sans-serif;">
                        Modifier les informations de module
                    </h4>
                </div>

               
                <div class="modal-body p-4">
                    <form action="/admin/edit_module" method="POST">
                  
                        <div class="form-group">
                            <label for="name" class="form-label">Nom</label>
                            <input 
                                type="text" 
                                class="form-control" 
                                id="name" 
                                name="name" 
                                value=""
                                placeholder="Nom du module" 
                                required>
                        </div>

                        <div class="form-group mt-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea 
                                class="form-control" 
                                id="description" 
                                name="description"
                                value="" 
                                placeholder="Description du module" 
                                rows="3" 
                                required></textarea>
                        </div>

                        <div class="form-group mt-3">
                            <label for="filieres" class="form-label">Filières</label>
                            <select 
                                class="form-control" 
                                id="filieres" 
                                value=""
                                name="filieres[]" 
                                multiple 
                                required>
                                <option value="1">Informatique</option>
                                <option value="2">Gestion</option>
                                <option value="3">Réseaux</option>
                            </select>
                            <small class="text-muted mt-2 d-block">
                                Maintenez la touche Ctrl (Windows) ou Command (Mac) pour sélectionner plusieurs filières.
                            </small>
                        </div>
                        <div class="form-group mt-3">
                            <label for="professeur" class="form-label">professeur</label>
                                <select
                                    class="form-control"
                                    id="professeur"
                                    name="professeur"
                                    
                                    required>
                                    <!-- Boucle pour la liste dynamique des filières -->
                                    <option selected disabled >Choisir un professeur</option>
                                <?php foreach ($professeurs as $index => $professeur): ?>
                                <option value="<?= esc($professeur['id']); ?>"><?= esc($professeur['prenom'] . " " . $professeur['nom']); ?></option>
                                <?php endforeach; ?>
                                </select>
                                
                            </div>

                        <div class="text-right mt-4">
                            <button type="submit" class="btn btn-primary">Modifier</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
