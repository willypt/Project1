<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function($table){
			$table->increments('p_id');
			$table->string('name', 100)->default('');
			$table->text('post_content');
			$table->timestamps();
			$table->integer('t_id')->unsigned();
			$table->index('t_id');
			$table->foreign('t_id')->references('t_id')->on('threads');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('posts');
	}

}
