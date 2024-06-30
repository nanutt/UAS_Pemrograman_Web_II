<?php
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//login
$routes->get('login', 'Login::index');
$routes->post('login/auth', 'Login::auth');
$routes->get('logout', 'Login::logout');
//Register
$routes->get('/', 'Register::index');
$routes->post('register/save', 'Register::save');
//Layanan FT
$routes->group('layananft', ['filter' => 'auth'], function ($routes) {
    $routes->get('dashboard', 'Views::index');
    $routes->get('response', 'Views::e_response');
    $routes->get('formpengajuan', 'Views::form');
    $routes->get('tanyaft', 'Views::tanya_ft');
    $routes->get('(:segment)/tanggapan', 'Views::tanggapan/$1');
    $routes->get('(:segment)/preview', 'Views::preview/$1');
    $routes->post('datapengajuan/save', 'Views::save');
});
?>