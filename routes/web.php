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
/*
Route::get('posts', ['as' => 'posts.index', 'uses' => 'PostsController@index']);
Route::get('posts/create', ['as' => 'posts.create', 'uses' => 'PostsController@create']);
Route::get('posts/{id}', ['as' => 'posts.show', 'uses' => 'PostsController@show']);
Route::get('posts/{id}/edit', ['as' => 'posts.edit', 'uses' => 'PostsController@edit']);
Route::post('posts', ['as' => 'posts.store', 'uses' => 'PostsController@edit']); */
Route::resource('posts', 'PostsController');