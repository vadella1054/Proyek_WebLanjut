<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('/', function () {
	$data = [
		'title' => "Home"
	];
	echo view ('layouts/header',$data);
	echo view ('layouts/navbar');
    echo view ('v_home');
    echo view ('layouts/footer');
});

$routes->get('/about', function (){
	$data = [
		'title' => "About"
	];
	echo view ('layouts/header',$data);
	echo view ('layouts/navbar');
    echo view ('v_about');
    echo view ('layouts/footer');
});

$routes->get('/catalog', 'Catalog::index');
$routes->get('/catalog/(:segment)', 'Catalog::detail/$1');

$routes->get('/register', 'Register::index');
$routes->get('/login', 'Login::index');
$routes->get('/admin', 'Login::index');

// $routes->get('/buku', 'Buku::index',['filter' => 'auth']);
$routes->get('/buku', 'Buku::index');
$routes->get('/buku/create', 'Buku::create');
$routes->post('/buku/store', 'Buku::store');
$routes->get('/buku/edit/(:num)', 'Buku::edit/$1');
$routes->post('/buku/update/(:num)', 'Buku::update/$1');
$routes->delete('buku/(:num)', 'Buku::delete/$1');



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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
