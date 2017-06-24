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

Route::auth();

Route::group(['middleware' => 'auth'], function() {
	Route::get('/', 'TweetController@index');
	Route::post('tweet', 'TweetController@save');
	Route::get('tweet/{id}/delete', 'TweetController@destroy');
});

Route::group(['middleware' => 'auth'],function(){
	Route::get('userSearch/{username}', 'UserController@searchUser');
});


Route::group(['middleware' => 'auth'],function(){
	Route::get('/{username}', 'UserController@viewUser');
	Route::get('/follow/{id}', 'UserController@follow');
});