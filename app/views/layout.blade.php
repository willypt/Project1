@include('forms')
<!DOCTYPE html>
<html>
<head>
    {{HTML::style('css/style.css')}}
	<title>
		Public Board
	</title>
</head>
<body>
	<div id="wrapper">
        <a href="{{ URL::route('thread') }}">
            <div class="card header">
                <img src="http://willypt.com/images/logo.png" width='100%'/>
            </div>
        </a>

		@yield('content')
        @if(Request::is('thread'))
            @yield('thread_form')
        @elseif(Request::is('thread/*'))
            @yield('post_form')
        @endif
        
	</div>
</body>
</html>