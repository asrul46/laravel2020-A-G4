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

Route::get('/home', 'GudangController@index')->name('home');

Route::resource('gudang', 'GudangController');

Route::post('gudang/pencarian', 'GudangController@cari')->name('gudang.pencarian');

Route::get('/gudang', 'WebController@gudang');

Route::resource('suppliers', 'SupplierController');
Route::post('suppliers/pencarian', 'SupplierController@cari')->name('suppliers.pencarian');

