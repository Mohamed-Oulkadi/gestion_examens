<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professor Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-light">
<?php
    $current_page = basename($_SERVER['PHP_SELF']);
?>

<nav class="navbar navbar-expand-lg navbar-dark col-auto col-md-3 col-xl-2 px-sm-2 px-0 sidebar">
    <div class="container-fluid d-flex flex-column h-100">
        <!-- Brand -->
        <div class="d-flex justify-content-center justify-content-lg-start align-items-center w-100 mb-3">
            <a class="navbar-brand d-flex align-items-center" href="dashboard.php">
                <i class="bi bi-mortarboard-fill fs-3 me-lg-2"></i>
                <span class="brand-text d-none d-lg-inline">Professeur Dashboard</span>
            </a>
            <button class="navbar-toggler ms-auto d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse d-flex flex-column h-100" id="sidebarMenu">
            <!-- Main Navigation -->
            <ul class="navbar-nav flex-column w-100 mb-auto">
                <li class="nav-item">
                    <a href="dashboard.php" class="nav-link text-white <?php echo ($current_page == 'dashboard.php') ? 'active' : ''; ?>">
                        <i class="bi bi-speedometer2 me-lg-2 icon-size"></i>
                        <span class="menu-text d-none d-lg-inline">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="modules.php" class="nav-link text-white <?php echo ($current_page == 'modules.php') ? 'active' : ''; ?>">
                        <i class="bi bi-book me-lg-2 icon-size"></i>
                        <span class="menu-text d-none d-lg-inline">Modules</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="students.php" class="nav-link text-white <?php echo ($current_page == 'students.php') ? 'active' : ''; ?>">
                        <i class="bi bi-people me-lg-2 icon-size"></i>
                        <span class="menu-text d-none d-lg-inline">Etudiants</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="exams.php" class="nav-link text-white <?php echo ($current_page == 'exams.php') ? 'active' : ''; ?>">
                        <i class="bi bi-file-text me-lg-2 icon-size"></i>
                        <span class="menu-text d-none d-lg-inline">Examens</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="results.php" class="nav-link text-white <?php echo ($current_page == 'results.php') ? 'active' : ''; ?>">
                        <i class="bi bi-graph-up me-lg-2 icon-size"></i>
                        <span class="menu-text d-none d-lg-inline">Notes</span>
                    </a>
                </li>
            </ul>

            <!-- User Profile -->
            <div class="dropdown mt-auto">
                <a href="#" class="nav-link text-white dropdown-toggle d-flex align-items-center" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-circle me-2 icon-size"></i>
                    <span class="menu-text d-none d-lg-inline">Professeur</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark shadow">
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="profile.php">
                            <i class="bi bi-person me-2"></i>Profile
                        </a>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="../login.php">
                            <i class="bi bi-box-