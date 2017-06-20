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

Route::get('/', 'FrontEndController@index')->name('index');

Route::prefix('admin')->middleware('checkAdmin')->group(function () {

    Route::get('/', 'BackEndController@index')->name('admin_dashboard');

    Route::prefix('post')->group(function () {
        Route::get('/', 'BackEndController@post')->name('admin_post');
        Route::get('/edit', 'BackEnd@postA')->name('admin_post_edit');
    });
});
Auth::routes();

