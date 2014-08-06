<!DOCTYPE html>
<html>
<head>
  <title>
    Public Board
  </title>

    {{ Minify::stylesheet(['/css/style.css', '/css/waiting.css'], array('async'))}}

</head>
<body>
  <div id="wrapper">
        <a href="{{ URL::route('thread') }}">
            <div class="card header">
                <img src="http://willypt.com/images/logo.png" width='450px' height='117px'/>
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


   {{Minify::javascript(['/js/jquery-1.11.0.min.js', '/js/jquery.waiting.min.js', '/js/jquery.dateFormat.min.js'])}}
   <script type="text/javascript" defer>
   $(function () {
        $("#maincontent").waiting();
   });
   </script>
   @yield('content')



</body>
</html>