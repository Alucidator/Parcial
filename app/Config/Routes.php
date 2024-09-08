<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Clientes::index');

// Rutas para el CRUD de clientes
$routes->get('clientes', 'Clientes::index');
$routes->get('clientes/create', 'Clientes::create');
$routes->post('clientes/store', 'Clientes::store');
$routes->get('clientes/edit/(:num)', 'Clientes::edit/$1');
$routes->post('clientes/update/(:num)', 'Clientes::update/$1');
$routes->get('clientes/delete/(:num)', 'Clientes::delete/$1');

