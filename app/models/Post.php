<?php
	class Post extends Eloquent {
		protected $primaryKey = 'p_id';
		public function thread(){
			return $this->belongsTo('Thread', 't_id');
		}

	}