<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	//memanggil model post
	$posts = App\Post::all();
    return view('welcome')->withPosts($posts);
});

Route::auth();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('posts', 'PostController');