@extends('layout')

@section('content')
	<div class="card first bigtitle">
		<div class="card_header">
			<h1>{{ $thread->title }}</h1>
			<span class="time">{{ $thread->formattedCreatedAt() }}</span>
		</div>
            <hr/>
    </div>

    @foreach($posts as $post)
    <div class="card content_card">
        <div><span class="peoplesay">{{$post->name}}</span> <span class="said">said</span> on {{$post->formattedUpdatedAt()}}</div>
        <div>
        <p>
        	{{$post->post_content}}
        </p>

        </div>
    </div>
    @endforeach
@stop