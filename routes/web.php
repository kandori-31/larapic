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

Route::get('/', function () {
    $Tweets = \App\Tweet::all();
    return view('index', ['Tweets' => $Tweets]);
});
Route::get('/submit', function () {
    return view('submit');
});
use Illuminate\Http\Request;
Route::post('/submit','TweetController@submit');
