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


Auth::routes();

Route::get('/', 'PostController@getPosts')->name('post.list');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/post/{slug}', 'PostController@getPost')->name("post.view");

Route::get('/post/create', 'PostController@getCreatePost')->name('post.create')->middleware('auth');
Route::post('/post/create', 'PostController@postCreatePost')->name('post.create')->middleware('auth');

Route::get('/my-posts', 'UserController@getPosts')->name('user.posts');

