<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/', 'Auth::login');

$routes->get('/login', 'Auth::login');
$routes->post('/login-process', 'Auth::loginProcess');

$routes->get('/register', 'Auth::register');
$routes->post('/register-process', 'Auth::registerProcess');

$routes->get('/logout', 'Auth::logout');

$routes->get('/admin', 'Admin::index', [
    'filter' => ['auth', 'role:admin']
]);

$routes->get('/staff', 'Staff::index', [
    'filter' => ['auth', 'role:staff']
]);

$routes->get('/customer', 'Customer::index', [
    'filter' => ['auth', 'role:customer']
]);