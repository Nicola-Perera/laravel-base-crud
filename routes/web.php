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

Route::get('/home', function () {
    return view('home');
})->name('home');

// Comics Routes
Route::get('/comics', 'ComicController@index')->name('comics');

Route::get('comics/{comic}', 'ComicController@show')->name('comic');

// Posts by Admin

// show list of all resources
Route::get('admin/posts', 'Admin\PostController@index')->name('admin.posts.index');

// show form to create new resource
Route::get('posts/create', 'Admin\PostController@create')->name('admin.posts.create');

// save resource into database
Route::post('posts', 'Admin\PostController@store')->name('admin.posts.store');

// show single resource
Route::get('posts/{post}', 'Admin\PostController@show')->name('admin.posts.show');

// show form to edit resource
Route::get('posts/{post}/edit', 'Admin\PostController@edit')->name('admin.posts.edit');

// update the resource into database
Route::put('posts/{posts}', 'Admin\PostController@update')->name('admin.posts.update');

// delete resource
Route::delete('posts/{posts}', 'Admin\PostController@destroy')->name('admin.posts.destroy');
