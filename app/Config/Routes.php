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
