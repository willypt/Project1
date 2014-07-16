<?php
	class Thread extends Eloquent {
		protected $primaryKey = 't_id';
		public function post(){
			return $this->hasMany('Post', 'p_id');
		}
		public function formattedCreatedAt(){
			$x = strtotime($this->created_at);
			return date("H:i a, d-M-Y");
		}
	}