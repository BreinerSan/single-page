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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'WebController@index');

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');

//Admin

Route::resource('admin/galeria', 'admin\ImagesController')->middleware('auth');
Route::resource('admin/info', 'admin\WebinfoController')->middleware('auth');
Route::resource('admin/nosotros', 'admin\InfoNosotrosController')->middleware('auth');

//Route::get('contactus', 'ContactUSController@contactUS');
Route::post('contactus', 'ContactUSController@contactUSPost')->name('contactus.store');

Route::get('admin/mensajes', 'ContactUSController@index')->middleware('auth');;
Route::get('admin/mensajes/{id}', 'ContactUSController@show')->name('mensajes.show')->middleware('auth');
