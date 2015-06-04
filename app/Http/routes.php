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

Route::get('/', 'HomeController@index');
Route::get('nosotros', 'HomeController@nosotros');

Route::get('admin', ['as' => 'admin', 'uses' => 'AdminController@index']);

Route::group(['middleware' => 'auth'], function($route)
{
	$route->get('product', ['as' => 'productCreate', 'uses' => 'ProductController@create']);
	$route->post('product', ['as' => 'productStore', 'uses' => 'ProductController@store']);
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
