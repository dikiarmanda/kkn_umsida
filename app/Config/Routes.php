<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');

// $routes->get('login', 'Login::login');
$routes->get('/', 'Auth::login');
$routes->post('/process-login', 'Auth::processLogin');
$routes->get('/choose-role', 'Auth::chooseRole');
$routes->get('/set-role/(:any)', 'Auth::setRole/$1');
$routes->get('/logout', 'Auth::logout');

$routes->get('/dashboard/administrator', 'Dashboard::administrator');
$routes->get('/dashboard/dpl', 'Dashboard::dpl');
$routes->get('/dashboard/drpm', 'Dashboard::drpm');


// $routes->get('admin-kkn', 'AdminKKN::index');
// $routes->get('admin-kkn/create', 'AdminKKN::create');
// $routes->post('admin-kkn/store', 'AdminKKN::store');

