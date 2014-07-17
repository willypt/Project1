<?php
	class Thread extends Eloquent {
		protected $primaryKey = 't_id';
		public function post(){
			return $this->hasMany('Post', 'p_id');
		}
		public static function validate($input){
			$rules = array(
				'Name' => 'Required|Min:3|Max:20|alpha_dash',
				'Title' => 'Required|Min:5|Max:100',
				'Post' => 'Required|Min:10'
			);
			return Validator::make($input, $rules);
		}
	}