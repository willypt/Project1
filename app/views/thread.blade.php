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
				<h1>{{ $thread->title }}</h1>
				<span class="time">{{ $thread->formattedCreatedAt() }}</span>
			</div>
	            <hr/>
	    </div>
	    </a>
	@endforeach
@stop