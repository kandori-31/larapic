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

use Illuminate\Http\Request;

Route::get('/submit', function(Request $request){
    $data = $request->validate([
        'title' => 'required | max:255',
        'image'  => 'required | url | max:255',
        'text' => 'required | max:255',
    ]);

    $Tweet = new App\Tweet($data);
    $Tweet->save();

    return redirect('/');
});
