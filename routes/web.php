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
Route::get('getTags.json','TagController@getTags')->name('getTags');
Route::prefix('admin')->middleware('checkAdmin')->group(function () {

    Route::get('/', 'BackEndController@index')->name('admin_dashboard');

    Route::prefix('post')->group(function () {
        Route::get('/', 'BackEndController@post')->name('admin_post');
        Route::get('/create', 'PostController@create')->name('admin_post_create');
        Route::get('/edit/{id}', 'PostController@edit')->name('admin_post_edit');
        Route::post('/store', 'PostController@store')->name('admin_post_store');
        Route::delete('/delete/{id}', 'PostController@destroy')->name('admin_post_delete');
        Route::post('change_status/{id}', 'PostController@changeStatus')->name('admin_post_change_status');

    });
});
Auth::routes();

