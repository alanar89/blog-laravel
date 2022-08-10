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





Route::get('/','PaginasController@index');
Route::get('blog/{id}','PaginasController@ver');

Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>'auth'],function(){

Route::get('posts','PostsController@index')->name('posts');
Route::get('postsAlta','PostsController@alta')->name('posts-alta');
Route::get('/','AdminController@index')->name('admin');
Route::post('postsGuardar','PostsController@guardar')->name('guardar');

});
Auth::routes();
Auth::routes(['register' => false]);

