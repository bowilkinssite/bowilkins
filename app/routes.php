<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@homepage');

Route::get('/about', 'HomeController@aboutme');

Route::get('/issues', 'HomeController@issues');

Route::get('/contact', 'HomeController@contact');

// Route::post('/contact', 'HomeController@sendcontact');

Route::get('/media', 'HomeController@media');
