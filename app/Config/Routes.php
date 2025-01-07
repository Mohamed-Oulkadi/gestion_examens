<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Login::index');
$routes->get('login', 'Login::index');
$routes->post('Login/authenticate', 'Login::authenticate');
$routes->get('register', 'Register::index');
$routes->post('Register/processRegister', 'Register::processRegister');
//$routes->get('dashboard', 'Dashboard::index');
$routes->get('logout', 'Logout::index');


$routes->group('Admin', function ($routes) {
    $routes->get('dashboard', 'Dashboard::index'); // Default route (admin/dashboard)
});

$routes->group('admin', function ($routes) {
    $routes->get('dashboard', 'Dashboard::index'); // Dashboard route
    $routes->get('professeurs', 'Professeurs::index'); // Professeurs listing
    $routes->get('modules', 'Modules::index'); // Modules listing 
    $routes->post('insert_module', 'Modules::insert');
    $routes->get('filieres', 'Filieres::index'); // Filieres listing 
    $routes->post('ajouter_filiere', 'Filieres::insert');
    $routes->get('etudiants', 'Etudiants::index'); // Etudiants listing
    $routes->post('assigner', 'Etudiants::assigne_etu_fil'); // Etudiants listing
    $routes->get('examens', 'Examens::index'); // Examens listing
    $routes->get('resultats', 'Resultas::index'); // Resultats listing
});



$routes->group('Etudiant', function ($routes) {
    $routes->get('dashboardEtudiant', 'DashboardEtud::index'); // Dashboard route
    $routes->get('profil', 'Profil::index'); 
});
