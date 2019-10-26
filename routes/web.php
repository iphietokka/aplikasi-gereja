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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/umat', 'UmatController@index')->name('umat');
Route::get('/umat/create', 'UmatController@create')->name('umat-create');
Route::post('/umat/store', 'UmatController@store')->name('umat-store');
Route::get('/umat/edit/{id}', 'UmatController@edit')->name('umat-edit');
Route::post('/umat/edit', 'UmatController@update')->name('umat-update');
Route::delete('/umat/{id}', 'UmatController@destroy')->name('umat-delete');
Route::get('/umat/details/{id}', 'UmatController@show')->name('umat-details');

Route::get('/anak-umat', 'AnakUmatController@index')->name('anak-umat');
Route::get('/anak-umat/create', 'AnakUmatController@create')->name('anak-umat-create');
Route::post('/anak-umat/store', 'AnakUmatController@store')->name('anak-umat-store');
Route::get('/anak-umat/edit/{id}', 'AnakUmatController@edit')->name('anak-umat-edit');
Route::post('/anak-umat/edit', 'AnakUmatController@update')->name('anak-umat-update');
Route::delete('/anak-umat/{id}', 'AnakUmatController@destroy')->name('anak-umat-delete');


Route::get('/umat-almarhum', 'UmatAlmarhumController@index')->name('umat-almarhum');
Route::get('/umat-almarhum/create', 'UmatAlmarhumController@create')->name('umat-almarhum-create');
Route::post('/umat-almarhum/store', 'UmatAlmarhumController@store')->name('umat-almarhum-store');
Route::post('/umat-almarhum/edit/{id}', 'UmatAlmarhumController@update')->name('umat-almarhum-update');
Route::delete('/umat-almarhum/{id}', 'UmatAlmarhumController@destroy')->name('umat-almarhum-delete');
Route::get('/umat-almarhum/details/{id}', 'UmatAlmarhumController@show')->name('umat-almarhum-details');
