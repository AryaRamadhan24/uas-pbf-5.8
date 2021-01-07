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

Route::get('/senar', 'senarController@index');

Route::get('/jenis', 'jenisController@index');

Route::get('/jenis/add', 'jenisController@add');

Route::post('/jenis/add', 'jenisController@store');

Route::get('/jenis/edit/{id}', 'jenisController@edit');

Route::get('/ukuran', 'senarController@ukuran');

Route::get('/tambah', 'senarController@tambah');

Route::get('/tambahUkuran', 'senarController@tambahUkuran');


