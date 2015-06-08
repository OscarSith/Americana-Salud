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
	$route->get('product/{id}/edit', ['as' => 'productShow', 'uses' => 'ProductController@edit']);
	$route->put('product/{id}/update', ['as' => 'productUpdate', 'uses' => 'ProductController@update']);

	$route->put('product/change-status/{id}', ['as' => 'changeStatus', 'uses' => 'ProductController@changeStatus']);
	$route->get('product/{id}/images', ['as' => 'listImages', 'uses' => 'ProductImagesController@index']);
	$route->post('product/images/store', ['as' => 'addImageToProduct', 'uses' => 'ProductImagesController@store']);
	$route->delete('product/images/{id}/delete', ['as' => 'delImageToProduct', 'uses' => 'ProductImagesController@delete']);
	$route->put('product/{id}/set-default-image', ['as' => 'setDefaultImage', 'uses' => 'ProductController@setDefault']);
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
