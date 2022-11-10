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
$routes->get('/pengumuman/', 'LandingController::pengumuman');
$routes->get('/pengumuman/detail/(:any)', 'LandingController::PengumumanDetail/$1');

$routes->get('/app/login', 'LoginController::index');
$routes->post('/app/login', 'LoginController::loginAuth');
$routes->get('/app/logout', 'LoginController::logout');

$routes->get('/app/register', 'LoginController::register');
$routes->post('/app/register', 'LoginController::registerStore');

$routes->addRedirect('/app', '/app/beranda');
$routes->get('/app/beranda', 'BerandaController::index',['filter' => 'authGuard']);

$routes->get('/app/pengaduan', 'PengaduanController::index',['filter' => 'authGuard']);
$routes->get('/app/pengaduan/tambah', 'PengaduanController::create',['filter' => 'authGuard']);
$routes->post('/app/pengaduan/store', 'PengaduanController::store',['filter' => 'authGuard']);
$routes->get('/app/pengaduan/detail/(:any)', 'PengaduanController::detail/$1',['filter' => 'authGuard']);
$routes->post('/app/pengaduan/update/(:any)', 'PengaduanController::update/$1',['filter' => 'authGuard']);
$routes->get('/app/pengaduan/hapus/(:any)', 'PengaduanController::delete/$1',['filter' => 'authGuard']);

$routes->post('/app/pengaduan/komentar', 'PengaduanController::komentar',['filter' => 'authGuard']);

// $routes->get('/app/pengaduan/saya', 'PengaduanController::create',['filter' => 'authGuard']);
// $routes->post('/app/pengaduan/store', 'PengaduanController::store',['filter' => 'authGuard']);
// $routes->get('/app/pengaduan/(:any)', 'PengaduanController::detail/$1',['filter' => 'authGuard']);

// $routes->post('/app/pengaduan/(:any)/detail/(:any)/store-image', 'PengaduanController::storeGambar/$1/$2',['filter' => 'authGuard']);
// $routes->post('/app/pengaduan/(:any)/detail/(:any)/delete-image/(:any)', 'PengaduanController::deleteGambar/$1/$2/$2',['filter' => 'authGuard']);
// $routes->post('/app/pengaduan/(:any)/detail/(:any)/store', 'PengaduanController::storeDetail/$1/$2',['filter' => 'authGuard']);
// $routes->post('/app/pengaduan/(:any)/detail/(:any)/edit/(:any)', 'PengaduanController::updateDetail/$1/$2/$3',['filter' => 'authGuard']);
// $routes->post('/app/pengaduan/(:any)/detail/(:any)/delete/(:any)', 'PengaduanController::deleteDetail/$1/$2/$3',['filter' => 'authGuard']);

// $routes->post('/app/pengaduan/(:any)/detail/(:any)/komentar/store', 'PengaduanController::storeKomentar/$1/$2',['filter' => 'authGuard']);
// $routes->post('/app/pengaduan/(:any)/detail/(:any)/komentar/edit/(:any)', 'PengaduanController::updateKomentar/$1/$2/$3',['filter' => 'authGuard']);
// $routes->post('/app/pengaduan/(:any)/detail/(:any)/komentar/delete/(:any)', 'PengaduanController::deleteKomentar/$1/$2/$3',['filter' => 'authGuard']);
// $routes->get('/app/pengaduan/delete/(:any)', 'PengaduanController::delete/$1',['filter' => 'authGuard']);

$routes->get('/app/pengumuman', 'PengumumanController::index',['filter' => 'authGuard']);
$routes->get('/app/pengumuman/tambah', 'PengumumanController::create',['filter' => 'authGuard']);
$routes->post('/app/pengumuman/store', 'PengumumanController::store',['filter' => 'authGuard']);
$routes->get('/app/pengumuman/detail/(:any)', 'PengumumanController::detail/$1',['filter' => 'authGuard']);
$routes->get('/app/pengumuman/edit/(:any)', 'PengumumanController::edit/$1',['filter' => 'authGuard']);
$routes->post('/app/pengumuman/update/(:any)', 'PengumumanController::update/$1',['filter' => 'authGuard']);
$routes->get('/app/pengumuman/delete/(:any)', 'PengumumanController::delete/$1',['filter' => 'authGuard']);

$routes->get('/app/user', 'UserController::index',['filter' => 'authGuard']);
$routes->get('/app/user/tambah', 'UserController::create',['filter' => 'authGuard']);
$routes->post('/app/user/store', 'UserController::store',['filter' => 'authGuard']);
$routes->get('/app/user/detail/(:any)', 'UserController::detail/$1',['filter' => 'authGuard']);
$routes->get('/app/user/edit/(:any)', 'UserController::edit/$1',['filter' => 'authGuard']);
$routes->post('/app/user/update/(:any)', 'UserController::update/$1',['filter' => 'authGuard']);
$routes->get('/app/user/delete/(:any)', 'UserController::delete/$1',['filter' => 'authGuard']);

$routes->get('/app/kategori', 'KategoriController::index',['filter' => 'authGuard']);
$routes->get('/app/kategori/tambah', 'KategoriController::create',['filter' => 'authGuard']);
$routes->post('/app/kategori/store', 'KategoriController::store',['filter' => 'authGuard']);
$routes->get('/app/kategori/edit/(:any)', 'KategoriController::edit/$1',['filter' => 'authGuard']);
$routes->post('/app/kategori/update/(:any)', 'KategoriController::update/$1',['filter' => 'authGuard']);
$routes->get('/app/kategori/delete/(:any)', 'KategoriController::delete/$1',['filter' => 'authGuard']);

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
