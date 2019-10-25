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

Route::middleware('auth')
    ->name('dashboard.')
    ->prefix('dashboard')
    ->namespace('Dashboard')
    ->group(function() {
    Route::get('/', 'DashboardIndexController@index')->name('index');

    Route::middleware('admin')->group(function () {
        Route::get('/pengaturan', 'SettingsController@index')->name('settings');
        Route::get('/pengaturan/{name}', 'SettingsController@edit')->name('settings.edit');
        Route::post('/pengaturan/{name}', 'SettingsController@update')->name('settings.update');

        Route::get('/semester', 'CoursegroupController@index')->name('coursegroups');
        Route::get('/semester/tambah', 'CoursegroupController@create')->name('coursegroups.create');
        Route::post('/semester', 'CoursegroupController@store')->name('coursegroups.store');

        Route::get('/matakuliah', 'CourseController@index')->name('courses');
        Route::get('/matakuliah/tambah', 'CourseController@create')->name('courses.create');
        Route::post('/matakuliah', 'CourseController@store')->name('courses.store');
        Route::get('/matakuliah/{course}', 'CourseController@show')->name('courses.show');
        Route::get('/matakuliah/{course}/edit', 'CourseController@edit')->name('courses.edit');
        Route::put('/matakuliah/{course}', 'CourseController@update')->name('courses.update');
    });
});
