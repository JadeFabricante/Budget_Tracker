<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

$router->get('/', 'Auth');
$router->get('/home', 'Home');
$router->group('/auth', function() use ($router){
    $router->match('/register', 'Auth::register', ['POST', 'GET']);
    $router->match('/login', 'Auth::login', ['POST', 'GET']);
    $router->get('/logout', 'Auth::logout');
    $router->match('/password-reset', 'Auth::password_reset', ['POST', 'GET']);
    $router->match('/set-new-password', 'Auth::set_new_password', ['POST', 'GET']);
});

// Admin routes
$router->group('/admin', function() use ($router){
    $router->get('/', 'Admin::index');
    $router->get('/users', 'Admin::users');
    $router->get('/users/(:num)', 'Admin::users');
    $router->get('/user-feedback', 'Admin::user_feedback');
    $router->get('/user-feedback/(:num)', 'Admin::user_feedback');
    $router->get('/categories', 'Admin::categories');
    $router->get('/categories/(:num)', 'Admin::categories');
    $router->get('/transactions', 'Admin::transactions');
    $router->get('/transactions/(:num)', 'Admin::transactions');
    $router->get('/notifications', 'Admin::notifications');
    $router->get('/notifications/(:num)', 'Admin::notifications');
    $router->get('/log-history', 'Admin::log_history');
    $router->get('/log-history/(:num)', 'Admin::log_history');
});

