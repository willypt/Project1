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
	if(!isset($id)){
		return Redirect::to('thread');
	}
	$posts = Post::where('t_id', '=', $id)->get();//($id)->post;
	$thread = Thread::find($id);
	//return ($posts)? print_r($posts): "Data not found";
	if(count($thread) == 0 || count($posts) == 0){
		return Redirect::to('thread');
	}
	return View::make('thread_detail')->with('posts', $posts)->with('thread', $thread);
}));
Route::post('addthread', function(){
	$p = Input::all();
	$v = Thread::validate($p);
	if($v->passes()){
		$new_thread = new Thread;
		$new_thread->title = $p['Title'];
		$t_id = 0;
		if($new_thread->save()) {
			$t_id = $new_thread->t_id;
			$new_post = new Post;
			$new_post->name = $p['Name'];
			$new_post->post_content = $p['Post'];
			$new_post->t_id = $t_id;
			if($new_post->save()){
				//return 'Posted!';
				return Redirect::to('thread/'.$new_post->t_id);			
			} else {
				return Redirect::back()->withInput()->with('err', 'Something is wrong while posting post');
			}
		} else {
			return Redirect::back()->withInput()->with('err', 'Something is wrong while posting thread');
		}		
	} else {
		return Redirect::back()->withInput()->withErrors($v->messages());
	}
});

Route::post('addpost', function(){
	$p = Input::all();
	$v = Post::validate($p);
	if($v->passes()){
		$new_post = new Post;
		$new_post->name = $p['Name'];
		$new_post->post_content = $p['Reply'];
		$new_post->t_id = $p['T_Id'];
		if($new_post->save()){
			//return 'Posted!';
			return Redirect::to('thread/'.$new_post->t_id);			
		} else {
			return Redirect::back()->withInput()->with('err', 'Something is wrong while posting post');
		}
	} else {
		return Redirect::back()->withInput()->withErrors($v->messages());
	}
});
