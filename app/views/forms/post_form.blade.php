@section('post_form')
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
