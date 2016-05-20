<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Front end pages
Route::get('/', function () {
    return view('home.index');
});
Route::get('/about', function () {
    return view('home.about');
});
Route::get('/contact', function () {
    return view('home.contact');
});

// App pages
Route::auth();

// Authentication Routes...  (Alternative way) Start
//$this->get('login', 'Auth\AuthController@showLoginForm');
//$this->post('login', 'Auth\AuthController@login');
//$this->get('logout', 'Auth\AuthController@logout');

// Registration Routes...
//$this->get('register', 'Auth\AuthController@showRegistrationForm');
//$this->post('register', 'Auth\AuthController@register');

// Password Reset Routes...
//$this->get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
///$this->post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
//$this->post('password/reset', 'Auth\PasswordController@reset');
// END
// LOgged in routes
Route::get('/home', 'HomeController@index');
Route::get('/orders', 'OrdersController@index');

// Orders Datatable

Route::get('/orders/serverSide', [
   'as'   => 'orders.serverSide',
   'uses' => 'OrdersController@serverside'
]);

// Edit
Route::get('/orders/edit/{id}', 'OrdersController@edit');
Route::post('/orders/update/{id}', 'OrdersController@update');
//Add
Route::get('/orders/add', 'OrdersController@add');
Route::post('/orders/store/', 'OrdersController@store');
// delete
Route::get('/orders/delete/{id}', 'OrdersController@delete');

Route::get('/apidetails', 'HomeController@apidetails');

// REST API
Route::group(['prefix' => 'api/v1', 'middleware' => 'auth:api'], function () {
       Route::resource('order', 'OrderAPIContoller');
   });
