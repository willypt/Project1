@extends('layout')

@section('content')
	<ul>
	@foreach($posts as $post)
		 <li>{{ $post->name }} </li>
	@endforeach
	</ul>
@stop