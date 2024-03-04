<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/registration-form', 'Auth::registration');
$routes->post('/auth-register', 'Auth::auth_registration');




