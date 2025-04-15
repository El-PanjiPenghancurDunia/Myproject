<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('Hello/', 'Home::Hello');
$routes->get('Hello/(:any)', 'Home::Hello/$1');
$routes->get('kategori', 'Home::kategori');
$routes->get('alattulis', 'Home::alattulis');
$routes->get('pakaian', 'Home::pakaian');
$routes->get('pertukangan', 'Home::pertukangan');
$routes->get('elektronik', 'Home::elektronik');
$routes->get('snack', 'Home::snack');
$routes->get('/produk', 'ProdukController::index');
$routes->get('/keranjang', 'TransaksiController::index');
$routes->get('login', 'AuthController::login');
$routes->post('login', 'AuthController::login');
$routes->get('logout', 'AuthController::logout');