<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');


/* PRODUCT CRUD */

$router->get('/', 'ProductController::index')->middleware('auth');

$router->get('/products', 'ProductController::index')->middleware('auth');

$router->any('/products/create', 'ProductController::create')->middleware('auth');

$router->any('/products/edit/{id}', 'ProductController::edit')->middleware('auth');

$router->any('/products/delete/{id}', 'ProductController::delete')->middleware('auth');


/* LOGIN */

$router->any('/login', function(){
$_SESSION['logged_in'] =true;

});


/* NOT LOGGED IN */

$router->get('/not-logged-in', function()
{
    echo 'Please Login First.';
});


/* LOGOUT */

$router->get('/logout', function()
{
    $_SESSION = array();
    session_destroy();

    redirect('login');
});

?>