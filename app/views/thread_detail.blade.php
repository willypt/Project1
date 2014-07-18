@extends('layout')

@section('content')
	<div class="card first bigtitle">
		<div class="card_header">
			<h3>{{ $thread->title }}</h3>
			<span class="time">{{ $thread->created_at}}</span>
		</div>
            <hr/>
    </div>

    @foreach($posts as $post)
    <div class="card content_card">
        <div><span class="peoplesay">{{$post->name}}</span> <span class="said">said</span> on {{ date("H:i a, d-M-Y",strtotime($post->updated_at) )}}</div>
        <div>
        <p>
        	{{$post->post_content}}
        </p>

        </div>
    </div>
    @endforeach
@stop