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

/*Route::get('/', function()
{
	return View::make('hello');
});*/
Route::get('/', function(){
	
});
Route::get('users', function(){
	return View::make('users');
});

//Routes below are for project
Route::get('thread', function(){
	$threads = Thread::all();
	return View::make('thread')->with('threads', $threads);
});
Route::get('thread/{id}', function(){
	$threads = Thread::all();
	return View::make('thread')->with('threads', $threads);
});