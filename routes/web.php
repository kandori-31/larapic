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


Route::resource('tweets', 'TweetController');

Route::get('/user/{id}', 'TweetController@user');

Route::post('/tweets/{id}/comments', 'CommentController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
