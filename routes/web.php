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

Route::get('/', 'Page@glavnaja')->name('glavnaja');
Route::get('/raki', 'Page@raki')->name('raki');
Route::get('/dostavka', 'Page@dostavka')->name('dostavka');
Route::get('/kontakty', 'Page@kontakty')->name('kontakty');
Route::get('/politika-konfidentsialnosti', 'Page@politika_konfidentsialnosti')->name('politika-konfidentsialnosti');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
