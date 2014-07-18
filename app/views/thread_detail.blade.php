@extends('layout')

@section('content')

	
{{--
    @foreach($posts as $post)
    <div class="card content_card">
        <div><span class="peoplesay">{{$post->name}}</span> <span class="said">said</span> on {{ date("H:i a, d-M-Y",strtotime($post->updated_at) )}}</div>
        <div>
        <p>
        	{{$post->post_content}}
        </p>

        </div>
    </div>
    @endforeach--}}

    <script type="text/javascript" defer>
        var content_final = "";
        jQuery(document).ready(function($) {

            $("#maincontent").append('<div class="card first bigtitle"><div class="card_header"><h3>{{ $thread->title }}</h3><span class="time">'+ jQuery.format.prettyDate('{{ $thread->created_at}}')+'</span></div><hr/></div>');

            $.ajaxSetup({ cache: false });
            $.getJSON('{{ URL::route("thread.id", $thread->t_id)}}', function(result) {
                $.each(result, function(i, field){
                    content_final += '<div class="card content_card">';
                        content_final += '<div>';
                        content_final += '<span class="peoplesay">'+field.name+'</span>';
                        content_final += '<span class="said">said</span> on '+jQuery.format.prettyDate(field.updated_at)+'</div>';
                        content_final += '<div><p>'+field.post_content+'</p></div>';
                    content_final += '</div>';
                    
                });
                $("#maincontent").append(content_final);
                $("#maincontent").waiting('done');
            });
        });
    </script>

@stop