<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 //login
 $routes->get('login', 'Login::index');
 $routes->get('register', 'Register::index');
 $routes->post('register/save', 'Register::save');
 
 //dash
 $routes->get('dashboard', 'views::index');
 $routes->get('response', 'views::e_response');
 
 //tanya ft
 $routes->get('formpengajuan', 'views::form');
 $routes->get('tanyaft', 'views::tanya_ft');
 $routes->get('(:segment)/tanggapan', 'views::tanggapan/$1');
 $routes->get('(:segment)/preview', 'views::preview/$1');
 $routes->post('datapengajuan/save', 'views::save');
 
 
 
 $routes->post('login/auth', 'Login::auth');
 $routes->get('logout', 'Login::logout');
 $routes->get('/', 'HalamanAwal::index');
// $routes->group('buku', ['filter' => 'auth'], function ($routes) {
//     $routes->get('index', 'BukuRoutes::index');
//     $routes->get('(:segment)/preview', 'BukuRoutes::preview/$1');
//     $routes->get('create', 'BukuRoutes::create');
//     $routes->post('save', 'BukuRoutes::save');
//     $routes->get('edit/(:segment)', 'BukuRoutes::edit/$1');
//     $routes->post('update/(:segment)', 'BukuRoutes::update/$1');
//     $routes->get('(:segment)/delete', 'BukuRoutes::delete/$1');
// });
