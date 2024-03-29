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

Route::get('/', 'AlbumController@index')->name('albums');
Route::get('/albums', 'AlbumController@index')->name('albums');

Route::get('/albums/create', 'AlbumController@create');
Route::post('/albums/store', 'AlbumController@store');
Route::get('/albums/{id}', 'AlbumController@show');

Route::get('/photos/create/{id}', 'PhotosController@create');
Route::post('/photos/store','PhotosController@store');


Route::get('photos/{id}','PhotosController@show')->name('photos.show');
