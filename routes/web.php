<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
* For homepage - Login Page
*/
Route::get('/', 'Auth\LoginController@showLoginForm')->name('welcome');

/*
* For login
*/
Auth::routes();

/*
* For admin-end - Every admin view routes goes here
*/
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
  Route::get('/', 'Admin\HomeController@index')->name('admin.dashboard');

  Route::resource('center', 'Admin\CenterController', ['except' => 'show']);

  // Tor routes goes here

});

/*
* For user-end - JSON results
*/
Route::group(['prefix' => 'api'], function(){
  Route::get('centers', 'Api\GetController@centers')->name('centers.get');
  Route::post('centers', 'Api\PostController@centers')->name('centers.post');

});
