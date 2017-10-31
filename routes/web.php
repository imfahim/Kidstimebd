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
//Auth::routes();

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
//Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
//Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
//Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
//Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
//Route::post('password/reset', 'Auth\ResetPasswordController@reset');

/*
* For admin-end - Every admin view routes goes here
*/
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
  Route::get('/', 'Admin\HomeController@index')->name('admin.dashboard');

  Route::resource('center', 'Admin\CenterController', ['except' => 'show']);

  Route::resource('course', 'Admin\CourseController', ['except' => 'show']);

  Route::resource('enrollment', 'Admin\EnrollmentController', ['except' => 'show']);

  // Tor routes goes here

});

/*
* For user-end - JSON results
*/
Route::group(['prefix' => 'api'], function(){
  Route::get('centers', 'Api\GetController@centers')->name('centers.get');
  Route::post('centers', 'Api\PostController@centers')->name('centers.post');

});


Route::get('/test', function(){
  return view('test');
});
Route::get('/test/show', 'Admin\CourseController@index');
Route::get('/test/show/{id}', 'Admin\CourseController@show');
Route::get('/test/edit/{id}', 'Admin\CourseController@edit');
