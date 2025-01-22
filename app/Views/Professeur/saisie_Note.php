
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saisie des Notes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
</head>
<body class="bg-light">
    <div class="container-fluid">
        <div class="row flex-nowrap">
        <?php include 'navbar.php'; ?>
            <div class="col py-3">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Saisie des Notes :</h1>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNoteModal">
                        <i class="bi bi-plus-circle me-2"></i>Nouvelle Note
                    </button>
                </div>
        
                <!-- Notes Table -->
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Étudiant</th>
                                <th>Matière</th>
                                <th>Session</th>
                                <th>Note</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>John Doe</td>
                                <td>Mathématiques</td>
                                <td>Janvier 2025</td>
                                <td>15.5</td>
                                <td>
                                    <button class="btn btn-sm btn-primary me-2" onclick="editNote(1)">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger" onclick="deleteNote(1)">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>Jane Smith</td>
                                <td>Physique</td>
                                <td>Janvier 2025</td>
                                <td>18.0</td>
                                <td>
                                    <button class="btn btn-sm btn-primary me-2" onclick="editNote(2)">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger" onclick="deleteNote(2)">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        
            <!-- Add Note Modal -->
            <div class="modal fade" id="addNoteModal" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Nouvelle Note</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <form id="addNoteForm">
                                <div class="mb-3">
                                    <label class="form-label">Étudiant</label>
                                    <select class="form-select select2-single" name="etudiant" required>
                                        <option value="">Choisir un étudiant...</option>
                                        <option value="1">John Doe</option>
                                        <option value="2">Jane Smith</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Matière</label>
                                    <select class="form-select select2-single" name="matiere" required>
                                        <option value="">Choisir une matière...</option>
                                        <option value="1">Mathématiques</option>
                                        <option value="2">Physique</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Session</label>
                                    <select class="form-select select2-single" name="session" required>
                                        <option value="">Choisir une session...</option>
                                        <option value="1">Janvier 2025</option>
                                        <option value="2">Juin 2025</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Note</label>
                                    <input type="number" name="note" class="form-control" min="0" max="20" step="0.01" required>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="editNoteModal" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Modifier la Note</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <form id="editNoteForm">
                                <input type="hidden" id="editNoteId">
                                <div class="mb-3">
                                    <label class="form-label">Étudiant</label>
                                    <input type="text" id="editEtudiant" class="form-control" readonly>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Matière</label>
                                    <input type="text" id="editMatiere" class="form-control" readonly>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Session</label>
                                    <input type="text" id="editSession" class="form-control" readonly>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Note</label>
                                    <input type="number" id="editNote" class="form-control" min="0" max="20" step="0.01" required>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                    <button type="button" class="btn btn-primary" onclick="saveEditedNote()">Enregistrer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        
        <script>
        $(document).ready(function() {
            $('.select2-single').select2({
                theme: 'bootstrap-5',
                placeholder: 'Sélectionnez une option'
            });
        });

        function editNote(noteId, student, subject, session, noteValue) {
            $('#editNoteId').val(noteId);
            $('#editStudent').val(student);
            $('#editSubject').val(subject);
            $('#editSession').val(session);
            $('#editNoteValue').val(noteValue);
            $('#editNoteModal').modal('show');
        }

        function deleteNote(noteId) {
            if (confirm('Êtes-vous sûr de vouloir supprimer cette note ?')) {
                alert("Suppression de la note avec l'ID : " + noteId);
            }
        }
        </script>
    </div>
</body>
</html>
