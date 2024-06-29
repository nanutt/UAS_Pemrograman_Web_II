<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('login', 'Login::index');
$routes->get('register', 'Register::index');
$routes->post('register/save', 'Register::save');
$routes->post('dashboard', 'views::index');
$routes->get('(:segment)/preview', 'views::preview/$1');
$routes->get('response', 'views::e_response');
$routes->get('tanyaft', 'views::tanya_ft');
$routes->post('datapengajuan/save', 'views::save');
$routes->get('formpengajuan', 'views::form');


$routes->post('dashboard', 'Login::auth');
$routes->get('logout', 'Login::logout');
$routes->get('/', 'HalamanAwal::index');
$routes->group('buku', ['filter' => 'auth'], function ($routes) {
    $routes->get('index', 'BukuRoutes::index');
    $routes->get('(:segment)/preview', 'BukuRoutes::preview/$1');
    $routes->get('create', 'BukuRoutes::create');
    $routes->post('save', 'BukuRoutes::save');
    $routes->get('edit/(:segment)', 'BukuRoutes::edit/$1');
    $routes->post('update/(:segment)', 'BukuRoutes::update/$1');
    $routes->get('(:segment)/delete', 'BukuRoutes::delete/$1');
});
