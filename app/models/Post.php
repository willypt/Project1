<?php
	class Post extends Eloquent {
		protected $primaryKey = 'p_id';
		public function thread(){
			return $this->belongsTo('Thread', 't_id');
		}
		public static function validate($input){
			$rules = array(
				'Name' => 'Required|Min:1|Max:20|Alpha',
				'T_Id' => 'Required|Min:1',
				'Reply' => 'Required|Min:10'
			);
			return Validator::make($input, $rules);
		}
	}