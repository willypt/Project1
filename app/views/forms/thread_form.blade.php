@section('thread_form')
<div class="card content_card">
    <h2>Start New Thread</h2>
    @if($errors->count() > 0)
        <p>Thread not Posted. Please check below for errors</p>
    @endif
    {{{ isset($err)? $err : ''}}}


    {{ Form::open(array('url'=>'addthread')) }}
        <div class="input-wrap">
            {{ Form::label('Name', 'Name') }}
            {{ Form::text('Name', $value=null, $attributes = array('placeholder' => "Be Anonymous! Don't reveal real name!")) }}
            <span>
                {{ $errors->first('Name') }}
            </span>
        </div>
        <div class="input-wrap">
            {{ Form::label('Title', 'Title') }}
            {{ Form::text('Title', $value=null, $attributes = array('placeholder' => "Make cool catchy words...")) }}
            <span>
                {{ $errors->first('Title') }}
            </span>

        </div>
        <div class="input-wrap">
            {{ Form::label('Post', 'Post') }}
            {{ Form::textarea('Post', $value=null, $attributes = array('placeholder' => "Say something...")) }}
            <span>
                {{ $errors->first('Post') }}
            </span>

        </div>
        {{ Form::submit('Reply') }}
    {{ Form::close() }}
</div>
@stop