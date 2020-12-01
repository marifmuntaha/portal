<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'MainController@home')->name('home');
Route::get('/artikel', 'MainController@article')->name('article');
Route::get('/artikel/{id}/lihat', 'MainController@articledetail')->name('article.detail');
Route::get('/pengumuman', 'MainController@announcement')->name('announcement');
Route::get('/acara', 'MainController@event')->name('event');
Route::get('/acara/{id}/lihat', 'MainController@eventdetail')->name('event.detail');
Route::get('/kategori/{id}', 'MainController@category')->name('category');
Route::get('/tag/{id}', 'MainController@tag')->name('tag');
Route::get('test', 'MainController@test');
Route::match(['post', 'get'], '/kontak', 'MainController@contact')->name('contact');
