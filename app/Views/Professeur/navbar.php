<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exams Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-light">


<?php
// Toujours vérifier si la session est démarrée
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Détermine la page actuelle pour activer le lien correspondant
$current_page = basename($_SERVER['PHP_SELF']);
?>

<nav class="navbar navbar-expand-lg navbar-dark col-auto col-md-3 col-xl-2 px-sm-2 px-0 sidebar">
    <div class="container-fluid d-flex flex-column h-100">
        <!-- Brand -->
        <div class="d-flex justify-content-center justify-content-lg-start align-items-center w-100 mb-3">
            <a class="navbar-brand d-flex align-items-center" href="dashboard.php">
                <i class="bi bi-mortarboard-fill fs-3 me-lg-2"></i>
                <span class="brand-text d-none d-lg-inline">ProfessorPortal</span>
            </a>
        </div>

        <div class="collapse navbar-collapse d-flex flex-column h-100" id="sidebarMenu">
            <!-- Main Navigation -->
            <ul class="navbar-nav flex-column w-100 mb-auto">
                <li class="nav-item">
                    <a href="dashboard.php" class="nav-link text-white <?php echo ($current_page == 'dashboard.php') ? 'active' : ''; ?>" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboard">
                        <i class="bi bi-speedometer2 me-lg-2 icon-size"></i>
                        <span class="menu-text d-none d-lg-inline">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="examens.php" class="nav-link text-white <?php echo ($current_page == 'exams.php') ? 'active' : ''; ?>" data-bs-toggle="tooltip" data-bs-placement="right" title="Examens">
                        <i class="bi bi-file-text me-lg-2 icon-size"></i>
                        <span class="menu-text d-none d-lg-inline">Examens</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="modules.php" class="nav-link text-white <?php echo ($current_page == 'modules.php') ? 'active' : ''; ?>" data-bs-toggle="tooltip" data-bs-placement="right" title="Modules">
                        <i class="bi bi-book me-lg-2 icon-size"></i>
                        <span class="menu-text d-none d-lg-inline">Modules</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="results.php" class="nav-link text-white <?php echo ($current_page == 'results.php') ? 'active' : ''; ?>" data-bs-toggle="tooltip" data-bs-placement="right" title="Results">
                        <i class="bi bi-graph-up me-lg-2 icon-size"></i>
                        <span class="menu-text d-none d-lg-inline">Notes</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="students.php" class="nav-link text-white <?php echo ($current_page == 'students.php') ? 'active' : ''; ?>" data-bs-toggle="tooltip" data-bs-placement="right" title="Students">
                        <i class="bi bi-people me-lg-2 icon-size"></i>
                        <span class="menu-text d-none d-lg-inline">Étudiants</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="reclamations.php" class="nav-link text-white <?php echo ($current_page == 'reclamations.php') ? 'active' : ''; ?>" data-bs-toggle="tooltip" data-bs-placement="right" title="Réclamations">
                        <i class="bi bi-exclamation-circle me-lg-2 icon-size"></i>
                        <span class="menu-text d-none d-lg-inline">Réclamations</span>
                    </a>
                </li>
            </ul>

            <!-- User Profile Dropup -->
            <div class="dropup mt-auto">
                <button class="btn nav-link text-white dropdown-toggle d-flex align-items-center w-100 border-0 py-2"
                        type="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false">
                    <i class="bi bi-person-circle me-lg-2 icon-size"></i>
                    <span class="menu-text d-none d-lg-inline">Professeur</span>
                    <i class="bi bi-chevron-up ms-auto d-none d-lg-block"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-dark shadow w-100">
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="profile.php">
                            <i class="bi bi-person me-2"></i>Profile
                        </a>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="../auth/logout.php">
                            <i class="bi bi-box-arrow-right me-2"></i>Déconnexion
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

        

            
            <!-- Add before closing body tag -->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
            
            <style>
            .dropdown {
                position: relative;
            }
            
            .dropdown-menu {
                position: absolute;
                inset: 0px auto auto 0px;
                margin: 0;
                transform: translate3d(0px, 40px, 0px);
                z-index: 1021;
                min-width: 200px;
            }
            
            .dropdown-item {
                padding: 0.5rem 1rem;
                color: rgba(255, 255, 255, 0.8);
            }
            
            .dropdown-item:hover {
                background-color: rgba(255, 255, 255, 0.1);
                color: white;
            }
            </style>


<style>
    .sidebar {
        background: linear-gradient(180deg, #2c3e50 0%, #3498db 100%);
        min-height: 100vh;
        position: sticky;
        top: 0;
        z-index: 1000;
        transition: all 0.3s;
    }

    .nav-link {
        padding: 0.8rem 1rem;
        transition: all 0.3s;
        border-radius: 5px;
        margin: 0.2rem 0;
        white-space: nowrap;
        display: flex;
        align-items: center;
    }

    .nav-link:hover {
        background-color: rgba(255, 255, 255, 0.1);
        transform: translateX(5px);
    }

    .nav-link.active {
        background-color: rgba(255, 255, 255, 0.2);
        border-left: 4px solid #fff;
    }

    .icon-size {
        font-size: 1.25rem;
        min-width: 2rem;
        text-align: center;
    }

    .dropdown {
    position: relative;
}

.dropdown-menu {
    position: absolute;
    inset: 0px auto auto 0px;
    margin: 0;
    transform: translate3d(0px, 40px, 0px);
    z-index: 1021;
    min-width: 200px;
}

.dropdown-item {
    padding: 0.5rem 1rem;
    color: rgba(255, 255, 255, 0.8);
}

.dropdown-item:hover {
    background-color: rgba(255, 255, 255, 0.1);
    color: white;
}

    @media (max-width: 991.98px) {
        .sidebar {
            width: auto;
        }
        
        .nav-link {
            justify-content: center;
            padding: 0.8rem;
        }
        
        .nav-link i {
            margin: 0 !important;
        }
        
        .navbar-collapse {
            background: inherit;
            position: absolute;
            top: 60px;
            left: 0;
            right: 0;
            z-index: 1000;
            padding: 1rem;
        }
    }

    @media (min-width: 992px) {
        .navbar-collapse {
            display: flex !important;
        }
        
        .navbar-toggler {
            display: none;
        }
    }

    .dropdown-menu {
    position: absolute;
    z-index: 1021;
    min-width: 200px;
    margin-top: 0.125rem;
}

.dropdown-menu.show {
    display: block;
}

.dropdown-item {
    padding: 0.5rem 1rem;
    color: rgba(255, 255, 255, 0.8);
}

.dropdown-item:hover {
    background-color: rgba(255, 255, 255, 0.1);
    color: white;
}
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        });
    });
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
