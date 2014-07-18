<!DOCTYPE html>
<html>
<head>
    {{HTML::style('css/style.css')}}
    {{HTML::style('css/waiting.css')}}
    {{HTML::script('//code.jquery.com/jquery-1.11.0.min.js')}}
    {{HTML::script('js/jquery.waiting.min.js')}}
    {{HTML::script('js/jquery.dateFormat.min.js')}}
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
        <div id="maincontent">
        <!-- Loading is suppposed to be here. -->
        </div>
        @if(Request::is('thread'))
            @include('forms.thread_form')
            @yield('thread_form')
        @elseif(Request::is('thread/*'))
            @include('forms.post_form')
            @yield('post_form')
        @endif

	</div>


   <script type="text/javascript">
   $(function () {
        $("#maincontent").waiting();
   });
   </script>
   @yield('content')
</body>
</html>