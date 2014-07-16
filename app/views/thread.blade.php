@extends('layout')

@section('content')
	<ul>
	@foreach($threads as $thread)
		 <li>{{ $thread->title }} </li>
	@endforeach
	</ul>
@stop