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

Route::get('/', 'PagesController@index');
Route::get('about','PagesController@about');
Route::get('home', 'HomeController@index');



//Route::model('song','App\Song');
Route::bind('songs',function($slug){
	return App\Song::whereSlug($slug)->first();
});

/*
get('songs','SongsController@index');
get('songs/{slug}','SongsController@show');
get('songs/{slug}/edit','SongsController@edit');
patch('songs/{slug}','SongsController@update');
*/

$router->resource('songs','SongsController');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
