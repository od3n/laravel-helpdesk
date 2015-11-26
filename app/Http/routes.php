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

// Route::get('/', function() {
// 	return view('welcome');
// });
Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');

Route::get('users/profile', ['middleware' => 'auth', 'uses' => 'Auth\AuthController@getProfile']);
Route::post('users/profile', ['middleware' => 'auth', 'uses' => 'Auth\AuthController@putProfile']);

// Authentication routes...
Route::get('users/login', 'Auth\AuthController@getLogin');
Route::post('users/login', 'Auth\AuthController@postLogin');
Route::get('users/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('users/register', 'Auth\AuthController@getRegister');
Route::post('users/register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

// Ticket routes
Route::post('tickets/{slug}', 'TicketsController@destroy');
Route::post('tickets/{slug}/edit', 'TicketsController@update');
Route::resource('tickets', 'TicketsController');

// Comment routes
Route::post('comments', 'CommentsController@store');
