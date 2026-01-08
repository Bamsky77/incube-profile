<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('contact/send', 'Contact::send');

// =====================
// ROUTES ADMIN
// =====================
$routes->get('admin', 'Admin::index');
$routes->get('admin/services', 'Admin::services');

$routes->get('admin/services/create', 'Admin::createService');
$routes->post('admin/services/store', 'Admin::storeService');

$routes->get('admin/services/edit/(:num)', 'Admin::editService/$1');
$routes->post('admin/services/update/(:num)', 'Admin::updateService/$1');

$routes->get('admin/services/delete/(:num)', 'Admin::deleteService/$1');

// AUTH
$routes->get('login', 'Auth::login');
$routes->post('login', 'Auth::doLogin');
$routes->get('logout', 'Auth::logout');

