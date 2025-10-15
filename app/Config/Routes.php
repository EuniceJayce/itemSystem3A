<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/welcome', 'Home::index');

$routes->get('/register', 'RegistrationController::index');
$routes->post('/register', 'RegistrationController::create');

$routes->get('/login', 'LoginController::index');
$routes->post('/login', 'LoginController::validateUser');




