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

    <div class="card content_card">
        <h2>Reply to Thread</h2>
        {{{ isset($err)? $err : ''}}}
        {{ Form::open(array('url'=>'addpost')) }}
            <div class="input-wrap">
                {{ Form::label('Name', 'Name') }}
                {{ Form::text('Name', $value=null, $attributes = array('placeholder' => "Be Anonymous! Don't reveal real name!")) }}
                <span>
                    {{ $errors->first('Name') }}
                </span>

            </div>
            <div class="input-wrap">
                {{ Form::label('Reply', 'Reply') }}
                {{ Form::textarea('Reply', $value=null, $attributes = array('placeholder' => "Say something...")) }}
                <span>
                    {{ $errors->first('Reply') }}
                </span>
            </div>
            {{ Form::hidden('T_Id', $thread->t_id, array('readonly'))}}
            {{ Form::submit('Reply') }}
        {{ Form::close() }}
    </div>
@stop