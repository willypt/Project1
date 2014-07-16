<?php
	class Post extends Eloquent {
		protected $primaryKey = 'p_id';
		public function thread(){
			return $this->belongsTo('Thread', 't_id');
		}

		public function formattedUpdatedAt(){
			$x = strtotime($this->updated_at);
			return date("H:i a, d-M-Y");
		}

	}