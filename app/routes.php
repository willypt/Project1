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
	return Redirect::to('thread');
});
Route::get('users', function(){
	return View::make('users');
});

//Routes below are for project
Route::get('thread', array('as'=>'thread', function(){
	$threads = Thread::all();
	return View::make('thread')->with('threads', $threads);
}));

Route::get('thread/{id}', array('as'=>'thread.id',  function($id){
	$posts = Post::where('t_id', '=', $id)->get();//($id)->post;
	$thread = Thread::find($id);
	//return ($posts)? print_r($posts): "Data not found";
	return View::make('thread_detail')->with('posts', $posts)->with('thread', $thread);
}));