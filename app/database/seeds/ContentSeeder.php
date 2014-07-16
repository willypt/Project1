<?php
	class ContentSeeder extends Seeder {
		public function run(){
			DB::table('threads')->delete();
			DB::table('posts')->delete();

			$t_arr = array(
				array(
					'title' => 'Hello World 1',
					'created_at' => new DateTime
				),
				array(
					'title' => 'Hello World 2',
					'created_at' => new DateTime
				),
				array(
					'title' => 'Hello World 3',
					'created_at' => new DateTime
				)
			);
			DB::table('threads')->insert($t_arr);

			$p_arr = array(
				array(
					'name' => 'People X',
					'post_content' => 'Hello World1!',
					't_id' => '1'
				),
				array(
					'name' => 'People Y',
					'post_content' => 'Hello World2!',
					't_id' => '1'
				),
				array(
					'name' => 'People A',
					'post_content' => 'Hello World3!',
					't_id' => '3'
				),
				array(
					'name' => 'People D',
					'post_content' => 'Hello WorlD4!',
					't_id' => '3'
				),
				array(
					'name' => 'People A',
					'post_content' => 'Hello World5!',
					't_id' => '1'
				),
				array(
					'name' => 'People X',
					'post_content' => 'Hello World6!',
					't_id' => '2'
				),
				array(
					'name' => 'People Z',
					'post_content' => 'Hello World7!',
					't_id' => '2'
				),
				array(
					'name' => 'People B',
					'post_content' => 'Hello World8!',
					't_id' => '1'
				)
			);
			DB::table('posts')->insert($p_arr);
		}
	}