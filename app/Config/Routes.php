<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Cinema::index');
$routes->get('/orderpage', 'Cinema::order');
$routes->get('/moviedetail/(:any)', 'Cinema::singleUser/$1');
$routes->get('/create', 'Cinema::create');
$routes->post('/add', 'Cinema::add');
