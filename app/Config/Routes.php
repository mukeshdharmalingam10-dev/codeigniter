<?php

namespace Config;

use CodeIgniter\Router\RouteCollection;
use Config\Services;

$routes = Services::routes();

/*
|--------------------------------------------------------------------------
| System Routes
|--------------------------------------------------------------------------
*/
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
|--------------------------------------------------------------------------
| Router Setup
|--------------------------------------------------------------------------
*/
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('BlogController');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true); // enable auto routing

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/

// Home
$routes->get('/', 'BlogController::index');

// Auth
$routes->get('login', 'AuthController::index');
$routes->post('login-post', 'AuthController::login');
$routes->get('logout', 'AuthController::logout');

// Dashboard
$routes->get('dashboard', 'DashboardController::index');

// Student module
$routes->get('students', 'StudentController::index');
$routes->post('students/save', 'StudentController::save');
$routes->post('students/delete', 'StudentController::delete');

// Blog routes
$routes->get('blogs', 'BlogController::index');
$routes->post('blogs/create', 'BlogController::create');
$routes->post('blogs/update/(:num)', 'BlogController::update/$1');
$routes->post('blogs/delete/(:num)', 'BlogController::delete/$1');

/*
|--------------------------------------------------------------------------
| Environment Routes
|--------------------------------------------------------------------------
*/
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
