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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/keluar', 'AuthController@signout')->name('signout');

Route::middleware('guest')->name('auth.')->group(function() {
    Route::view('/daftar', 'auth/signup')->name('signup');
    Route::post('/daftar', 'AuthController@signup')->name('signup');

    Route::view('/masuk', 'auth/signin')->name('signin');
    Route::post('/masuk', 'AuthController@signin')->name('signin');
});

Route::middleware('auth')->name('dashboard.')->group(function() {
    Route::view('/dashboard', 'dashboard/index')->name('index');
});
