<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assign Modules to Professors</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" rel="stylesheet" />
</head>
<body class="bg-light">
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <?php include 'navbar.php'; ?>
            
                   <div class="col py-3">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Liste des Professeurs :</h1>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#assignModuleModal">
                    <i class="bi bi-plus-circle me-2"></i>New professor
                </button>
            </div>
        
            <!-- Professors Table -->
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom et Prenom</th>
                            <th>Email</th>
                            <th>Username</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                       

<?php foreach ($professeurs as $index => $professeur): ?>
                    <tr>
                        <td><?=  esc($professeur['id']); ?></td>
                        <td><?= esc($professeur['nom']) . " " . esc($professeur['prenom']); ?></td>
                        <td><?= esc($professeur['email']); ?></td>
                        <td><?= esc($professeur['username']); ?></td>
                        <td>
                                        <button class="btn btn-sm btn-primary me-2" data-bs-toggle="modal" data-bs-target="#editFiliereModal">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                        </td>
                    </tr>
                <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        
        <!-- Assign Module Modal -->
        <div class="modal fade" id="assignModuleModal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Assign Modules to Professor</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form id="assignModuleForm">
                            <div class="mb-3">
                                <label class="form-label">Select Professor</label>
                                <select class="form-select select2-single" name="professor" required>
                                    <option value="">Choose professor...</option>
                                    <option value="1">Dr. John Smith</option>
                                    <option value="2">Dr. Jane Doe</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Select Modules</label>
                                <select class="form-select select2-multiple" name="modules[]" multiple required>
                                    <option value="1">Programming Basics</option>
                                    <option value="2">Data Structures</option>
                                    <option value="3">Algorithms</option>
                                    <option value="4">Database Systems</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" form="assignModuleForm" class="btn btn-primary">Assign Modules</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Add Select2 CSS and JS -->
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        
        <script>
        $(document).ready(function() {
            $('.select2-single').select2({
                theme: 'bootstrap-5',
                dropdownParent: $('#assignModuleModal')
            });
        
            $('.select2-multiple').select2({
                theme: 'bootstrap-5',
                dropdownParent: $('#assignModuleModal'),
                placeholder: 'Select modules'
            });
        });
        
        function editAssignment(professorId) {
            $('#assignModuleModal').modal('show');
            $('select[name="professor"]').val(professorId).trigger('change');
        }
        </script>
</body>
</html>