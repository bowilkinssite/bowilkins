<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function homepage()
	{
		return View::make('homepage');
	}
	public function aboutme()
	{
		return View::make('aboutme');
	}
	public function issues()
	{
		return View::make('issues');
	}
	public function contact()
	{
		return View::make('contact');
	}
	public function sendcontact()
	{
		
	}
	public function media()
	{
		return View::make('media');
	}

}
