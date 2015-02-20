<?php

//home page
Route::get('/', 'PagesController@home');

//Notices
Route::resource('notices','NoticesController');

//authentication
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
