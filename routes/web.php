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


/*  Route de la home  */
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

Route::resource('article', 'ArticleController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
