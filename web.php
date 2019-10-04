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

// BARANG _ PENJUALAN _ PEMBELIAN

Route::resource('/barang', 'Barang');
Route::resource('/penjualan', 'Penjualan');
Route::resource('/pembelian', 'Pembelian');


//Loginnnnnnnnnnnnnnnnnnn

Route::get('login', 'login@index');
Route::post('login/cek', 'Login@cek');
Route::get('/' , 'Dashboard@index');
Route::get('/logout', 'login@logout');
