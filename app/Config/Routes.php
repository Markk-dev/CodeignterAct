<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::homepage');
$routes->get('/homepage', 'Home::homepage');
$routes->get('/displayName', 'Home::displayName');

