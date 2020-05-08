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

// Routes for auth
Auth::routes();
// Routes for Pages

Route::get('/', 'PageController@getHome')->name('pages.home');
Route::get('/aboutUs', 'PageController@getAboutUs')->name('pages.aboutUs');
Route::get('/contactUs', 'PageController@getContactUs')->name('pages.contactUs');

Route::get('/blogs', 'BlogController@index')->name('blogs.index');
Route::get('/blogs/{id}', 'BlogController@show')->name('blogs.show');


// Route for posts
Route::get('/posts', 'PostController@index')->name('posts.index')->middleware('auth');
Route::get('/posts/show/{id}', 'PostController@show')->name('posts.show')->middleware('auth');
Route::get('/posts/create', 'PostController@create')->name('posts.create')->middleware('auth');
Route::Post('/posts/store', 'PostController@store')->name('posts.store')->middleware('auth');
Route::get('/posts/{id}/edit', 'PostController@edit')->name('posts.edit')->middleware('auth');
Route::Post('/posts/{id}', 'PostController@update')->name('posts.update')->middleware('auth');
Route::delete('/posts/{id}','PostController@destroy')->name('posts.destroy')->middleware('auth');


// Route for Comments
Route:: Post('/comments','CommentController@store')->name('comments.store')->middleware('auth');



 

