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
  Route::post('/profile/changepass', 'Admin\ProfileController@edit')->name('profile.changepass');
  Route::resource('center', 'Admin\CenterController', ['except' => 'show']);

  Route::resource('course', 'Admin\CourseController', ['except' => 'show']);

  Route::resource('admin', 'Admin\AdminController', ['except' => 'show']);

  Route::resource('enrollment', 'Admin\EnrollmentController', ['except' => ['create', 'store']]);

  Route::resource('profile', 'Admin\ProfileController', ['except' => 'show']);
  // Tor routes goes here

});

/*
* For user-end - JSON results
*/
Route::group(['prefix' => 'api'], function(){
  Route::get('centers', 'Api\GetController@centers')->name('centers.get');
  Route::get('centers/{id}', 'Api\GetController@center')->name('centers.single');
  //Route::get('courses', 'Api\GetController@courses')->name('courses.get');
  Route::get('courses/{id}', 'Api\GetController@course');
  //Route::post('courses', 'Api\PostController@courses')->name('courses.post');
  //Route::get('admins', 'Api\GetController@admins')->name('admins.get');
  //Route::post('admins', 'Api\PostController@admins')->name('admins.post');
  //Route::get('profiles', 'Api\GetController@profiles')->name('profiles.get');
  //Route::post('profiles', 'Api\PostController@profiles')->name('profiles.post');
  //Route::get('enrollments', 'Api\GetController@enrollments')->name('enrollments.get');
  Route::post('enrollments/create', 'Api\PostController@enrollments')->name('enrollments.post');
});

Route::get('/test/frontend', function(){
  return view('testing.index');
});

Route::get('/test', function(){
  return view('test');
});
Route::get('/registration', 'UserController@index')->name('user.index');

Route::post('/user', 'UserController@getCourse')->name('user.courses');
Route::get('/test/show', 'Admin\CourseController@index');
