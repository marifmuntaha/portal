<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MainController@home')->name('portal.home');
Route::match(['get', 'post'],'/postingan', 'PostController@all')->name('portal.post.all');
Route::match(['get', 'post'],'/postingan/buat', 'PostController@create')->name('portal.post.create');
Route::match(['get', 'post'],'/postingan/{id}/ubah', 'PostController@edit')->name('portal.post.edit');
Route::match(['get', 'post'],'/postingan/kategori', 'PostController@category')->name('portal.post.category');
Route::match(['get', 'post'],'/postingan/tagar', 'PostController@tag')->name('portal.post.tag');
Route::match(['get', 'post'],'/komentar', 'CommentController@all')->name('portal.comment.all');
Route::match(['get', 'post'],'/komentar/{id}/lihat', 'CommentController@detail')->name('portal.comment.detail');

Route::match(['get', 'post'], '/perpesanan', 'MessageController@all')->name('portal.message.all');
Route::get('/perpesanan/{id}/lihat', 'MessageController@detail')->name('portal.message.detail');
Route::get('/pengaturan', 'MainController@home')->name('portal.setting');

Route::get('test', 'CommentController@test');
