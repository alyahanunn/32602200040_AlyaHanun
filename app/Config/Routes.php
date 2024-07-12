<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/form', 'FormController::submitForm');
$routes->get('/halodunia', 'HelloWorld::halodunia');
$routes->get('/sample_view', 'samplecontroller::index');
$routes->get('/panggil', 'pemanggil_Hanun::index');
// $routes->get('/', 'pages::index');
$routes->get('/pages/service', 'pages::service');

// $routes->get('/', 'Home::index');
// $routes->get('/', 'HomeController::index');
$routes->get('/profile', 'ProfilController::index');
$routes->get('/experience', 'ExperienceController::index');

/**routes bab 6 */
$routes->get('/crud', 'CrudController::index');
$routes->get('crud/tambah', 'CrudController::tambah');
$routes->post('crud/tambah', 'CrudController::tambah');

$routes->get('crud/hapus/(:num)', 'CrudController::hapus/$1');

$routes->get('crud/edit/(:num)', 'CrudController::edit/$1');
$routes->post('/crud/editan', 'CrudController::editan');



$routes->get('form', 'FormController::index');
$routes->post('submit-form', 'FormController::submitForm');

$routes->get('/latihanview', 'HelloWorld::index');
