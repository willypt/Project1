<?php
	class Thread extends Eloquent {
		protected $primaryKey = 't_id';
		public function post(){
			return $this->hasMany('Post', 'p_id');
		}
	}