<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');
$routes->get('/', 'LandingController::index');
$routes->get('/laporan', 'LandingController::laporan');
$routes->get('/laporan/detail/(:any)', 'LandingController::laporanDetail/$1');
$routes->get('/pengumuman/', 'LandingController::pengumuman');
$routes->get('/pengumuman/detail/(:any)', 'LandingController::PengumumanDetail/$1');

$routes->get('/app/login', 'LoginController::index');
$routes->post('/app/login', 'LoginController::loginAuth');
$routes->get('/app/logout', 'LoginController::logout');

$routes->get('/app/register', 'LoginController::register');
$routes->post('/app/register', 'LoginController::registerStore');

$routes->get('/app/laporan', 'LaporanController::index',['filter' => 'authGuard']);
$routes->get('/app/laporan/create', 'LaporanController::create',['filter' => 'authGuard']);
$routes->post('/app/laporan/store', 'LaporanController::store',['filter' => 'authGuard']);
$routes->get('/app/laporan/(:any)', 'LaporanController::detail/$1',['filter' => 'authGuard']);

$routes->post('/app/laporan/(:any)/detail/(:any)/store-image', 'LaporanController::storeGambar/$1/$2',['filter' => 'authGuard']);
$routes->post('/app/laporan/(:any)/detail/(:any)/delete-image/(:any)', 'LaporanController::deleteGambar/$1/$2/$2',['filter' => 'authGuard']);
$routes->post('/app/laporan/(:any)/detail/(:any)/store', 'LaporanController::storeDetail/$1/$2',['filter' => 'authGuard']);
$routes->post('/app/laporan/(:any)/detail/(:any)/edit/(:any)', 'LaporanController::updateDetail/$1/$2/$3',['filter' => 'authGuard']);
$routes->post('/app/laporan/(:any)/detail/(:any)/delete/(:any)', 'LaporanController::deleteDetail/$1/$2/$3',['filter' => 'authGuard']);

$routes->post('/app/laporan/(:any)/detail/(:any)/komentar/store', 'LaporanController::storeKomentar/$1/$2',['filter' => 'authGuard']);
$routes->post('/app/laporan/(:any)/detail/(:any)/komentar/edit/(:any)', 'LaporanController::updateKomentar/$1/$2/$3',['filter' => 'authGuard']);
$routes->post('/app/laporan/(:any)/detail/(:any)/komentar/delete/(:any)', 'LaporanController::deleteKomentar/$1/$2/$3',['filter' => 'authGuard']);

$routes->get('/app/laporan/delete/(:any)', 'LaporanController::delete/$1',['filter' => 'authGuard']);

$routes->get('/app/pengumuman', 'PengumumanController::index',['filter' => 'authGuard']);
$routes->get('/app/pengumuman/create', 'PengumumanController::create',['filter' => 'authGuard']);
$routes->post('/app/pengumuman/store', 'PengumumanController::store',['filter' => 'authGuard']);
$routes->get('/app/pengumuman/(:any)', 'PengumumanController::edit/$1',['filter' => 'authGuard']);
$routes->post('/app/pengumuman/(:any)', 'PengumumanController::update/$1',['filter' => 'authGuard']);
$routes->get('/app/pengumuman/delete/(:any)', 'PengumumanController::delete/$1',['filter' => 'authGuard']);

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
