<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container-fluid">
        <div class="row">
            <?php include 'navbar.php'; ?>
            
            <div class="col-12 col-md-9 col-xl-10 py-3 px-4">
                <!-- Header -->
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Student Management</h1>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addStudentModal">
                        <i class="bi bi-plus-circle me-2"></i>Add Student
                    </button>
                </div>

                <!-- Students Table -->
                <div class="card shadow-sm">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle mb-0">
                                <thead class="bg-light">
                                    <tr>
                                        <th class="px-4 py-3">Full Name</th>
                                        <th class="px-4 py-3">Email</th>
                                        <th class="px-4 py-3">Username</th>
                                        <th class="px-4 py-3">Filière</th>
                                        <th class="px-4 py-3 text-end">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // Sample data - Replace with database query
                                    $students = [
                                        ['John Doe', 'john@example.com', 'johndoe', 'Computer Science'],
                                        ['Jane Smith', 'jane@example.com', 'janesmith', 'Business Administration']
                                    ];

                                    foreach ($students as $student) {
                                        echo "<tr>";
                                        echo "<td class='px-4'>{$student[0]}</td>";
                                        echo "<td class='px-4'>{$student[1]}</td>";
                                        echo "<td class='px-4'>{$student[2]}</td>";
                                        echo "<td class='px-4'>{$student[3]}</td>";
                                        echo "<td class='px-4 text-end'>
                                                <div class='btn-group'>
                                                    <button type='button' 
                                                            class='btn btn-sm btn-outline-primary' 
                                                            onclick='editStudent(\"{$student[0]}\", \"{$student[1]}\", \"{$student[2]}\", \"{$student[3]}\")'>
                                                        <i class='bi bi-pencil-square me-1'></i>Edit
                                                    </button>
                                                </div>
                                              </td>";
                                        echo "</tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Add Student Modal -->
                <div class="modal fade" id="addStudentModal" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add New Student</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <form id="addStudentForm">
                                    <div class="mb-3">
                                        <label class="form-label">Full Name</label>
                                        <input type="text" class="form-control" name="fullName" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Username</label>
                                        <input type="text" class="form-control" name="username" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Filière</label>
                                        <select class="form-select" name="filiere" required>
                                            <option value="">Select Filière</option>
                                            <option>Computer Science</option>
                                            <option>Business Administration</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" form="addStudentForm" class="btn btn-primary">Add Student</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Edit Student Modal -->
                <div class="modal fade" id="editStudentModal" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Student</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <form id="editStudentForm">
                                    <div class="mb-3">
                                        <label class="form-label">Full Name</label>
                                        <input type="text" class="form-control" id="editName" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" id="editEmail" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Username</label>
                                        <input type="text" class="form-control" id="editUsername" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Filière</label>
                                        <select class="form-select" id="editFiliere" required>
                                            <option value="">Select Filière</option>
                                            <option>Computer Science</option>
                                            <option>Business Administration</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" form="editStudentForm" class="btn btn-primary">Save Changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function editStudent(name, email, username, filiere) {
            document.getElementById('editName').value = name;
            document.getElementById('editEmail').value = email;
            document.getElementById('editUsername').value = username;
            document.getElementById('editFiliere').value = filiere;
            
            var editModal = new bootstrap.Modal(document.getElementById('editStudentModal'));
            editModal.show();
        }

        // Form submit handlers
        document.getElementById('addStudentForm').addEventListener('submit', function(e) {
            e.preventDefault();
            // Add AJAX call here
            console.log('Adding student...');
        });

        document.getElementById('editStudentForm').addEventListener('submit', function(e) {
            e.preventDefault();
            // Add AJAX call here
            console.log('Updating student...');
        });
    </script>
</body>
</html>