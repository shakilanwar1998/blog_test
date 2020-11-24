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
Route::get('/blogs', 'blogsController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/blogs/create', 'blogsController@getCreateBlog');

Route::post('/blogs/create', 'blogsController@postCreateBlog');

Route::get('/blogs/{id}', 'blogsController@getBlog');

Route::get('/admin/blogs/', 'AdminBlogsController@index');
Route::get('/admin/blogs/approve/{id}', 'AdminBlogsController@approve');
Route::get('/admin/blogs/delete/{id}', 'AdminBlogsController@delete');

