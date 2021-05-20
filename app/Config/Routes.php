<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
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

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('/', 'Home::index');
$routes->get('/login', 'Auth::login');
$routes->get('/register', 'Auth::register');
$routes->get('/logout', 'Auth::logout');

$routes->group('', ['filter' => 'auth'], function ($routes) {
	$routes->get('/admin', 'Admin\Dashboard::index');
	$routes->get('/message', 'Admin\Message::index');
	$routes->delete('/message/(:num)', 'Admin\Message::delete/$1');
	$routes->get('/meta', 'Admin\Meta::index');
	$routes->get('/meta/(:num)', 'Admin\Meta::edit/$1');
	$routes->put('/meta/(:num)', 'Admin\Meta::update/$1');
	$routes->get('/banner', 'Admin\Banner::index');
	$routes->get('/banner/(:num)', 'Admin\Banner::edit/$1');
	$routes->put('/banner/(:num)', 'Admin\Banner::update/$1');
	$routes->get('/content', 'Admin\Content::index');
	$routes->get('/create/content', 'Admin\Content::create');
	$routes->post('/content', 'Admin\Content::save');
	$routes->get('/content/(:num)', 'Admin\Content::edit/$1');
	$routes->put('/content/(:num)', 'Admin\Content::update/$1');
	$routes->delete('/content/(:num)', 'Admin\Content::delete/$1');
	$routes->get('/about-us', 'Admin\AboutUs::index');
	$routes->get('/about-us/(:num)', 'Admin\AboutUs::edit/$1');
	$routes->put('/about-us/(:num)', 'Admin\AboutUs::update/$1');
	$routes->get('/visi', 'Admin\Visi::index');
	$routes->get('/visi/(:num)', 'Admin\Visi::edit/$1');
	$routes->put('/visi/(:num)', 'Admin\Visi::update/$1');
	$routes->get('/misi', 'Admin\Misi::index');
	$routes->get('/misi/(:num)', 'Admin\Misi::edit/$1');
	$routes->put('/misi/(:num)', 'Admin\Misi::update/$1');
	$routes->get('/contact-us', 'Admin\ContactUs::index');
	$routes->get('/create/contact-us', 'Admin\ContactUs::create');
	$routes->post('/contact-us', 'Admin\ContactUs::save');
	$routes->get('/contact-us/(:num)', 'Admin\ContactUs::edit/$1');
	$routes->put('/contact-us/(:num)', 'Admin\ContactUs::update/$1');
	$routes->delete('/contact-us/(:num)', 'Admin\ContactUs::delete/$1');
});

$routes->post('/home/save', 'Home::save');
$routes->post('/login', 'Auth::go');
$routes->post('/register', 'Auth::save');


/**
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
