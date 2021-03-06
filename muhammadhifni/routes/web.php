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

Route::get('/refresh_captcha', 'Auth\Registercontroller@refreshCaptcha')->name('refresh');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/kategori_artikel', 'kategoriartikelcontroller@index')->name('kategori_artikel.index');

Route::get('/kategori_artikel/{id}', 'kategoriartikelcontroller@show')->name('kategori_artikel.show');