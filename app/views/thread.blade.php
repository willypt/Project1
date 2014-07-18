@extends('layout')

@section('content')
{{--$threads
	@foreach($threads as $thread)
		<a href="{{ URL::route('thread.id', $thread->t_id) }}">
		<div class="card bigtitle">
			<div class="card_header">
				<h3>{{ $thread->title }}</h3>
				<span class="time">{{ date("H:i a, d-M-Y",strtotime($thread->created_at)) }}</span>
			</div>
	            <hr/>
	    </div>
	    </a>
	@endforeach--}}

	<script type="text/javascript" defer>
		var content_final = "";
		jQuery(document).ready(function($) {
			$.ajaxSetup({ cache: false });
			var count = 0;
			$.getJSON('{{ URL::route("thread")}}', function(result) {
				var url_template = "{{ URL::route('thread') }}";
				//above is simply a hack. Need to find proper way
				$.each(result, function(i, field){
					content_final += "<a href='" + url_template + '/'+ field.t_id + "'>";
					content_final += '<div class="card bigtitle">';
					content_final += '<div class="card_header">';
					content_final += '<h3>'+field.title+'</h3>';
					content_final += '<span class="time">'+jQuery.format.prettyDate(field.created_at)+'</span>';
					content_final += '</div>';
					content_final += '</div>';
					content_final += "</a>";
					count++
				});
				$("#maincontent").append(content_final);
				$("#maincontent").waiting('done');
			}).done(function(jqxhr, textStatus, error){
				$("#maincontent").waiting('done');
				if(count <= 0){
					$("#maincontent").css('display', 'none');
				}
			});
		});
	</script>
@stop

