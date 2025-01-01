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
$routes->get('dashboard', 'Dashboard::index');
$routes->get('logout', 'Logout::index');
<<<<<<< HEAD
$routes->setAutoRoute(true);
=======

>>>>>>> c7f799b571c829c8526e66d5296aa4b6a9ffe72e
