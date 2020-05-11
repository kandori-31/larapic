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

// Route::get('/', function () {
//     $Tweets = \App\Tweet::all();
//     return view('index', ['Tweets' => $Tweets]);
// });
Route::resource('tweets', 'TweetController');
// Route::get('/tweets','TweetController@index');
// Route::get('/tweets/create', 'TweetController@create');
// Route::post('/tweets','TweetController@store');
// Route::get('/tweets/{id}', 'TweetController@show');
// Route::delete('/tweets/destroy/{id}', 'TweetController@destroy');
// Route::get('/submit', function () {
//     return view('submit');
// });
// use Illuminate\Http\Request;
// Route::post('/submit','TweetController@submit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
