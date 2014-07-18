@extends('layout')

@section('content')
		<?php $count = 1; ?>
	@foreach($threads as $thread)


		<a href="{{ URL::route('thread.id', $thread->t_id) }}">
		@if($count == 1)
		<div class="card first bigtitle">
		<?php $count=2; ?>
		@else
		<div class="card bigtitle">
		@endif

			<div class="card_header">
				<h3>{{ $thread->title }}</h3>
				<span class="time">{{ date("H:i a, d-M-Y",strtotime($thread->created_at)) }}</span>
			</div>
	            <hr/>
	    </div>
	    </a>
	@endforeach
@stop

