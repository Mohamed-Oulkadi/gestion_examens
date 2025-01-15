<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modules Management</title>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <?php include 'navbar.php'; ?>

            <div class="col py-3">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Modules Management</h1>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModuleModal">
                        <i class="bi bi-plus-circle me-2"></i>Add New Module
                    </button>
                </div>

                <!-- Modules Table -->
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Module Name</th>
                                <th>Description</th>
                                <th>Filière</th>
                                <th>Prof</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($modules)): ?>
                                <?php foreach ($modules as $index => $module): ?>
                                    <tr>
                                        <td><?= $index + 1; ?></td>
                                        <td><?= esc($module['module_name']); ?></td>
                                        <td><?= esc($module['description']); ?></td>
                                        <td><?= esc($module['filiere_name']); ?></td>
                                        <td><?= esc($module['professeur_prenom']) . ' ' . esc($module['professeur_nom']); ?></td>
                                        <td>
                                            <button class="btn btn-sm btn-primary me-2 edit-module-btn"
                                                data-id="<?= esc($module['module_id']); ?>"
                                                data-name="<?= esc($module['module_name']); ?>"
                                                data-description="<?= esc($module['description']); ?>"
                                                data-filiere-id="<?= esc($module['filiere_id']); ?>"
                                                data-professeur-id="<?= esc($module['professeur_id']); ?>">
                                                <i class="bi bi-pencil"></i>
                                            </button>

                                            <form action="/admin/modules/delete/<?= esc($module['module_id']); ?>" method="POST" onsubmit="return confirm('Voulez-vous vraiment supprimer ce module ?');" style="display: inline;">

                                                <button type="submit" class="btn btn-sm btn-danger">

                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </form>


                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="5" class="text-center">Aucun module trouvé</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Module Modal -->
    <div class="modal fade" id="addModuleModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Module</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="addModuleForm" action="insert_module" method="POST">
                        <div class="mb-3">
                            <label for="name" class="form-label">Module Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" rows="3" name="description" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="filiere" class="form-label">Filière</label>
                            <select class="form-select select2" id="filiere" name="filieres[]" required>
                                <option value="" selected>Select Filière</option>
                                <?php foreach ($filieres as $index => $filiere): ?>
                                    <option value="<?= esc($filiere['id']); ?>"><?= esc($filiere['name']); ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="professeur" class="form-label">professeur</label>
                            <select
                                class="form-select select2"
                                id="professeur"
                                name="professeur"

                                required>
                                <!-- Boucle pour la liste dynamique des filières -->
                                <option selected disabled>Choisir un professeur</option>
                                <?php foreach ($professeurs as $index => $professeur): ?>
                                    <option value="<?= esc($professeur['id']); ?>"><?= esc($professeur['prenom'] . " " . $professeur['nom']); ?></option>
                                <?php endforeach; ?>
                            </select>

                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" form="addModuleForm" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Module Modal -->
    <div class="modal fade" id="editModuleModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Module</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="editModuleForm" action="/admin/modules/update/<?= esc($module['module_id']); ?>" method="POST">
                        <input type="hidden" name="id" id="editId">

                        <div class="mb-3">
                            <label for="editName" class="form-label">Module Name</label>
                            <input type="text" class="form-control" name="name" id="editName" required>
                        </div>

                        <div class="mb-3">
                            <label for="editDescription" class="form-label">Description</label>
                            <textarea class="form-control" name="description" id="editDescription" rows="3" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="editFiliere" class="form-label">Filière</label>
                            <select class="form-select select2" name="filiere" id="editFiliere" required>
                                <?php foreach ($filieres as $filiere): ?>
                                    <option value="<?= esc($filiere['id']); ?>"><?= esc($filiere['name']); ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="editProfesseur" class="form-label">Professeur</label>
                            <select class="form-select select2" name="professeur" id="editProfesseur" required>
                                <?php foreach ($professeurs as $professeur): ?>
                                    <option value="<?= esc($professeur['id']); ?>"><?= esc($professeur['prenom'] . ' ' . $professeur['nom']); ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>

                </div>
                
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // Gérer le clic sur le bouton d'édition
            $('.edit-module-btn').click(function() {
                // Récupérer les données du bouton cliqué
                const moduleId = $(this).data('id');
                const moduleName = $(this).data('name');
                const moduleDescription = $(this).data('description');
                const filiereId = $(this).data('filiere-id');
                const professeurId = $(this).data('professeur-id');

                // Injecter les données dans les champs du formulaire
                $('#editId').val(moduleId);
                $('#editName').val(moduleName);
                $('#editDescription').val(moduleDescription);
                $('#editFiliere').val(filiereId).trigger('change'); // Met à jour la sélection
                $('#editProfesseur').val(professeurId).trigger('change'); // Met à jour la sélection

                // Afficher le modal
                $('#editModuleModal').modal('show');
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</body>

</html>