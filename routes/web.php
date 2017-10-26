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

Route::get('/', function () {
    return view('admin.dashboard');
});

Route::get('/center', function(){
	return view('admin.center.index');
});

Route::get('/center/create', function(){
	return view('admin.center.create');
});

Route::get('/center/edit', function(){
	return view('admin.center.edit');
});

Route::get('/center/delete', function(){
	return view('admin.center.delete');
});
