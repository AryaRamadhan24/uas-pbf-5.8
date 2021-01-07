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

Route::get('/jenis', 'senarController@jenis');

Route::get('/ukuran', 'senarController@ukuran');

Route::get('/tambah', 'senarController@tambah');

Route::get('/tambahUkuran', 'senarController@tambahUkuran');

Route::get('/tambahJenis', 'senarController@tambahJenis');